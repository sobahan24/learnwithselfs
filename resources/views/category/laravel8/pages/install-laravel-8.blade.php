@extends('layouts.master')

@section('title')
    Laravel 8 | Install | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to install laravel 8</h1>
                    </div>
 
                    <div class="description py-3">
                        <h4><b>How to install laravel 8</b></h4><p>In this tutorial, you will be learning how to install laravel so, to install laravel we require a composer.</p><p>Composer is a PHP Dependency manager. so, first download and install your composer from the link&nbsp;<u><font color="#0000ff"><a href="https://getcomposer.org/" target="_blank">https://getcomposer.org/</a></font></u>&nbsp;&nbsp;</p><p>If you have already installed composer, check with the given below command in the <b>terminal</b>:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;composer&nbsp;-V</div><p><b>Method 1: </b>Lets, install the Laravel Installer as a global Composer dependency&nbsp;on our system, so open your <b>terminal </b>and execute the following command:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;composer&nbsp;global&nbsp;require&nbsp;laravel/installer</div><p>This above command will take few minutes to exexute, so after successful installation above command, lets create a Laravel Application.&nbsp;</p><p>This command will create a project of the <b>Latest Version of Laravel application</b> by following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;laravel&nbsp;new&nbsp;fundaBlog</div><p><b>Method 2:</b>&nbsp;Let's install Laravel 8 Via <b>Composer </b>with specific version as following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;composer&nbsp;create-project&nbsp;--prefer-dist&nbsp;laravel/laravel&nbsp;fundaBlog&nbsp;"8.0.*"</div><p>After successful execution of above command, laravel project creation, open terminal and go to the laravel project path and give a command to run the application as follows:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$&nbsp;php&nbsp;artisan&nbsp;serve</div><p><br></p><p>Output on your browser at: http://localhost:8000</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-8/make-model-and-migration-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
