@extends("layouts.master")

@section('title')
PHP | Comments | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Comments in PHP</h1>
                        </div>

                        <div class="description py-3">
                            <p><b>Comment</b></p>
                            <p>Comments are written in between the codes to remember the purpose of that code.</p>
                            <p><span style="font-size: 1rem;">Comments are not executed with the code. It is written solely for the reader to read and understand why the code was written.</span></p>
                            <p><span style="font-size: 1rem;">As developers keep working different projects and later when they look back at their old code, it's hard to remember what idea the developer had while writing that peice of code. So to overcome this, we use comments.</span></p>
                            <p><span style="font-size: 1rem;">Now coming to the types of comments in PHP</span></p>
                            <p><span style="font-size: 1rem;"><b>We have 2 types of comments :</b></span></p>
                            <p><span style="font-size: 1rem; margin-left:30px">1. Single line comment</span></p>
                            <p><span style="font-size: 1rem; margin-left:30px">2. Multi-line comment</span></p>
                            <p><b>Single line comments :<br></b></p>
                            <p>Single line comments can be written using the "//".</p>
                            <p><b>Example:</b></p>
                            <div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"hello"</span>;</div><br><div><span style="color: #6a9955;">//this&nbsp;is&nbsp;a&nbsp;single&nbsp;line&nbsp;comment</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><span style="font-size: 1rem;">Single line comments can also be written using "#".</span><br></p><p><b>Example:</b></p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"hello"</span>;</div><br><div><span style="color: #6a9955;">//this&nbsp;is&nbsp;a&nbsp;single&nbsp;line&nbsp;comment</span></div><br><div><span style="color: #6a9955;">#this&nbsp;is&nbsp;another&nbsp;single&nbsp;line&nbsp;comment</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><b style="font-size: 1rem;">Multi-line comments :</b><br></p><p>In php, Multi-line comments can be written using "<b>/*</b>" and "<b>*/</b>"&nbsp;</p><p><b>Example:</b></p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"hello"</span>;</div><br><div><span style="color: #6a9955;">/*</span></div><div><span style="color: #6a9955;">this&nbsp;is&nbsp;a&nbsp;</span></div><div><span style="color: #6a9955;">multi-line&nbsp;comment</span></div><div><span style="color: #6a9955;">in&nbsp;php&nbsp;</span></div><div><span style="color: #6a9955;">*/</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><span style="font-size: 1rem;">Comments can also be written in between a line of code.</span><br></p><p><b>Example:</b></p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"hello"</span>;</div><br><div><span style="color: #9cdcfe;">$answer</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;+&nbsp;<span style="color: #6a9955;">/*&nbsp;sum&nbsp;of&nbsp;a&nbsp;and&nbsp;b*/</span>&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$answer</span>;</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-syntax') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-variables') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.php.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
