@extends('layouts.master')

@section('title')
    PHP PDO Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_pdo.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP PDO Tutorial</h1>
                        </div>

                        <div class="description py-3">
                            <p>PHP PDO Tutorial</p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">In this article, you will be learning about php pdo, where pdo stands for php data object.</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">So guys, we are going to learn many topics under php using pdo. like, insert data using pdo, fetch data using pdo, edit &amp; update data using pdo, delete, searching, and many more.</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">So guys, lets begin with php pdo tutorial.</span><br></p>
                        </div><br>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ ('php-pdo/connect-database-using-pdo-in-php') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                </div>

                    @include('category.php_pdo.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
