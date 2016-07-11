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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => array('auth')], function () {
    // All my routes that needs a logged in user
    Route::get('/dashboard', array('as'=>'dashboard', 'uses'=>'DashboardController@index'));

	Route::resource('projects', 'ProjectController');

	Route::get('invite-users',array('as'=>'invite_users','uses'=>'ProjectController@showInvitationScreen'));

	Route::post('invite-users',array('as'=>'invitation_send','uses'=>'ProjectController@sendInvitationToUsers'));

});
