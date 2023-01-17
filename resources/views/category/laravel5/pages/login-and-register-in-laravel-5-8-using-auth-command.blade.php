@extends("layouts.master")

@section('title')
    Laravel 5.8 | Login & Register | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel5.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to make Login and Register System using Auth Command in Laravel 5.8</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>Laravel Auth Command | Login and Register using Auth Command</b></h3><p>In this post, you will learn how to make login and registration system in laravel&nbsp; 5.8 version with the auth command called <b>php artisan make:auth</b>&nbsp;as follows:</p><p><b>Step 1: </b>Install your Laravel by issuing the Composer with the command called create-project command in your terminal:</p><div class="alert funda-bg" style="width: fit-content; min-width: 100%; background-color: rgb(30, 30, 30); color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ composer&nbsp;create-project&nbsp;--prefer-dist&nbsp;laravel/laravel&nbsp;blog&nbsp;"5.8.*"</div></div><p><b>Step 2:</b>&nbsp;Setup your database (<b>DB</b>) and set the credentials in your environment file <b>(.env) </b>in your installed laravel application.</p><div class="alert funda-bg" style="width: fit-content; min-width: 100%; background-color: rgb(30, 30, 30); color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style="line-height: 19px;"><div><span style="color: rgb(156, 220, 254);">DB_CONNECTION</span>=mysql<br></div><div><span style="color: rgb(156, 220, 254);">DB_HOST</span>=<span style="color: rgb(181, 206, 168);">127.0.0.1</span></div><div><span style="color: rgb(156, 220, 254);">DB_PORT</span>=<span style="color: rgb(181, 206, 168);">3306</span></div><div><span style="color: rgb(156, 220, 254);">DB_DATABASE</span>=your_database  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;database</span></div><div><span style="color: rgb(156, 220, 254);">DB_USERNAME</span>=your_username  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;username</span></div><div><span style="color: rgb(156, 220, 254);">DB_PASSWORD</span>=your_password  <span style="color: rgb(106, 153, 85);">#do&nbsp;not&nbsp;use&nbsp;this&nbsp;symbol&nbsp;Hash&nbsp;(#)&nbsp;in&nbsp;password</span></div></div></div><p style="font-size: 17px; line-height: 2;"><b>Step 3:</b>&nbsp;Go to your application and open the folder by following: App / Providers / <b>AppServiceProvider.php</b>, open this file and add the below code, to set the <b>defaultStringLength</b> to skip the Error called:&nbsp;<b>Specified key was too long error.</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">use</span>&nbsp;Illuminate\Support\Facades\<span style="color: rgb(78, 201, 176);">Schema</span>;<br></div><div><br></div><div><span style="color: #569cd6;">public</span>&nbsp;<span style="color: #569cd6;">function</span>&nbsp;<span style="color: #dcdcaa;">boot</span>()</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #4ec9b0;">Schema</span>::<span style="color: #dcdcaa;">defaultStringLength</span>(<span style="color: #b5cea8;">191</span>);</div><div>}</div></div><p style="font-size: 17px; line-height: 2;"><b>Step 4:</b>&nbsp;Now, lets set the login and registration system using laravel <i>auth </i>command by below code:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ php&nbsp;artisan&nbsp;make:auth</div></div><p style="font-size: 17px; line-height: 2;"><b>Step 5:</b>&nbsp;After successfull installation of laravel auth command, then we need to migrate the laravel default table's (Which Already Exists in database folder). So, now lets migrate the tables by following below command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ php&nbsp;artisan&nbsp;migrate</div></div><p style="font-size: 17px; line-height: 2;"><b>Step 6:</b> Now, everything is perfect, so lets run the artisan serve command to get registered and login to it.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ php&nbsp;artisan&nbsp;serve</div></div><p style="font-size: 17px; line-height: 2;"><br></p><p style="font-size: 17px; line-height: 2;"><b>The Url to Login:</b>&nbsp;<font color="#0000ff">http://localhost:8000/login</font></p><p style="font-size: 17px; line-height: 2;"><span style="font-weight: bolder;">The Url to Register:</span>&nbsp;<font color="#0000ff">http://localhost:8000/register</font></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-5-8/connect-database-in-larave-5-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-5-8/user-and-admin-login-system-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
