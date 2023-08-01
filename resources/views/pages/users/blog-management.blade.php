@extends('layouts.master')
@section('page_title', 'My Blogs')
@section('content')

<section class="container py-5">
            
            <div class="row p-2">

                <div class="col-md-10 col-lg-10 m-auto shadow p-3">


                     <div class="d-flex justify-content-between">
                        
                        <h2 class="text-muted">My Blogs</h2>

                            <div>
                                <a href="{{route('blog.create')}}" class="btn btn-dark rounded-0"> <i class="fa-solid fa-plus"></i> Add New</a>
                         </div>
                    </div>

                    <hr>

                    <table class="table">
                            <thead>
                                <tr class="text-center">
                                <th>Blog Title</th>
                                <th>Date Posted</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr class="text-center">
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->created_at->format('m-d-y')}}</td>
                                <td>
                                    <a href="{{route('blog.show', $blog->id)}}" class="btn btn-secondary rounded-0"><i class="fa-solid fa-eye"></i> View</a>

                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary rounded-0"> <i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                    <a class="btn btn-danger rounded-0"><i class="fa-solid fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                    </table>

                    {{$blogs->links()}}
                   </form>
                </div>
            </div>
        </section>

@endsection