<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;


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

    public function show(Blog $blog)
    {

        $post = Blog::where([['id', $blog->id],['user_id', auth()->user()->id]])->firstOrFail();

        return view('pages.users.blog', ['blog'=> $post]);

    }

    public function edit(Blog $blog)
    {

        $post = Blog::where('id', $blog->id)->firstOrFail();

        return view('pages.users.edit-blog', ['blog'=> $post]);

    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $post = Blog::findOrFail($blog->id);

        $validated = $request->validated();

        $post->update($validated);

        return back()->with('success', 'Blog edited successfully');

    }

    public function destroy(Blog $blog)
    {
        
        $post = Blog::findOrFail($blog->id);

        $post->destroy($blog->id);

        return back()->with('success', 'Blog deleted successfully');
    }
}
