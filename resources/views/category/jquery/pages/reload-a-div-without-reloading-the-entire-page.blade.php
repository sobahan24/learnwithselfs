@extends('layouts.master')

@section('title')
    jQuery | Reload Div Without Reloading Entire Page | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to reload a div without reloading the entire page?</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to reload or refresh a div without reloading the entire page using jquery</b></h3><p>In this tutorial, you will be learning how can we refresh a DIV without reloading the whole page.</p><p>Now, Let's refresh a div content using jquery without any page reload on a <b>Button Click</b>. <b>jQuery.load() </b>method is probably the easiest way to load data asynchronously using a selector, but you can also use any of the jquery ajax methods (get, post, getJSON, ajax, etc.) </p><p>Note that load allows you to use a selector to specify what piece of the loaded script you want to load, as in given below:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">"#myDiv"</span>).<span style="color: #dcdcaa;">load</span>(<span style="color: #9cdcfe;">location</span>.<span style="color: #9cdcfe;">href</span> + <span style="color: #ce9178;">" #myDiv"</span>);</div><p><br></p><p><b>Example 1:</b>&nbsp; Let's create a <b>index.php</b> and print the <b>TIME</b>&nbsp;using <b>date()</b> function in a <b>"&lt;div&gt;"</b> tag and reload this div without page reload or refresh, using jquery.<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;We will be using jQuery&nbsp;<b>setInterval() method</b> to call that <b>load()</b><b>&nbsp;</b></span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">method&nbsp;</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">to refresh div content every 1 second as given below:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>Reload Div Content without reloading the page using jQuery<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span>Time: <span style="color: rgb(86, 156, 214);">&lt;?=</span> <span style="color: rgb(220, 220, 170);">date</span>(<span style="color: rgb(206, 145, 120);">'H:i:s'</span>) <span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span><span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">h3</span><span style="color: rgb(128, 128, 128);">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myDiv"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Live Time: <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span><span style="color: #569cd6;">&lt;?=</span> <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">'H:i:s'</span>) <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">ready</span>(<span style="color: #569cd6;">function</span> () {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">setInterval</span>( <span style="color: #569cd6;">function</span>() {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">"#myDiv"</span>).<span style="color: #dcdcaa;">load</span>(<span style="color: #9cdcfe;">location</span>.<span style="color: #9cdcfe;">href</span> + <span style="color: #ce9178;">" #myDiv"</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}, <span style="color: #b5cea8;">1000</span> );</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; });</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/jquery/refresh-reload-a-page-automatically-in-jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/jquery/disable-or-enable-form-submit-button-in-jquery') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.jquery.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection