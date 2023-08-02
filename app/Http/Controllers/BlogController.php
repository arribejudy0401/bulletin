<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::where('user_id', auth()->user()->id)->latest()->paginate(10);

        return view('pages.users.blog-management', ['blogs' => $blogs]);

    }

    public function create()
    {

        return view('pages.users.create-blog');

    }

    public function store(BlogRequest $request)
    {

        $validated = $request->validated();

        $validated['user_id'] = auth()->user()->id;

        Blog::create($validated);

        return back()->with('success', 'Blog successfully added');

    }

    public function show($id)
    {

        $blog = Blog::where([['id', $id],['user_id', auth()->user()->id]])->firstOrFail();

        return view('pages.users.blog', ['blog'=> $blog]);

    }

    public function edit($id)
    {

        $blog = Blog::where('id', $id)->firstOrFail();

        return view('pages.users.edit-blog', ['blog'=> $blog]);

    }

    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validated();

        $blog->update($validated);

        return back()->with('success', 'Blog edited successfully');

    }

    public function destroy($id)
    {
        
        $blog = Blog::findOrFail($id);

        $blog->destroy($id);

        return back()->with('success', 'Blog deleted successfully');
    }
}
