@extends('layouts.master')

@section('title')
    Laravel 8 | Generate Slug | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to create or generate slug in laravel 8</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to create slug in laravel 8 using slug function</b></h3><p>In this post, you will be learning about how to generate a valid slug in laravel 8 using str_slug function.</p><p>So guys, lets see few example, that how we can make slug or generate slug in laravel.</p><p><br></p><p><b>Example 1:</b> In your controller</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">use</span> Illuminate\Support\<span style="color: #4ec9b0;">Str</span>;</div><br><div><span style="color: #9cdcfe;">$slug</span> = <span style="color: #4ec9b0;">Str</span>::<span style="color: #dcdcaa;">slug</span>(<span style="color: #9cdcfe;">$request</span>-&gt;<span style="color: rgb(156, 220, 254);">slug</span>);<br></div><div><span style="color: #c586c0;">return</span> <span style="color: #9cdcfe;">$slug</span>;</div></div><p><br></p><p><b>Example 2:</b> Generate Slug using str_slug() function.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;">$slug</span> = <span style="color: #dcdcaa;">str_slug</span>(<span style="color: #9cdcfe;">$request</span>-&gt;<span style="color: #9cdcfe;">slug</span>);</div><div><span style="color: #c586c0;">return</span> <span style="color: #9cdcfe;">$slug</span>;</div></div><p><br></p><p><b>Exmaple 3:</b> How to create a slug customly / manually in php</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;">$string</span> = <span style="color: #dcdcaa;">preg_replace</span>(<span style="color: #d16969;">'/[^A-Za-z0-9\-]/'</span>, <span style="color: #ce9178;">'-'</span>, <span style="color: #9cdcfe;">$request</span>-&gt;<span style="color: #9cdcfe;">slug</span>); <span style="color: #6a9955;">//Removed all Special Character and replace with hyphen</span></div><div><span style="color: #9cdcfe;">$final_slug</span> = <span style="color: #dcdcaa;">preg_replace</span>(<span style="color: #d16969;">'/-</span>+<span style="color: #d16969;">/'</span>, <span style="color: #ce9178;">'-'</span>, <span style="color: #9cdcfe;">$string</span>); <span style="color: #6a9955;">//Removed double hyphen</span></div><div><span style="color: #9cdcfe;">$slug</span> = <span style="color: #dcdcaa;">strtolower</span>(<span style="color: #9cdcfe;">$final_slug</span>);</div><div><span style="color: #c586c0;">return</span> <span style="color: #9cdcfe;">$slug</span>;</div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/show-session-flash-message-in-laravel-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/get-find-data-by-multiple-ids-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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

