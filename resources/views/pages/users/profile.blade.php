@extends('layouts.master')
@section('page_title', 'My Profile')
@section('content')

    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-10 m-auto shadow p-3">

                <div class="text-end">
                    <a href="{{ route('user.edit') }}" class="btn btn-primary rounded-0 mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit Account</a>
                </div>

                <form action="">

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingFirstName" value="Judy Ann" disabled>
                        <label for="floatingFirstName">First Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingLastName" value="Arribe" disabled>
                        <label for="floatingLastName">Last Name</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control rounded-0" id="floatingInput" value="judyannarribe16@gmail.com" disabled>
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control rounded-0" id="floatingDate" value="03/16/22" disabled>
                        <label for="floatingDate">Date Registered</label>
                    </div>

                    <div class="text-end">
                        <a href="blog-management.html" class="btn btn-dark rounded-0">Blog Management <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
