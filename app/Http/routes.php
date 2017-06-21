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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/','TaskController@task_list');
    Route::get('add-task','TaskController@add_task');
    Route::get('add-notification','TaskController@add_notification');
    Route::get('add-comment','TaskController@add_comment');
    Route::get('show-comment','TaskController@show_comment');
    Route::get('simple-drop-down','TaskController@simple_drop_down');
    Route::get('task-details','TaskController@task_details');
   
});
Route::get('mail','TaskController@send_mail');
Route::get('login','UserController@user_login_form');
Route::post('login-check','UserController@user_check');
Route::get('logout','UserController@logout');

Route::get('logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('login');
});