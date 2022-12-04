@extends('layouts.master')

@section('title')
    PHP Solutions | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_solutions.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>PHP Solutions</h1>
                    </div>

                    <div class="description py-3">
                            learnwithself.com have tutorials for PHP,  here you can study and learn many things of PHP, like CRUP application using php of Image, Raw data, and many other things.
                            Below you can find all the tutorials with example in PHP.
                            learnwithself.com provides the Quick solution of your problems in php.
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 my-3">
                            <a href="{{ url('/php-solutions/php-crud-using-bootstrap-model-in-php') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                    @include('category.php_solutions.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
