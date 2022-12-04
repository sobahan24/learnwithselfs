@extends('layouts.master')

@section('title')
    Laravel Tips | Concat Columns | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to concat two columns in laravel using eloquent model</h1>
                    </div>

                    <div class="description py-3">
                        <h4>How to concat two columns in laravel using eloquent model</h4><p>Lets take an example of Customers which has first_name, last_name, email, etc.&nbsp;<br>Now, I want to concatinate "<b>first_name </b>and <b>last_name"</b> together.</p><p><br></p><p>Lets <b>concate </b>columns in laravel <b>eloquent model</b> as follows:&nbsp;<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">class</span> <span style="color: #4ec9b0;">Customer</span> <span style="color: #569cd6;">extends</span> <span style="color: #4ec9b0;">Model</span></div><div><span>{</span></div><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">getFullNameAttribute</span>()</div><div>&nbsp; &nbsp; <span>{</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #ce9178;">"<span>{</span></span><span style="color: #569cd6;"><span>$</span>this</span>-&gt;<span style="color: #9cdcfe;">first_name</span><span style="color: #ce9178;"><span>}</span> <span>{</span></span><span style="color: #569cd6;"><span>$</span>this</span>-&gt;<span style="color: #9cdcfe;">last_name</span><span style="color: #ce9178;"><span>}</span>"</span>;</div><div>&nbsp; &nbsp; <span>}</span></div><div><span>}</span></div></div><p><br></p><p>Lets get the full name of customer:</p><p><b>Example 1:&nbsp;</b><span style="font-weight: bolder; background-color: transparent; text-align: var(--bs-body-text-align);">In the Controller</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;"><span>$</span>customer</span> = <span style="color: #4ec9b0;">Customer</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #b5cea8;">1</span>);</div><div><span style="color: rgb(197, 134, 192); text-align: var(--bs-body-text-align);">return </span><span style="color: #9cdcfe;"><span>$</span>customer</span>-&gt;<span style="color: #9cdcfe;">FullName</span>; </div><div><span style="color: rgb(197, 134, 192); text-align: var(--bs-body-text-align);">return </span><span style="color: #9cdcfe;"><span>$</span>customer</span>-&gt;<span style="color: #9cdcfe;">full_name</span>;</div></div><p><span style="background-color: transparent; text-align: var(--bs-body-text-align);"><b>Example 2: In the Controller</b></span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;"><span>$</span>customers</span> = <span style="color: #4ec9b0;">Customer</span>::<span style="color: #dcdcaa;">all</span>();</div><div><span style="color: #c586c0;">foreach</span> (<span style="color: #9cdcfe;"><span>$</span>customers</span> as <span style="color: #9cdcfe;"><span>$</span>data</span>) <span>{</span></div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #9cdcfe;"><span>$</span>data</span>-&gt;<span style="color: #9cdcfe;">FullName</span>;</div><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #9cdcfe;"><span>$</span>data</span>-&gt;<span style="color: #9cdcfe;">full_name</span>;</div><div><span>}</span></div></div><p><b>Example 3: In blade file</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;"><span>@</span>foreach </span>(<span style="color: #9cdcfe;"><span>$</span>customers</span> as <span style="color: #9cdcfe;"><span>$</span>data</span>)</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h6</span><span style="color: #808080;">&gt;</span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span> <span style="color: #9cdcfe;"><span>$</span>data</span>-&gt;<span style="color: #9cdcfe;">FullName</span> <span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h6</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h6</span><span style="color: #808080;">&gt;</span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span> <span style="color: #9cdcfe;"><span>$</span>data</span>-&gt;<span style="color: #9cdcfe;">full_name</span> <span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h6</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #569cd6;"><span>@</span>endforeach</span></div></div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-tips/get-or-select-specific-columns-in-laravel-eloquent') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.laravel_tips.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
