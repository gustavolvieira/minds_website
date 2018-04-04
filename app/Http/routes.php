<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('home',   'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Static Pages

Route::get('/home_example', function () {
    return view('static_examples/index');
});

Route::get('/team_example', function () {
    return view('static_examples/team');
});
Route::get('/news_example', function () {
    return view('static_examples/news');
});
Route::get('/post_example', function () {
    return view('static_examples/post');
});
Route::get('/person_example', function () {
    return view('static_examples/person');
});
Route::get('/publications_example', function () {
    return view('wip');
});
Route::get('/project_example', function () {
    return view('static_examples/project');
});
Route::get('/projects_example', function () {
    return view('static_examples/projects');
});
Route::get('/resources_example', function () {
    return view('static_examples/resources');
});


//Dynamic Pages
Route::get('/', 'PublicController@getHome');

Route::get('/about', 'PublicController@getAbout');

Route::get('/team', 'PublicController@getTeam');
Route::get('/team/{p_id}/{p_name?}', 'PublicController@getPerson');

Route::get('/publications', function () {
    return view('wip');
});

Route::get('/news', 'PublicController@getNews');
Route::get('/news/{p_id}', 'PublicController@getPost');

Route::get('/resources', 'PublicController@getResources');
Route::get('/projects', 'PublicController@getProjects');
Route::get('/project/{p_id}', 'PublicController@getProject');

Route::get('/php', function () {
    return view('phpInfo');
});