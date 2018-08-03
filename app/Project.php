<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    //

    public function related_users(){
        return $this->hasManyThrough('App\User', 'App\UserProject', 'project_id', 'user_id');
    }

    // TODO: fix atrocious for usage
    public static function getProjects($p_number = Null){
        if($p_number === Null){
            $p_number = 999;
        }

        $v_projects = Project::where('project.is_active', 1)
//            ->join('user', 'user.id', '=', 'post.user_id')
//            ->where('user.is_active', 1)
//            ->select('user.id as user_id', 'user.full_name as user_name', 'post.title', 'post.id', 'post.text', 'post.created_at', 'post.image_url')
            ->orderBy('project.updated_at', 'desc')
            ->take($p_number)
            ->get()
            ->toArray();

        $v_usersLists = array();
        $v_tagsLists = array();
        foreach($v_projects as $i_project){
            $v_usersLists[] = Project::getUsers($i_project['id']);
            $v_tagsLists[] = Project::getTags($i_project['id']);
        }

        return array('projects' => $v_projects, 'usersLists' => $v_usersLists, 'tagsLists' => $v_tagsLists);
    }

    public static function getUsers($p_id){
            return UserProject::where('project_user.project_id', '=', $p_id)
                ->join('user', 'user.id', '=', 'project_user.user_id')
                ->where('user.is_active', 1)
                ->orderBy('project_user.order', 'asc')
                ->select('user.id as user_id', 'user.full_name as user_name')
                ->get()
                ->toArray();
    }

    public static function getTags($p_id){
            return ProjectTag::where('project_tag.project_id', '=', $p_id)
                ->join('tag', 'tag.id', '=', 'project_tag.tag_id')
                ->orderBy('tag.name', 'asc')
                ->get()
                ->toArray();
    }

    public static function getImages($p_id){
            return ProjectImage::where('project_image.project_id', '=', $p_id)
                ->orderBy('project_image.order', 'asc')
                ->get()
                ->toArray();
    }


    public static function getResources($p_id){
        return Resource::where('resource.project_id', '=', $p_id)
            ->join('user', 'user.id', '=', 'resource.user_id')
            ->select('user.full_name as user_name', 'resource.project_id', 'resource.name', 'resource.id', 'resource.user_id', 'resource.description', 'resource.updated_at', 'resource.file_path')
            ->orderBy('resource.updated_at', 'desc')
            ->get()
            ->toArray();
    }

    public static function getProject($p_id){
        $v_project = Project::where('project.is_active', '=', 1)
            ->where('id', '=', $p_id)
            ->firstOrFail();

//        $v_usersLists[] = Project::getUsers($i_project['id']);
//        $v_tagsLists[] = Project::getTags($i_project['id']);
        $v_project['users'] = Project::getUsers($p_id);
        $v_project['tags'] = Project::getTags($p_id);
        $v_project['images'] = Project::getImages($p_id);
        $v_project['resources'] = Project::getResources($p_id);

        return $v_project;
//        return array('projects' => $v_projects, 'usersLists' => $v_usersLists, 'tagsLists' => $v_tagsLists);
    }
}
