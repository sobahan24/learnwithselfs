@extends('layouts.master')

@section('title')
    Laravel 8 | Model & Migration | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to make Model and Migration in Laravel 8</h1>
                    </div>
                    <div class="description py-3">
                        <h4><b>How to make Model and Migration in Laravel 8</b></h4><p>In this tutorial, you will learn how to make model and migration in laravel 8.</p><p>Before starting to create model and migration in laravel you need to create a <a href="{{ url('/laravel-8/install-laravel-8') }}" target="_blank"><font color="#0000ff">new laravel project</font></a></p><h5><b>Method 1:</b></h5><p>Let's create a <b>Model </b>in Laravel by following command:&nbsp;</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: rgb(212, 212, 212);">$&nbsp;php&nbsp;artisan&nbsp;make:model&nbsp;</span><font color="#ffff00">Student</font></div><p>In this above artisan command the Model name is Student, which is <span style="font-size: 1rem;">highlighted with yellow color.</span></p><p><br></p><p>Let's create a <b>Migration </b>(mysql table)<b>&nbsp;</b>in Laravel by following command:<b> (table name will should always be plural in laravel)</b></p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: rgb(212, 212, 212);">$&nbsp;php&nbsp;artisan&nbsp;make:migration&nbsp;create_</span><font color="#ffff00">students</font><font color="#d4d4d4">_table</font></div><p>In this above command the table name is students which is highlighted with yellow color.</p><p><span style="font-size: 1rem;">After creating the Migration successfully in Laravel, add some columns to the table, and then migrate this tables in to your database by the following command:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;php&nbsp;artisan&nbsp;migrate</div><p><br></p><h5><b>Method 2:</b></h5><p>Let's create a&nbsp;<span style="font-weight: bolder;">Model and Migration&nbsp;</span>both in Laravel by following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;php&nbsp;artisan&nbsp;make:model&nbsp;Student -m</div><p>In this above we are creating two things one is Model and another one is Migration with the name as Student. s<span style="font-size: 1rem;">o, </span></p><p><span style="font-size: 1rem;"><b>First</b>, Model will be created in the path:<i> app/Models/Student.php</i></span></p><p><b>Second</b>, Migration will be created in the path: <i>database/migration/2021_02_16_create_students_table.php&nbsp;</i></p><p><span style="font-size: 1rem;"><br></span></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-8/install-laravel-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-8/create-a-controller-and-resource-controller-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
