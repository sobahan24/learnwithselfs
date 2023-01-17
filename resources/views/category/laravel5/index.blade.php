@extends("layouts.master")

@section('title')
    Laravel 5.8 Tutorials | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel5.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                            <div class="main-heading">
                                <h1>Laravel 5.8 Solution</h1>
                            </div>
                            <div class="description py-3">
                                <h3><b>Laravel 5.8 Tutorials - Solutions</b></h3><h2><b><br></b></h2><p>In this Laravel 5.8 Version it has more improvement than 5.7 Version and has added one more feature in it <b>Eloquent HasOneThrough Relationship </b>and <b>Token Guard Token Hashing&nbsp;</b></p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 my-3">
                                    <a href="{{ url('/laravel-5-8/install-laravel-package-5-8') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                                </div>
                            </div>
                    </div>
                    @include('category.laravel5.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
