@extends('layouts.master')
@section('page_title', 'My Profile')
@section('content')

    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-10 m-auto shadow p-3">

                <div class="text-end">
                    <a href="{{ route('user.edit') }}" class="btn btn-primary rounded-0 mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit Account</a>
                </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingFirstName" value="{{$user->first_name}}" disabled>
                        <label for="floatingFirstName">First Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingLastName" value="{{$user->last_name}}" disabled>
                        <label for="floatingLastName">Last Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control rounded-0" id="floatingInput" value="{{$user->email}}" disabled>
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingDate" value="{{$user->created_at->format('m-d-y')}}" disabled>
                        <label for="floatingDate">Date Registered</label>
                    </div>

                    <div class="text-end">
                        <a href="{{route('blog.index')}}" class="btn btn-dark rounded-0">Blog Management <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                    
            </div>
        </div>
    </section>

@endsection
