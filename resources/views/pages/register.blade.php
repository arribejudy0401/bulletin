@extends('layouts.main')
@section('page_title', 'Register')
@section('content')

    <div class="col-md-10 col-lg-6 m-auto shadow p-3">

        <h2 class="text-muted fw-bold text-center mb-3">Register</h2>

        <hr>

        <form action="{{ route('user.register') }}" method="POST">

            @csrf

            @if(session('success'))

                <div class="p-2 alert alert-success mb-2 rounded-0">

                    {{session('success')}}

                </div>

            @endif

            <div class="form-floating mb-2">

                <input type="text" class="form-control rounded-0 @error('first_name') is-invalid @enderror" name="first_name" id="floatingFirstName" placeholder="firstname" value="{{old('first_name')}}">

                <label for="floatingFirstName">First Name</label>

                <div class="text-danger">

                    @error('first_name')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <div class="form-floating mb-2">

                <input type="text" class="form-control rounded-0 @error('last_name') is-invalid @enderror" name="last_name" id="floatingLastName" placeholder="lastname" value="{{old('last_name')}}">

                <label for="floatingLastName">Last Name</label>

                <div class="text-danger">

                    @error('last_name')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <div class="form-floating mb-2">

                <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">

                <label for="floatingInput">Email</label>

                <div class="text-danger">

                    @error('email')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <div class="form-floating mb-2">

                <input type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" value="{{old('password')}}">

                <label for="floatingPassword">Password</label>

                <div class="text-danger">

                    @error('password')

                        {{$message}}

                    @enderror

                </div>

            </div>

            <p class="text-center text-muted mb-2">Already have an account? <a href="{{ route('user.index') }}" class="fw-bold">Login</a></p>

            <div class="text-end">

                <button class="btn btn-dark rounded-0">Register</button>

            </div>

        </form>

    </div>

@endsection
