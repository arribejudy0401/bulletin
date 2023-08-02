@extends('layouts.master')
@section('page_title', 'Add Blog')
@section('content')

    <div class="col-md-10 col-lg-10 m-auto shadow p-3">

        <h2 class="text-muted">Add Blog</h2>
                    
        <hr>

        <form action="{{route('blog.store')}}" method="POST">

            @csrf

            @if(session('success'))

                <div class="p-2 alert alert-success mb-2 rounded-0">

                    {{session('success')}}

                </div>

            @endif

            <div class="form-floating mb-2">

                <input type="text" class="form-control rounded-0 @error('title') is-invalid @enderror" name="title" id="floatingTitle" placeholder="Blog Title" value="{{old('title')}}">

                <label for="floatingTitle">Title</label>

                <div class="text-danger">

                    @error('title')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <div class="form-floating mb-2">

                <textarea rows="10" cols="30" class="form-control rounded-0 @error('content') is-invalid @enderror" name="content" id="floatingTextarea" placeholder="Blog Body">{{old('content')}}</textarea>

                <label for="floatingTextarea">Content</label>

                <div class="text-danger">

                    @error('content')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <div class="text-end">

                <button class="btn btn-dark rounded-0 mb-2"><i class="fa-solid fa-floppy-disk"></i> Save</button>

            </div>

        </form>
        
    </div>

@endsection