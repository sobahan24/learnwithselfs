@extends('layouts.master')

@section('title')
    jQuery | Disable Right Click | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to disable right click using jQuery ?</h1>
                        </div>
                        <div class="description py-3">
                            <h4><b>How to disable right click on web page using jQuery ?</b></h4><p>In this tutorial, you will see how to disable right click button on browser using jquery.&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Disable Right Click on Website Using JQuery.</span></p><p>.bind() method and contextmenu event are used for this purpose.<br></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;segoe ui&quot;; font-size: medium;">we have used .bind() method for attaching contextmenu event handler with document. The contextmenu event fires when the user right clicks on element.</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>How to disable right click using jQuery<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">ready</span>(<span style="color: #569cd6;">function</span> () {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">bind</span>(<span style="color: #ce9178;">"contextmenu"</span>,<span style="color: #569cd6;">function</span>(<span style="color: #9cdcfe;">event</span>){</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">alert</span>(<span style="color: #ce9178;">'Right Click is Disabled'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #569cd6;">false</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; });</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p><b><br></b></p><p><b>Thanks for reading.</b></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/jquery/disable-submit-button-until-form-is-filled-in-jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
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
