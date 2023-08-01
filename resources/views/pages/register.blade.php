@extends('layouts.main')
@section('page_title', 'Register')
@section('content')

    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-6 m-auto shadow p-3">

                <h2 class="text-muted fw-bold text-center mb-3">Register</h2>

                <hr>

                <form action="register.html">

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingFirstName" placeholder="firstname">
                        <label for="floatingFirstName">First Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingLastName" placeholder="lastname">
                        <label for="floatingLastName">Last Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control rounded-0" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <p class="text-center text-muted mb-2">Already have an account? <a href="{{ route('user.login') }}" class="fw-bold">Login</a></p>

                    <div class="text-end">
                        <button class="btn btn-dark rounded-0">Register</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
