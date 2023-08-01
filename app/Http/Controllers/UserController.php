<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function login(Request $request){

        if($request->isMethod('GET')) return view('pages.login');

        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if(auth()->attempt([
            'email'=> $validated['email'],
            'password'=> $validated['password']
        ])){
            $request->session()->regenerate();

            return view('pages.users.profile', ['user'=> User::where('id', auth()->user()->id)->firstOrFail()]);
        }

        return back()->with('failure', 'Invalid email or password');
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('user.login')->with('success', 'Successfully logged out');
    }

    public function register(User $user, Request $request){
        if($request->isMethod('GET')) return view('pages.register');
        
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return back()->with('success', 'Congratulations! your account has been successfully created');

    }

    public function view(){
        return view('pages.users.profile', ['user'=> User::where('id', auth()->user()->id)->firstOrFail()]);
    }

    public function edit(){
        return view('pages.users.edit-profile', ['user'=> User::where('id', auth()->user()->id)->firstOrFail()]);
    }

    public function update(Request $request){

        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' .$user->id,
        ]);

        $user->update($validated);
        return back()->with('success', 'Account successfully updated');
    }
}
