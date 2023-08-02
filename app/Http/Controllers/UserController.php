<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('pages.login');

    }

    public function login(LoginRequest $request){

        $validated = $request->validated();

        if(auth()->attempt([

            'email'=> $validated['email'],

            'password'=> $validated['password']

        ])){

            $request->session()->regenerate();

            $user =  User::where('id', auth()->user()->id)->firstOrFail();

            return view('pages.users.profile', ['user'=> $user]);

        }

        return back()->with('failure', 'Invalid email or password');

    }

    public function logout(){

        auth()->logout();

        return redirect()->route('user.index')->with('success', 'Successfully logged out');

    }

    public function registrationForm(){

        return view('pages.register');

    }

    public function register(RegisterRequest $request){
        
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return back()->with('success', 'Congratulations! your account has been successfully created');

    }

    public function view(){

        $user = User::where('id', auth()->user()->id)->firstOrFail();

        return view('pages.users.profile', ['user'=> $user]);

    }

    public function edit(){

        $user = User::where('id', auth()->user()->id)->firstOrFail();

        return view('pages.users.edit-profile', ['user'=> $user]);

    }

    public function update(ProfileRequest $request){

        $userId = auth()->user()->id;

        $user = User::findOrFail($userId);

        $validated = $request->validated();

        $user->update($validated);

        return back()->with('success', 'Account successfully updated');

    }
    
}
