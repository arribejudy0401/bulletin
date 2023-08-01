<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request){

        if($request->isMethod('GET')) return view('pages.login');

        return view('pages.users.profile');
    }

    public function register(Request $request){
        if($request->isMethod('GET')) return view('pages.register');   
    }

    public function view(){
        return view('pages.users.profile');
    }

    public function edit(){
        return view('pages.users.edit-profile');
    }
}
