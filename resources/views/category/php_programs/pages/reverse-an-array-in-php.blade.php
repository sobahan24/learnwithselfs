@extends('layouts.master')

@section('title')
    PHP Programs | Reverse Array | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP program to reverse an array</h1>
                        </div>
                        <div class="description py-3">
                            <h3>Write a PHP program to reverse an array</h3><p>In this tutorial, you will learn how to&nbsp;<span style="font-size: 1rem;">reverse an array</span><span style="font-size: 1rem;">&nbsp;in php.</span></p><p>Below is the php script&nbsp;<span style="font-size: 1rem;">to&nbsp;</span><span style="font-size: 1rem;">reverse an array</span><span style="font-size: 1rem;">&nbsp;in php.</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP program to reverse an array<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span>Write a PHP program to reverse an array<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$colors</span> = <span style="color: #dcdcaa;">array</span>(<span style="color: #ce9178;">"red"</span>,<span style="color: #ce9178;">"green"</span>,<span style="color: #ce9178;">"blue"</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$count</span> = <span style="color: #dcdcaa;">sizeof</span>(<span style="color: #9cdcfe;">$colors</span>);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Count of the given array is: "</span>.<span style="color: #9cdcfe;">$count</span>.<span style="color: #ce9178;">"&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Before Reverse Operation&lt;/br&gt;"</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">for</span> (<span style="color: #9cdcfe;">$i</span>=<span style="color: #b5cea8;">0</span>; <span style="color: #9cdcfe;">$i</span>&lt;<span style="color: #9cdcfe;">$count</span>; <span style="color: #9cdcfe;">$i</span>++)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"</span><span style="color: #9cdcfe;">$colors</span><span style="color: #ce9178;">[</span><span style="color: #9cdcfe;">$i</span><span style="color: #ce9178;">]&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"&lt;br&gt;After Reverse Operation&lt;/br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">for</span> (<span style="color: #9cdcfe;">$i</span>=<span style="color: #9cdcfe;">$count</span>-<span style="color: #b5cea8;">1</span>; <span style="color: #9cdcfe;">$i</span>&gt;=<span style="color: #b5cea8;">0</span>; <span style="color: #9cdcfe;">$i</span>--)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"</span><span style="color: #9cdcfe;">$colors</span><span style="color: #ce9178;">[</span><span style="color: #9cdcfe;">$i</span><span style="color: #ce9178;">]&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/replace-one-string-using-another-string-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/find-out-max-and-min-number-in-array-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
