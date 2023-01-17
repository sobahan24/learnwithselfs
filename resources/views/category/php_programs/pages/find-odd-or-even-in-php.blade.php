@extends('layouts.master')

@section('title')
    PHP Programs | Odd Even Number | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP program to check if a given number is ODD or EVEN</h1>
                        </div>
                        <div class="description py-3">
                            <h3>PHP Program to check number is odd or even</h3><p>In this tutorial, you will learn&nbsp;how to check Odd or Even Number in PHP.</p><p>Below is the php script to find the given number is odd or even.</p><div class="funda-bg alert" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">html</span><span style="color: rgb(128, 128, 128);">&gt;</span><br></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">title</span><span style="color: rgb(128, 128, 128);">&gt;</span>ODD&nbsp;or&nbsp;EVEN<span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">title</span><span style="color: rgb(128, 128, 128);">&gt;</span><br></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;"><br></span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span>PHP&nbsp;script&nbsp;to&nbsp;find&nbsp;given&nbsp;number&nbsp;is&nbsp;ODD&nbsp;or&nbsp;EVEN&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;"><br></span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span>&nbsp;<span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">""</span>&nbsp;<span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"post"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"num"</span>&nbsp;<span style="color: #808080;">/&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span>&nbsp;<span style="color: #808080;">/&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;"><br></span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$_POST</span>)</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$num</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'num'</span>];</div><div><br></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">if</span>(!<span style="color: #dcdcaa;">is_numeric</span>(<span style="color: #9cdcfe;">$num</span>))</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"String&nbsp;not&nbsp;allowed.</span></div><div><span style="color: #ce9178;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input&nbsp;should&nbsp;number"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">return</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$num</span>&nbsp;%&nbsp;<span style="color: #b5cea8;">2</span>==<span style="color: #b5cea8;">0</span>)</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"Number&nbsp;is&nbsp;an&nbsp;even&nbsp;number"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">else</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"Number&nbsp;is&nbsp;an&nbsp;odd&nbsp;number&nbsp;"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/find-leap-year-or-not-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/make-sum-of-n-numbers') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.php_programs.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
