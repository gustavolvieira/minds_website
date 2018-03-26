<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    //

    public function related_users(){
        return $this->hasManyThrough('App\User', 'App\UserPost', 'post_id', 'user_id');
    }

    public static function getRecentPosts($p_number = 3){
        return Post::where('post.is_active', 1)
            ->join('user', 'user.id', '=', 'post.user_id')
            ->where('user.is_active', 1)
            ->select('user.id as user_id', 'user.full_name as user_name', 'post.title', 'post.id', 'post.text', 'post.created_at', 'post.image_url')
            ->orderBy('post.created_at', 'desc')
            ->take($p_number)
            ->get()
            ->toArray();
    }

    public static function getPost($p_id){
        return Post::where('post.is_active', 1)
            ->where('post.id', '=', $p_id)
            ->join('user', 'user.id', '=', 'post.user_id')
            ->where('user.is_active', 1)
            ->select('user.id as user_id', 'user.full_name as user_name', 'post.title', 'post.id', 'post.text', 'post.created_at', 'post.image_url')
            ->firstOrFail();
    }
}
