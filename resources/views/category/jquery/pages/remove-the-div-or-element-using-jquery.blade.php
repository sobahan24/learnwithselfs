@extends('layouts.master')

@section('title')
    jQuery | add / Remove Div Element | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to remove the div or element using jquery</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>Remove div tag or html element using jquery</b></h3><p>In this tutorail, you will be learning how to remove the div tag or html element using jQuery.</p><p>We will be using jQuery <b>remove() method</b> to remove that exact&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">html&nbsp;</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">element using&nbsp;</span>jQuery&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">as given below example:</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><b>Example:</b></span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>How to remove the div or element using jquery<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myDivSection"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span>Hello Guys, You are going to remove this div<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">p</span><span style="color: #808080;">&gt;</span>This is a paragraph<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">p</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"button"</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"myButton"</span><span style="color: #808080;">&gt;</span>Click to remove<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp;</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #9cdcfe;">document</span>).<span style="color: #dcdcaa;">ready</span>(<span style="color: #569cd6;">function</span> () {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">"#myButton"</span>).<span style="color: #dcdcaa;">click</span>(<span style="color: #569cd6;">function</span>() { &nbsp;</div><div><br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">$</span>(<span style="color: #ce9178;">"#myDivSection"</span>).<span style="color: #dcdcaa;">remove</span>(); &nbsp;</div><div><br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; });</div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/jquery/add-remove-input-fields-dynamically-using-jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/jquery/get-the-closest-table-row-data-using-jquery') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
