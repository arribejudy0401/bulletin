@extends('layouts.main')
@section('page_title', 'Login')
@section('content')

    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-6 m-auto shadow p-3">

                <h2 class="text-muted fw-bold text-center mb-3">Login</h2>

                <hr>

                <form method="POST">

                    @if(session('success'))
                    <div class="p-2 alert alert-success mb-2 rounded-0">
                        {{session('success')}}
                     </div>
                    @endif

                    @if(session('failure'))
                    <div class="p-2 alert alert-danger mb-2 rounded-0">
                    {{session('failure')}}
                </div>
                 @endif

                    @csrf

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

                    <p class="text-center text-muted mb-2">Don't have an account? <a href="{{ route('user.register') }}" class="fw-bold">Register</a></p>

                    <div class="text-end">
                        <button class="btn btn-dark rounded-0">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
