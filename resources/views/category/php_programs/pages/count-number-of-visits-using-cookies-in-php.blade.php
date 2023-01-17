@extends('layouts.master')

@section('title')
    PHP Programs | Count Number | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Count Number of Visits on a web page using cookies in php</h1>
                        </div>

                        <div class="description py-3">
                            <h3>Write a PHP program to Count Number of Visits on a web page using cookies in php</h3><p>In this tutorial, you will learn how to Count Number of Visits on a web page using cookies in php, so that keeps track of how many times a visitor has loaded the page.</p><p>Below is the php script to Count Number of Visits on a web page using cookies in php.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP program to Count Number of Visits on a web page using cookies in php<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span>Write a PHP Program to Count Number of Visits on a web page using cookies in php<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h3</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$countvisit</span> = <span style="color: #b5cea8;">1</span>;</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_COOKIE</span>[<span style="color: #ce9178;">'countvisit'</span>]))</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$countvisit</span> = <span style="color: #9cdcfe;">$_COOKIE</span>[<span style="color: #ce9178;">'countvisit'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$countvisit</span> ++; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">setcookie</span>(<span style="color: #ce9178;">'countvisit'</span>, <span style="color: #9cdcfe;">$countvisit</span>); &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"You have visited "</span>.<span style="color: #9cdcfe;">$countvisit</span>.<span style="color: #ce9178;">" times"</span>;</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div>&nbsp; &nbsp; </div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/develop-email-registration-form') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/fetch-data-from-db-and-display-in-html-table-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
