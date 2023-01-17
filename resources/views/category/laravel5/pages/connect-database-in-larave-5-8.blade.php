@extends("layouts.master")

@section('title')
    Laravel 5.8 | Connect Database | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel5.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to connect database in laravel 5.8</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>Introduction</b></h3><p>All of the configuration files for the Laravel framework are stored in the <b><i>config</i></b> directory. B<span style="font-size: 1rem;">ut, we will directly access Environment Configuration file i.e dot env (</span><b style="font-size: 1rem;">.env</b><span style="font-size: 1rem;">) file.</span></p><p>So in your <b>.env file</b> you will access many things like App_name, App_urls, database configuration,&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">APP_NAME</span>=My_New_project_Name
                            <div style="line-height: 19px;"><span style="color: #9cdcfe;">APP_URL</span>=http://localhost:8000/  <span style="color: rgb(106, 153, 85);">#once&nbsp;hosted&nbsp;change&nbsp;to&nbsp;domain&nbsp;name</span></div><div style="line-height: 19px;"><span style="color: rgb(106, 153, 85);"><br></span></div><div style="line-height: 19px;"><div><span style="color: #9cdcfe;">DB_CONNECTION</span>=mysql</div><div><span style="color: #9cdcfe;">DB_HOST</span>=<span style="color: #b5cea8;">127.0.0.1</span></div><div><span style="color: #9cdcfe;">DB_PORT</span>=<span style="color: #b5cea8;">3306</span></div><div><span style="color: #9cdcfe;">DB_DATABASE</span>=your_database  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;database</span></div><div><span style="color: #9cdcfe;">DB_USERNAME</span>=your_username  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;username</span></div><div><span style="color: #9cdcfe;">DB_PASSWORD</span>=your_password  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;password</span></div></div></div><p><br></p><p>Now , your <b>.env </b>file is setup and ready to start the project but before that make sure you have created a database in server, example in XAMPP, WAMPP or LAMP.</p><p>So, you are Successfully Configured with your database and start to serve your artisan.&nbsp;</p><p class="alert alert-info"><b>Note: </b>If you do any changes in .env file, restart or re-serve your artisan by using below command:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ php&nbsp;artisan&nbsp;serve</div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-5-8/install-laravel-package-5-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-5-8/login-and-register-in-laravel-5-8-using-auth-command') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
