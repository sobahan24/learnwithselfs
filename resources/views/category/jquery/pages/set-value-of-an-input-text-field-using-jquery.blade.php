@extends('layouts.master')

@section('title')
    jQuery | Set Value of Input Field | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to set value of input field in jQuery</h1>
                    </div>
                    <div class="description py-3">
                        <h3><b>How to set the value of input text field using jQuery</b></h3><p><br></p><p>In this tutorial, you will be learning how to set your given value in an input textbox using jquery.</p><p>So, We will be using jquery <b>val() method</b> to set the value inside the input box as given below.</p><p>Syntax:</p><p class="alert alert-warning"><font color="#000000"><b>$(selector).val(value)</b></font><br></p><p>Example:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>jQuery Tutorials<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>My Name is:<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myInputBox"</span> <span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">ready</span>(<span style="color: #569cd6;">function</span> () {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">var</span> <span style="color: #9cdcfe;">input_value</span> = <span style="color: #ce9178;">"Funda of Web IT"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">'#</span><span style="color: rgb(206, 145, 120);">myInputBox</span><span style="color: #ce9178;">'</span>).<span style="color: #dcdcaa;">val</span>(<span style="color: #9cdcfe;">input_value</span>);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; });</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/jquery/get-value-from-input-box-using-jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/jquery/form-input-box-validation-using-jquery') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
