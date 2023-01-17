@extends("layouts.master")

@section('title')
    Laravel 5.8 | Install Package | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel5.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to install Laravel 5.8 and create a project in laravel 5.8</h1>
                        </div>

                        <div class="description py-3">
                            <h3><b>Installing Laravel</b></h3><p>Laravel uses Composer to manage all its dependencies. Composer Link:&nbsp;<a href="https://getcomposer.org/" target="_blank"><font color="#397b21">https://getcomposer.org/</font></a></p><p>So, before using Laravel, make sure you have already installed Composer on your System/machine.</p><p><b>Via Laravel Installer</b></p><p>First, you have to download the Laravel installer using Composer for to create a project or application direclty in laravel, so run below command to install laravel using Compeser.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ composer&nbsp;global&nbsp;require&nbsp;laravel/installer</div></div><p>Once installed your laravel, the<i><font color="#397b21"> laravel new</font></i> command will create a fresh Laravel installation in the directory you show.&nbsp;<span style="font-size: 1rem;">Now, you can use a basic laravel command to create a laravel project installation in your specific folder.</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ laravel&nbsp;new&nbsp;blog</div></div><p><b>Via Composer Create-Project</b></p><p>Alternatively, you may also install your Laravel by issuing the Composer with the command called create-project command in your terminal,<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ composer&nbsp;create-project&nbsp;--prefer-dist&nbsp;laravel/laravel&nbsp;blog&nbsp;"5.8.*"</div></div><p>Local Development Server where we are checking that if your PHP is installed locally and you would like to use PHP's built-in development server to serve/start your laravel application, you can use the serve Artisan command as given below to run your laravel project.&nbsp;so, the development server will start at: <font color="#0000ff">http://localhost:8000:&nbsp;</font></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ php&nbsp;artisan&nbsp;serve</div></div><p><font color="#0000ff"><br></font></p><p>So, now your laravel application is fully setup and you can use this application to create your new project with it. Happy Coding.</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-5-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-5-8/connect-database-in-larave-5-8') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @include('category.laravel5.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
