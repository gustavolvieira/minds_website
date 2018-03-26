<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use App\UserAssociation;
use App\Association as Association;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'user';

//    protected $appends = ['is_alumni'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_association(){
        return $this->hasMany('App\UserAssociation');
    }

    public function current_association(){
        return $this->hasMany('App\UserAssociation')->where('end_date', '=', null);
    }

    public function related_posts(){
//        return $this->hasManyThrough('App\Post', 'App\UserPost', 'user_id', 'post_id');
//        return $this->hasMany('App\UserPost', 'user_id', 'id')->with('post');

        #TODO: improve/fix this query (remove bloody loop)
        $v_posts = array();
        foreach ($this->hasMany('App\UserPost', 'user_id', 'id')->with('post')->get() as $i_userPost) {
            $i_post = $i_userPost->post()->first()->toArray();
            if($i_post['is_active'] == 1){
                $v_posts[] = $i_post;
            }
        }
        // sort by created_at in desc order
        usort($v_posts, function ($a, $b) {
            if ($a['created_at'] == $b['created_at']) return 0;
            return $a['created_at'] > $b['created_at'] ? -1 : 1;
        });
        return $v_posts;
    }

    public function isAlumni(){
        # TODO: remove collaborators whose collaboration ended but are not inactive
        return !in_array(null, $this->user_association()->lists('end_date'));
    }

    public static function getUser($p_id){

        return User::where('id', '=', $p_id)
            ->where('is_active', '=', 1)
            ->select(['user.full_name', 'user.description', 'user.photo_url', 'user.email', 'user.lattes_url', 'user.researchgate_url', 'user.webpage_url', 'user.phone', 'user.country', 'user.id', 'user.affiliation'])
            ->firstOrFail();
    }

    public static function getRelatedNews($p_id, $p_number = 3)
    {

//        return User::where('id', '=', $p_id)
//            ->where('is_active', '=', 1)
//            ->firstOrFail()
//            ->related_posts()
//            ->where('post.is_active', '=', 1)
//            ->orderBy('created_at', 'desc')
//            ->take($p_number)
//            ->select(['post.id', 'post.title', 'post.created_at'])
//            ->get()
//            ->toArray();

        $v_news = User::where('id', '=', $p_id)
            ->where('is_active', '=', 1)
            ->firstOrFail()
            ->related_posts();

        return array_slice($v_news, 0, $p_number);
    }


    public static function getAssociations($p_id){

        return User::find($p_id)
            ->user_association()
            ->join('association', 'association.id', '=', 'user_association.association_id')
            ->select(['association.label', 'user_association.start_date', 'user_association.end_date', 'user_association.is_visiting'])
            ->orderBy('user_association.start_date')
            ->get()
            ->toArray();
    }


    public static function getCurrentMembersCount(){

        return UserAssociation::where('end_date', '=', null)
            ->join('user', 'user.id', '=', 'user_association.user_id')
            ->where('user.is_active', '=', 1)
            ->count();
    }

    public static function getCoordinators(){

        return UserAssociation::where('end_date', '=', null)
            ->join('association', 'association.id', '=', 'user_association.association_id')
            ->where('association.id', '=', 1)
            ->join('user', 'user.id', '=', 'user_association.user_id')
            ->where('user.is_active', '=', 1)
            ->get(['user.full_name', 'user.description', 'association.label', 'user.photo_url', 'user.id as user_id'])
            ->toArray();
    }

    public static function getResearchers(){

        return UserAssociation::where('end_date', '=', null)
            ->join('association', 'association.id', '=', 'user_association.association_id')
            ->whereIn('association.id', [2,3,4,5])
            ->join('user', 'user.id', '=', 'user_association.user_id')
            ->where('user.is_active', '=', 1)
            ->orderBy('association.id', 'asc')
            ->orderBy('user_association.start_date', 'asc')
            ->get(['user.full_name', 'association.label', 'user.photo_url', 'user.id as user_id'])
            ->toArray();
    }

    public static function getCollaborators(){

        return UserAssociation::where('end_date', '=', null)
            ->join('association', 'association.id', '=', 'user_association.association_id')
            ->whereIn('association.id', [6])
            ->join('user', 'user.id', '=', 'user_association.user_id')
            ->where('user.is_active', '=', 1)
            ->orderBy('user.full_name', 'asc')
            ->get(['user.full_name', 'association.label', 'user.photo_url', 'user.id as user_id', 'user.country', 'user.affiliation'])
            ->toArray();
    }

    public static function getAlumni(){

        $v_users = array();

        #TODO: improve/fix this query (remove bloody loop)
        foreach (User::where('is_active', '=', 1)->get() as $i_user){
            if($i_user->isAlumni()){
                $i_user_association = $i_user->user_association()->orderBy('end_date', 'desc')->first();
//                $i_user_association = User::getAssociations($i_user['id'])->orderBy('end_date', 'desc')->first();
                $i_label = $i_user_association->association()->first()['label'];
                $i_endYear = substr($i_user_association['end_date'],0, 4);
                $v_users[] = array('full_name'=> $i_user['full_name'],
                    'label'=> $i_label,
                    'photo_url' => $i_user['photo_url'],
                    'end_year' => $i_endYear,
                    'user_id' => $i_user['id']);
            }
        }

        // sort by end year in desc order
        usort($v_users, function ($a, $b) {
            if ($a['end_year'] == $b['end_year']) return 0;
            return $a['end_year'] > $b['end_year'] ? -1 : 1;
        });

        return $v_users;
    }
}
