@extends('layouts.master')

@section('title')
    PHP OOP Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_oop.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP OOP Tutorials</h1>
                        </div>
                        <div class="description pt-3">
                            <h3><b>PHP OOP Tutorial</b></h3>
                            <p>OOP stands for Object Oriented Programming.</p>
                            <p>In this OOP tutorials, you will be learning all about how to work with php classes and
                                objects. </p>
                            <p>We are going to learn OOP practically by making projects in php.</p>
                            <p><br></p>
                            <p><br></p>
                            <p><br></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mb-3">
                                <a href="{{ url('php-oop/connect-to-database-in-php-using-oop') }}"
                                    class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i
                                        class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>


                    @include('category.php_oop.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
