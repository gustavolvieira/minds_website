<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Post;
use App\Resource;
use App\Project;

class PublicController extends Controller
{
    // Team
    public function getTeam()
    {
        $v_coordinators = User::getCoordinators();
        $v_researchers = User::getResearchers();
        $v_collaborators = User::getCollaborators();
        $v_alumni = User::getAlumni();
//        $v_coordinators = User::all();
//        $v_researchers = User::all();
//        $v_collaborators = User::all();
//        $v_alumni = User::all();
        return view('team')->with(['p_coordinators' => $v_coordinators,
            'p_researchers' => $v_researchers,
            'p_collaborators' => $v_collaborators,
            'p_alumni' => $v_alumni]);
    }

    public function getPerson($p_id, $p_name = null)
    {
        $v_user = User::getUser($p_id);
        $v_associations = User::getAssociations($p_id);
//        $v_papers = User::getPapers($p_id, 3);
        $v_relatedNews = User::getRelatedNews($p_id, 3);
        $v_papers = null;
        return view('person')->with(['p_user' => $v_user,
            'p_associations' => $v_associations,
            'p_papers' => $v_papers,
            'p_relatedNews' => $v_relatedNews
        ]);
    }

    public function getAbout()
    {
        $v_userCount = User::where('is_active', 1)->count();
        $v_nationalities = User::where('is_active', 1)->get()->groupBy('country')->count();
        $v_currentMembersCount = User::getCurrentMembersCount();
        $v_alumniCount = $v_userCount - $v_currentMembersCount;
        $v_years = round((new \DateTime())->diff(\DateTime::createFromFormat('Y-m-d', '2014-01-01'))->days/365);
        return view('about')->with(['p_userCount' => $v_userCount,
            'p_nationalities' => $v_nationalities,
            'p_currentMembersCount' => $v_currentMembersCount,
            'p_alumniCount' => $v_alumniCount,
            'p_years' => $v_years
        ]);
    }

    public function getHome(){
        $v_news = Post::getRecentPosts(3);
        return view('index')->with(['p_news' => $v_news]);
    }

    public function getNews(){
        $v_news = Post::getRecentPosts(5);
        return view('news')->with(['p_news' => $v_news]);
    }

    public function getPost($p_id){
        $v_post =  Post::getPost($p_id);
        return view('post')->with(['p_post' => $v_post]);
    }

    public function getResources(){
        $v_resources =  Resource::getResources();
        return view('resources')->with(['p_resources' => $v_resources]);
    }

    public function getProjects(){
        $v_projectsReturn =  Project::getProjects();
        $v_projects = $v_projectsReturn['projects'];
        $v_usersLists = $v_projectsReturn['usersLists'];
        $v_tagsLists = $v_projectsReturn['tagsLists'];
        return view('projects')->with(['p_projects' => $v_projects, 'p_usersLists' => $v_usersLists, 'p_tagsLists' => $v_tagsLists]);
    }

    public function getProject($p_id){
        $v_project =  Project::getProject($p_id);
        return view('projects')->with(['p_project' => $v_project]);
    }
}
