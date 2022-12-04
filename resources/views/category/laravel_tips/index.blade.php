@extends('layouts.master')

@section('title')
    Laravel Tips | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Laravel Tips</h1>
                    </div>
                    <div class="description py-3">
                        <h3>Laravel Tips and Tricks,</h3><p><br></p><p>Laravel Code Tips</p><p><br></p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 my-3">
                            <a href="{{ url('/laravel-tips/get-data-from-database-by-id') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                    @include('category.laravel_tips.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
