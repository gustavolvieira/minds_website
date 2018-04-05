<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectTag extends Model
{

    protected $table = 'project_tag';
    public $timestamps = false;

}
