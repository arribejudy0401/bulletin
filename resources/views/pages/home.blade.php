@extends('layouts.main')
@section('page_title', 'All Blogs')
@section('content')
    <section class="container py-5">

        <div class="row p-2">

            <div class="col-md-10 col-lg-10 m-auto shadow p-3">

                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-muted">All Blogs</h2>

                    <div>
                        <h3 class="h6 text-muted m-0">Post : 5</h3>
                        <h3 class="h6 text-muted m-0">Users : 10</h3>
                        <h3 class="h6 text-muted m-0">Date Today: 31-7-23</h3>
                    </div>
                </div>

                <hr>

                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Blog Title</th>
                            <th>Blog Writer</th>
                            <th>Date Posted</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Sample 1</td>
                            <td>Abcd</td>
                            <td>06-05-2013</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
