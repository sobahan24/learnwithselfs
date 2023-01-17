@extends('layouts.master')

@section('title')
    jQuery | add Text In p Tag | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to add text in p tag using jquery</h1>
                    </div>
                    <div class="description py-3">
                        <h3><b>How to add text in p tag using jquery</b></h3><p>In this tutorial, you will be learning how to add a text in html p tag using jquery.</p><p>We are going to Set Content using jQuery <b>text() method</b> as given below example.&nbsp;</p><p style="margin-bottom: 16px; line-height: 24px; font-family: Poppins, sans-serif;"><span style="font-weight: bolder;">Syntax:</span></p><p class="alert alert-warning" style="line-height: 24px; font-family: Poppins, sans-serif;"><font color="#000000"><font face="Poppins, sans-serif"><span style="font-weight: bolder;">$(</span></font></font><span style="color: rgb(0, 0, 0); font-weight: 700; font-size: 1rem;">selector</span><span style="font-weight: bolder; color: rgb(0, 0, 0); font-size: 1rem;">).text( str )</span></p><p><b>Example:</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>How to add text in p tag using jquery<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">p</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myPara"</span><span style="color: #808080;">&gt;</span> &nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">p</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"button"</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myButton"</span><span style="color: #808080;">&gt;</span>Click to Add<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">ready</span>(<span style="color: #569cd6;">function</span> () {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">'#myButton'</span>).<span style="color: #dcdcaa;">click</span>(<span style="color: #569cd6;">function</span> (<span style="color: #9cdcfe;">e</span>) {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">e</span>.<span style="color: #dcdcaa;">preventDefault</span>();</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">var</span> <span style="color: #9cdcfe;">paragragh</span> = <span style="color: #ce9178;">"Hello, I am funda of web IT. We provide online web tutorials"</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">'#myPara'</span>).<span style="color: #dcdcaa;">text</span>(<span style="color: #9cdcfe;">paragragh</span>);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; });</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/jquery/form-input-box-validation-using-jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/jquery/get-the-value-of-div-content-using-jquery') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
