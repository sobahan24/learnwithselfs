@extends('layouts.master')

@section('title')
    Laravel 8 | Get Data By ID | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to get data from database by id in laravel 8</h1>
                        </div>

                        <div class="description py-3">
                            <h3><b>How to get data from database by id in laravel 8</b></h3><p>In this tutorial, how to get data from database by id in laravel 8, where we will find the single row record from database using laravel eloquent model with find() method. Example given below:</p><p><b>Example 1:&nbsp;</b><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style="line-height: 19px;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #9cdcfe;">$id</span>);</div></div><p><b>Example 2:</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>,<span style="color: #9cdcfe;">$id</span>)-&gt;<span style="color: #dcdcaa;">first</span>();</div><p><br></p><p><b>Demo:</b></p><p><b>Step 1:</b>&nbsp;Goto Controller and create a edit() function and call Eloquent model ( <b>YourModel.php</b>&nbsp;) to get data by id from database in laravel.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">edit</span>(<span style="color: #9cdcfe;">$id</span>)</div><div>{</div><div>  &nbsp; <span style="color: #9cdcfe;">$student</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #9cdcfe;">$id</span>);</div><div>&nbsp;&nbsp;  <span style="color: #c586c0;">return</span> <span style="color: #9cdcfe;">$student</span>;</div><div>}</div></div><p><b>Step 2: </b>create a path in <b>routes/web.php </b>file as follows:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">Route</span>::<span style="color: #dcdcaa;">get</span>(<span style="color: #ce9178;">'get-data/{your_id}'</span>, [<span style="color: #4ec9b0;">HomeController</span>::<span style="color: #569cd6;">class</span>, <span style="color: #ce9178;">'edit'</span>]);</div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/login-registration-system-tutorial') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/upload-image-in-laravel-8') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
