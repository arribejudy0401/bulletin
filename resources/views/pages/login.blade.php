@extends('layouts.main')
@section('page_title', 'Login')
@section('content')

    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-6 m-auto shadow p-3">

                <h2 class="text-muted fw-bold text-center mb-3">Login</h2>

                <hr>

                <form method="POST">

                    @csrf

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control rounded-0" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>

                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
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
