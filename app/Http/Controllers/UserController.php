<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function user_login_form() {
     
        return view('loginView');
    }

    public function user_check() {
        $validator = Validator::make(
                        array(
                    'username' => Input::get('username'),
                    'password' => Input::get('password')
                        ), array(
                    "password" => 'required|min:3',
                    "password" => 'required|min:3'
                        )
        );
       
        if ($validator->fails()) {
            
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            
            if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) {
                // Authentication passed...
              
                return redirect()->intended('/');
            } else {

                return redirect()->intended('login')->with("alert_msg", "Username or Password is invalid! ");;
            }
        }
    }

}
