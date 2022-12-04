@extends('layouts.master')

@section('title')
    PHP Programs | Fibonacci Number | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Write a PHP program to print first 10 Fibonacci numbers</h1>
                        </div>

                        <div class="description py-3">
                            <h3>PHP program to print first 10 Fibonacci numbers.</h3><p>In this tutorial, you will learn how to print the Fibonacci series in php.&nbsp;PHP Fibonacci Series Program</p><p>Below is the php script&nbsp;<span style="font-size: 1rem;">to print the Fibonacci series in php.</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP program to print first 10 Fibonacci numbers<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span> &nbsp; &nbsp;</div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span>FIBONACCI SERIES<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$count</span>=<span style="color: #b5cea8;">0</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$f1</span>=<span style="color: #b5cea8;">0</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$f2</span>=<span style="color: #b5cea8;">1</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"</span><span style="color: #9cdcfe;">$f1</span><span style="color: #ce9178;">&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"</span><span style="color: #9cdcfe;">$f2</span><span style="color: #ce9178;">&lt;br&gt;"</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">while</span>(<span style="color: #9cdcfe;">$count</span> &lt; <span style="color: #b5cea8;">8</span> )</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$f3</span>=<span style="color: #9cdcfe;">$f1</span>+<span style="color: #9cdcfe;">$f2</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"</span><span style="color: #9cdcfe;">$f3</span><span style="color: #ce9178;">&lt;br&gt;"</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$f1</span>=<span style="color: #9cdcfe;">$f2</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$f2</span>=<span style="color: #9cdcfe;">$f3</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$count</span>=<span style="color: #9cdcfe;">$count</span>+<span style="color: #b5cea8;">1</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/make-sum-of-n-numbers') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/compare-two-strings') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
