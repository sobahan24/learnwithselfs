@extends("layouts.master")

@section('title')
PHP | Switch Case | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP Switch Case</h1>
                        </div>
                        <div class="description py-3">
                            <p>Switch case is a selectional statement which is used to perform different task depending on different conditions.</p><pre>Syntax :<br>switch (user_input) {<br>&nbsp; &nbsp; case name1:<br>&nbsp; &nbsp; &nbsp; &nbsp;will be executed when user_input=name1;<br>&nbsp; &nbsp; &nbsp; &nbsp;break;<br>&nbsp; &nbsp; case name2:<br>&nbsp; &nbsp; &nbsp; &nbsp;will be executed when user_input=name2;<br>&nbsp; &nbsp; &nbsp; &nbsp;break;<br>&nbsp; &nbsp; case name3:<br>&nbsp; &nbsp; &nbsp; &nbsp;will be executed when user_input=name3;<br>&nbsp; &nbsp; &nbsp; &nbsp;break;<br>&nbsp; &nbsp; &nbsp; &nbsp;...<br>&nbsp; &nbsp; default:<br>&nbsp; &nbsp; &nbsp; &nbsp;will be executed if user_input does not match any of the case names;<br>}</pre><p>Explaination : The user gives an input which we have stored in a variable named user_input. The value of user_input will be matched with each case name to check if it has a match. Whichever case name matches, that block of code will be executed.If the user_input doesn't match with any of the case names then the default case will be executed.</p><p>Here is an example of Switch case&nbsp;</p><p>Example:</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$user_input</span>&nbsp;=&nbsp;<span style="color: #ce9178;">"morning"</span>;</div><br><div><span style="color: #c586c0;">switch</span>&nbsp;(<span style="color: #9cdcfe;">$user_input</span>)&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">case</span>&nbsp;<span style="color: #ce9178;">"morning"</span>:</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"time&nbsp;for&nbsp;breakfast"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">break</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">case</span>&nbsp;<span style="color: #ce9178;">"afternoon"</span>:</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"time&nbsp;for&nbsp;lunch"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">break</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">case</span>&nbsp;<span style="color: #ce9178;">"night"</span>:</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"time&nbsp;for&nbsp;dinner"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">break</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">default</span>:</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"Input&nbsp;does&nbsp;not&nbsp;match&nbsp;any&nbsp;case"</span>;</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><p>The Output for the above code :</p><p><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">time for breakfast</span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><br></span><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-if-else') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-loops') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
