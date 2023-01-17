@extends('layouts.master')

@section('title')
    PHP Programs | Compare Strings | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Write a PHP program that will compare two strings whether they are same or not.</h1>
                        </div>

                        <div class="description py-3">
                            <h3>PHP Program to compare two strings whether they are same or not in php</h3><p>In this tutorial, you will learn how to compare two strings whether they are same or not in PHP. |&nbsp;How to Compare Two Strings in PHP</p><p>Below is the php script to compare two strings whether they are same or not in php.<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP Program to compare two strings<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span>PHP Script to compare two strings<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">" "</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"post"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"string1"</span><span style="color: #808080;">/&gt;</span> <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">br</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"string2"</span> <span style="color: #808080;">/&gt;&lt;</span><span style="color: #569cd6;">br</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #808080;">/&gt;&lt;</span><span style="color: #569cd6;">br</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$_POST</span>)</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$str1</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'string1'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$str2</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'string2'</span>];</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"first String is: </span><span style="color: #9cdcfe;">$str1</span><span style="color: #ce9178;"> &lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Second String is: </span><span style="color: #9cdcfe;">$str2</span><span style="color: #ce9178;"> &lt;br&gt;"</span>; &nbsp;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$str1</span>==<span style="color: #9cdcfe;">$str2</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Strings are EQUAL"</span>; &nbsp;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">else</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Strings are NOT EQUAL"</span>; &nbsp;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div>&nbsp; &nbsp; </div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/print-fibonacci-numbers') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php-programs/convert-string-into-lowercase-and-uppercase-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
