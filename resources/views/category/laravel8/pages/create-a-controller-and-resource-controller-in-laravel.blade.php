@extends('layouts.master')

@section('title')
    Laravel 8 | Controller | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
     
                    <div class="main-heading">
                        <h1>How to create a Controller and Resource Controller in Laravel 8</h1>
                    </div>

                    <div class="description py-3">
                        <h4><span style="font-size: 1rem;">In this tutorials, you will be learning that how to create a controller in Laravel 8.</span></h4><p>Before starting to create model and migration in laravel you need to create a <a href="{{ url('/laravel-8/install-laravel-8') }}" target="_blank">new laravel project</a><br></p><p><br></p><p><b>Controller:</b> Let's begin with creating a <b>Controller</b> named StudentController by the following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;php&nbsp;artisan&nbsp;make:controller&nbsp;StudentController</div><p>After successful creation of this above command, you will find this controller in the following path as: app/Http/Controller/StudentController&nbsp;&nbsp;</p><p><br></p><p><b>Resource Controller:</b>&nbsp;</p><p>This resource controller means, it will automatically create all the functions inside your controller of basic required things, which is total 7 functions created in this resource controller.</p><p>Lets create a resource controller by the following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;php&nbsp;artisan&nbsp;make:controller&nbsp;StudentController&nbsp;--resource</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-8/make-model-and-migration-in-laravel') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-8/insert-data-in-laravel-8') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    @include('category.laravel8.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
