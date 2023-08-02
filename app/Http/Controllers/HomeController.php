<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;

class HomeController extends Controller
{

    public function index(){

        $blogs = Blog::with('user')->latest()->paginate(10);

        return view('pages.home', ['blogs' => $blogs, 'posts' => Blog::count(), 'users' => User::count() ]);

    }

}
