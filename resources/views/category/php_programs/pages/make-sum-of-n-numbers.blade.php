@extends('layouts.master')

@section('title')
    PHP Programs | Sum N Number | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Write a PHP program to make the sum of first 100 odd numbers</h1>
                        </div>

                        <div class="description py-3">
                            <h3>Write a PHP program to make the sum of first 100 odd numbers.</h3><p>In this tutorial, you will be learning&nbsp;how to find sum of first 100 odd numbers in php also call it as find the sum of odd numbers within a given range.</p><p>Below is the php script to find&nbsp;<span style="font-size: 1rem;">the sum of first 100 odd numbers.</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$sum</span>=<span style="color: #b5cea8;">0</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #c586c0;">for</span>(<span style="color: #9cdcfe;">$i</span>=<span style="color: #b5cea8;">1</span>;<span style="color: #9cdcfe;">$i</span>&lt;=<span style="color: #b5cea8;">200</span>;<span style="color: #9cdcfe;">$i</span>+=<span style="color: #b5cea8;">2</span>)</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sum</span>+=<span style="color: #9cdcfe;">$i</span>;</div><div>&nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"the total sum of 100 odd numbers: </span><span style="color: #9cdcfe;">$sum</span><span style="color: #ce9178;">"</span>;</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/find-odd-or-even-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/print-fibonacci-numbers') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
