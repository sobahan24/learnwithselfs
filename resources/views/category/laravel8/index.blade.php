@extends('layouts.master')

@section('title')
    Laravel 8 Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Laravel 8 Tutorials</h1>
                        </div>

                        <div class="description py-3">
                            <h4><b>Laravel 8 Tutorial</b></h4><p>Laravel is the most popular and powerful MVC framework which is used to build or develop web applications (Complex Web Application). It is a free and Open source PHP framework. </p><p>So, before you begin what you should already know ?</p><p><b>You should have a basic understanding of the following: </b></p><p><span style="white-space: pre;">      </span> 1. HTML&nbsp; <br><span style="white-space: pre;">      </span>2. PHP</p><p><br></p><p>So, Click next to get started with Laravel 8 tutorials.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ ('/laravel-8/install-laravel-8') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('category.laravel8.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
