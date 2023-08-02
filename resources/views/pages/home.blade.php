@extends('layouts.main')
@section('page_title', 'All Blogs')
@section('content')

    <div class="col-md-10 col-lg-10 m-auto shadow p-3">

        <div class="d-flex align-items-center justify-content-between">

            <h2 class="text-muted">All Blogs</h2>

            <div>

                <h3 class="h6 text-muted m-0">Posts : {{$posts}}</h3>

                <h3 class="h6 text-muted m-0">Users : {{$users}}</h3>

                <h3 class="h6 text-muted m-0">Date Today: {{date('m-d-y')}}</h3>

            </div>

        </div>

        <hr>

        <table class="table">

            <thead>

                <tr class="text-center">

                    <th>Id</th>

                    <th>Blog Title</th>

                    <th>Blog Writer</th>

                    <th>Date Posted</th>

                </tr>

            </thead>

            <tbody>

                @foreach($blogs as $blog)

                    <tr class="text-center">

                        <td>{{$blog->id}}</td>

                        <td>{{$blog->title}}</td>

                        <td>{{$blog->user->first_name}}</td>

                        <td>{{$blog->created_at->format('m-d-y')}}</td>

                    </tr>

                @endforeach

            </tbody>

        </table>

        {{$blogs->links()}}

    </div>

@endsection
