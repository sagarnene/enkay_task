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
    Route::get('simple-drop-down','TaskController@simple_drop_down');
   
   
});
Route::get('mail','TaskController@send_mail');
Route::get('login','UserController@user_login_form');
Route::post('login-check','UserController@user_check');
Route::get('logout','UserController@logout');
Route::get('test',function () {
    
    return view('home');
});
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});