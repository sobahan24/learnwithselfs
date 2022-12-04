@extends('layouts.master')

@section('title')
    Laravel 8 | Flash Message | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to show session flash message in laravel 8</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to set session flash message and display in laravel 8</b></h3><p>In this article, you will be learning about how to set or show flash message in laravel 8, where flash message works with the help of session.</p><p>So, Lets see few example about it:</p><p><br></p><p><b>Example 1:&nbsp;</b></p><p>Paste below code in controller:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">use</span> Illuminate\Support\Facades\<span style="color: #4ec9b0;">Session</span>;</div><br><div><span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">flash</span>(<span style="color: #ce9178;">'message'</span>,<span style="color: #ce9178;">'This is a flash message!'</span>);</div></div><p>Paste below code in blade file:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;"><span>@</span>if</span>(<span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">has</span>(<span style="color: #ce9178;">'message'</span>))</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h5</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"alert alert-success"</span><span style="color: #808080;">&gt;</span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span><span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">get</span>(<span style="color: #ce9178;">'message'</span>) <span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h5</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #569cd6;"><span>@</span>endif</span></div></div><p><br></p><p><b>Example 2:</b></p><p>Paste below code in controller:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">use</span> Illuminate\Support\Facades\<span style="color: #4ec9b0;">Session</span>;</div><br><div><span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">flash</span>(<span style="color: #ce9178;">'flash_message'</span>, <span style="color: #ce9178;">'This is a flash message'</span>);</div><div><span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">flash</span>(<span style="color: #ce9178;">'flash_type'</span>, <span style="color: #ce9178;">'alert-success'</span>);</div></div><p>Paste below code in blade file:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;"><span>@</span>if</span>( <span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">has</span>(<span style="color: #ce9178;">'flash_message'</span>) )</div><div>&nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"alert </span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span><span style="color: #ce9178;"> </span><span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">get</span><span style="color: #ce9178;">('flash_type') </span><span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #ce9178;">"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h5</span><span style="color: #808080;">&gt;</span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span> <span style="color: #4ec9b0;">Session</span>::<span style="color: #dcdcaa;">get</span>(<span style="color: #ce9178;">'flash_message'</span>) <span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h5</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #569cd6;"><span>@</span>endif</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/show-success-message-in-laravel-8') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/generate-slug-in-laravel-8') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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

