@extends('layouts.master')

@section('title')
    Laravel 8 | Find Multi Data by ID | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to get/find data by multiple ids in laravel</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to find data by multiple ids in laravel</b></h3><p>In this post, we are learning about how to get or retrieve data by multiple ids in laravel.</p><p>So, lets see with different examples.</p><p><br></p><p><b>Example 1: </b>Get data using <b>findMany()</b> method in laravel.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">Model</span>::<span style="color: #dcdcaa;">findMany</span>([<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>]);</div><p><br></p><p><b>Example 2:</b>&nbsp;You can also pass an array to <b>find()</b> and it will internally call <b>findMany()</b>:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">Model</span>::<span style="color: #dcdcaa;">find</span>([<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>]);</div><p><br></p><p><b>Example 3: </b>we can use the&nbsp;<b>whereIn()</b> method to find mulitple data by specifying the column name:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">Model</span>::<span style="color: #dcdcaa;">whereIn</span>(<span style="color: #ce9178;">'id'</span>, [<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>])-&gt;<span style="color: #dcdcaa;">get</span>();</div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/generate-slug-in-laravel-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/login-with-email-or-phone-number-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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

