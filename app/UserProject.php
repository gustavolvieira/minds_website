<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserProject extends Model
{

    protected $table = 'project_user';
    public $timestamps = false;


    public function resource(){
        return $this->hasOne('App\Resource', 'id', 'project_id');
    }

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
