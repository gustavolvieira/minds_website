<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resource';

    //

//    public function related_users(){
//        return $this->hasManyThrough('App\User', 'App\UserPost', 'post_id', 'user_id');
//    }

    public static function getResources(){
        return Resource::where('resource.is_active', 1)
            ->join('user', 'user.id', '=', 'resource.user_id')
            ->join('project', 'project.id', '=', 'resource.project_id')
            ->select('user.full_name as user_name', 'project.name as project_name', 'resource.project_id', 'resource.name', 'resource.id', 'resource.user_id', 'resource.description', 'resource.created_at', 'resource.updated_at', 'resource.file_path')
            ->orderBy('resource.updated_at', 'desc')
            ->get()
            ->toArray();
    }
}
