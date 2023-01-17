@extends('layouts.master')

@section('title')
    PHP PDO | Connect Database | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_pdo.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
     

    <div class="main-heading">
        <h1>How to connect database using PDO in PHP</h1>
    </div>

    <div class="description py-3">
        <h3>Connect database using PDO in PHP</h3><p>In this post, you will be learning how to connect database using pdo in php. </p><p><b>Prerequisites: </b></p><p><b><span style="white-space: pre;">    </span> 1. </b>MySql Database Server. </p><p><b><span style="white-space: pre;">    </span> 2. </b> PDO should be enabled, but PDO is enabled by default as of php 5.1. 0&nbsp;<br></p><blockquote class="blockquote">Give the Connection to MySQL Database using PDO as given below:</blockquote><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$servername</span> = <span style="color: #ce9178;">"localhost"</span>;</div><div><span style="color: #9cdcfe;">$username</span> = <span style="color: #ce9178;">"username"</span>;</div><div><span style="color: #9cdcfe;">$password</span> = <span style="color: #ce9178;">"password"</span>;</div><div><span style="color: #9cdcfe;">$database</span> = <span style="color: #ce9178;">"database_name"</span>;</div><br><div><span style="color: #c586c0;">try</span> {</div><br><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">PDO</span>(<span style="color: #ce9178;">"mysql:host=</span><span style="color: #9cdcfe;">$servername</span><span style="color: #ce9178;">;dbname=</span><span style="color: #9cdcfe;">$database</span><span style="color: #ce9178;">"</span>, <span style="color: #9cdcfe;">$username</span>, <span style="color: #9cdcfe;">$password</span>);</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #dcdcaa;">setAttribute</span>(<span style="color: #4ec9b0;">PDO</span>::ATTR_ERRMODE, <span style="color: #4ec9b0;">PDO</span>::ERRMODE_EXCEPTION); <span style="color: #6a9955;">// set the PDO error mode to exception</span></div><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Connected Successfully"</span>;</div><div>&nbsp; &nbsp; </div><div>} <span style="color: #c586c0;">catch</span>(<span style="color: #4ec9b0;">PDOException</span> <span style="color: #9cdcfe;">$e</span>) {</div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Connection Failed"</span> .<span style="color: #9cdcfe;">$e</span>-&gt;<span style="color: #dcdcaa;">getMessage</span>();</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ ('/php-pdo') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ ('/php-pdo/insert-data-into-database-using-pdo-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div> 
</div>

                    @include('category.php_pdo.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
