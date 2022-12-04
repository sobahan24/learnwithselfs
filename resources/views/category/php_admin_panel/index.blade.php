@extends('layouts.master')

@section('title')
    PHP Admin Panel | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_admin_panel.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP Admin Panel Source</h1>
                        </div>

                        <div class="description py-3">
                            <p><span style="font-family: Roboto, sans-serif;">In this series, we are going to learn how to make a simple admin panel in php for basic websites. In this video, </span></p><p><span style="font-family: Roboto, sans-serif;">i have taught how to make a admin panel for a simple Website. so, i have downloaded a admin template from free Bootstrap admin template and i have set up all the things, like, navbar.php, header.php, footer.php, etc..</span><br></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ url('/php-admin-panel/make-admin-panel-in-php') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('category.php_admin_panel.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
