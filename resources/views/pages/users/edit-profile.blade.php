@extends('layouts.master')
@section('page_title', 'Edit Profile')
@section('content')

    <div class="col-md-10 col-lg-10 m-auto shadow p-3">

        <form action="{{route('user.update')}}" method="POST">

            @csrf

            @METHOD("PATCH")

            <div class="text-end">

                <button class="btn btn-primary rounded-0 mb-2"><i class="fa-solid fa-floppy-disk"></i> Save</button>

            </div>

            @if(session('success'))

                <div class="p-2 alert alert-success mb-2 rounded-0">
                        
                    {{session('success')}}
                     
                </div>
                    
            @endif

            <div class="form-floating mb-2">
                             
                <input type="text" class="form-control rounded-0 @error('first_name') is-invalid @enderror" id="floatingFirstName" name="first_name" value="{{$user->first_name}}">
                        
                <label for="floatingFirstName">First Name</label>

                        
                <div class="text-danger">
                            
                    @error('first_name')
                            
                        {{$message}}
                            
                    @enderror
                        
                </div>
  
            </div>
    
            <div class="form-floating mb-2">
                        
                <input type="text" class="form-control rounded-0 @error('last_name') is-invalid @enderror" name="last_name" id="floatingLastName" value="{{$user->last_name}}">
                        
                <label for="floatingLastName">Last Name</label>

                        
                <div class="text-danger">
                            
                    @error('last_name')
                            
                        {{$message}}
                            
                    @enderror
                        
                </div>

                    
            </div>
    
            <div class="form-floating mb-2">
                        
                <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" id="floatingInput" value="{{$user->email}}">
                        
                <label for="floatingInput">Email</label>

                        
                <div class="text-danger">
                            
                    @error('email')
                            
                        {{$message}}
                            
                    @enderror
                        
                </div>

                    
            </div>
                    
            <div class="form-floating mb-2">
                        
                <input type="text" class="form-control rounded-0" id="floatingDate" value="{{$user->created_at->format('m-d-y')}}" disabled>
                        
                <label for="floatingDate">Date Registered</label>
    
            </div>

                    
            <div class="text-end">
                        
                <a href="{{route('blog.index')}}" class="btn btn-dark rounded-0">Blog Management <i class="fa-solid fa-angles-right"></i></a>
                    
            </div>
                
        </form>
            
    </div>

@endsection
