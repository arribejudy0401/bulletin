<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.users.blog-management', ['blogs' => Blog::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;

        Blog::create($validated);

        return back()->with('success', 'Blog successfully added');
    }

    public function show($id){
        return view('pages.users.blog', ['blog'=> Blog::where('id', $id)->firstOrFail()]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.users.edit-blog', ['blog'=> Blog::where('id', $id)->firstOrFail()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog->update($validated);

        return back()->with('success', 'Blog edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
