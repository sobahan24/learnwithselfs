@extends('layouts.master')

@section('title')
    PHP Programs | Formatting Data | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP program to format the date functions in php</h1>
                        </div>
                        <div class="description py-3">
                            <h3>Write a PHP program to demonstrate any 5 date functions</h3><p>In this tutorial, you will learn how to format the date functions in php where we are going to demonstrate with any 5 date functions. So, basically we are formatting the Dates in php.</p><p>Below is the php script to format the date functions in php.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP Program to Formatting the Date with PHP<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span>Write a PHP program to demonstrate any 5 date functions<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"&lt;br&gt;"</span>.<span style="color: #ce9178;">"Today is"</span>.<span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"y/m/d"</span>).<span style="color: #ce9178;">"&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Today is"</span> . <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"y:m:d"</span>) . <span style="color: #ce9178;">"&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Today is"</span> . <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"y-m-d"</span>) . <span style="color: #ce9178;">"&lt;br&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Today is"</span> . <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"l"</span>) . <span style="color: #ce9178;">"&lt;br&gt;"</span>; <span style="color: #6a9955;">//Prints the day</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Today is"</span> . <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"D"</span>) . <span style="color: #ce9178;">"&lt;br&gt;"</span>; <span style="color: #6a9955;">//Prints the first three letters of a day</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Today is"</span> . <span style="color: #dcdcaa;">date</span>(<span style="color: #ce9178;">"N"</span>) . <span style="color: #ce9178;">"&lt;br&gt;"</span>; <span style="color: #6a9955;">//Numeric representation of a day</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$date</span>=<span style="color: #dcdcaa;">date_create</span>(<span style="color: #ce9178;">"2020-10-05"</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">date_sub</span>(<span style="color: #9cdcfe;">$date</span>,<span style="color: #dcdcaa;">date_interval_create_from_date_string</span>(<span style="color: #ce9178;">"10 days"</span>)); </div><div><br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"The Calculated Date is "</span>.<span style="color: #dcdcaa;">date_format</span>(<span style="color: #9cdcfe;">$date</span>,<span style="color: #ce9178;">"Y-m-d"</span>);</div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/display-greeting-acc-to-current-time') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/login-system-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
