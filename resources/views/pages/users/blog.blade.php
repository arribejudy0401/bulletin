@extends('layouts.master')
@section('page_title', 'Blog')
@section('content')

    <div class="col-md-10 col-lg-10 m-auto shadow p-3">

        <h2 class="text-muted">{{$blog->title}}</h2>

        <p class="fw-bold text-muted">date: {{$blog->created_at->format('m-d-y')}}</p>
                    
        <hr>

        <p class="m-0">{{$blog->content}}</p>

        <div class="text-end">

            <a href="{{route('blog.index')}}" class="btn btn-dark rounded-0 mb-2"><i class="fa-solid fa-angles-left"></i> Back</a>

        </div>

    </div>

@endsection