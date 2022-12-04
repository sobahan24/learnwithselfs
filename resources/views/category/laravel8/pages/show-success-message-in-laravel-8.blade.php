@extends('layouts.master')

@section('title')
    Laravel 8 | Success Message | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to show success message in laravel 8</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to display success message in laravel 8 </b></h3><p>In this article, you will be learning how to show / display a success message in laravel 8.</p><p>So guys, basically after form submit or any request performed, we want to&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">show success message.</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Lets see with few example as given below to display success message:<br></span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;</span></p><p><b>Example 1:&nbsp;</b></p><p>this below code is performed on your controller side:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #c586c0;">return</span> <span style="color: #dcdcaa;">redirect</span>()-&gt;<span style="color: #dcdcaa;">back</span>()-&gt;<span style="color: #dcdcaa;">with</span>(<span style="color: #ce9178;">'message'</span>,<span style="color: #ce9178;">"This is Success Message"</span>);</div><p>Displaying message if it exists. (in blade file):<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;"><span>@</span>if</span>(<span style="color: #dcdcaa;">session</span>()-&gt;<span style="color: #dcdcaa;">has</span>(<span style="color: #ce9178;">'message'</span>))</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"alert alert-success"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;"><span>{</span><span>{</span></span> <span style="color: #dcdcaa;">session</span>()-&gt;<span style="color: #dcdcaa;">get</span>(<span style="color: #ce9178;">'message'</span>) <span style="color: #dcdcaa;"><span>}</span><span>}</span></span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #569cd6;"><span>@</span>endif</span></div></div><p><br></p><p><b>Example 2:&nbsp;</b></p><p>this below code is performed on your controller side:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #c586c0;">return</span> <span style="color: #dcdcaa;">redirect</span>()-&gt;<span style="color: #dcdcaa;">back</span>()-&gt;<span style="color: #dcdcaa;">with</span>(<span style="color: #ce9178;">'message'</span>,<span style="color: #ce9178;">"This is Success Message"</span>);</div><p>Displaying message if it exists. (in blade file):<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;"><span>@</span>if</span>(<span style="color: #dcdcaa;">session</span>(<span style="color: #ce9178;">'message'</span>))</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h6</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"alert alert-success"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;"><span>{</span><span>{</span></span> <span style="color: #dcdcaa;">session</span>(<span style="color: #ce9178;">'message'</span>) <span style="color: #dcdcaa;"><span>}</span><span>}</span></span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h6</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #569cd6;"><span>@</span>endif</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/set-custom-messages-in-form-request-validation') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/show-session-flash-message-in-laravel-8') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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

