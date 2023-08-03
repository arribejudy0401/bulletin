@extends('layouts.master')
@section('page_title', 'My Blogs')
@section('content')

    <div class="col-md-10 col-lg-10 m-auto shadow p-3">

        <div class="d-flex justify-content-between">
                        
            <h2 class="text-muted">My Blogs</h2>

            <div>

                <a href="{{route('blog.create')}}" class="btn btn-dark rounded-0"> <i class="fa-solid fa-plus"></i> Add New</a>

            </div>
                    
        </div>

                    
        @if(session('success'))
                    
            <div class="p-2 alert alert-success mb-2 rounded-0">
                        
                {{session('success')}}
                     
            </div>
                    
        @endif

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
                                    
                        <a href="{{route('blog.show', $blog->id)}}" class="btn btn-secondary rounded-0 btn-sm"><i class="fa-solid fa-eye"></i> View</a>

                                    
                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary rounded-0 btn-sm"> <i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                    
                        <button data-bs-toggle="modal" data-bs-target="#delete{{$blog->id}}" class="btn btn-danger rounded-0 btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                
                    </td>
          
                    @include('pages.users.modals.delete-blog')
                            
                </tr>
                                
                @endforeach
                            
            </tbody>
                    
        </table>
        
        {{$blogs->links()}}
                
    </div>

@endsection