@extends("layouts.master")

@section('title')
PHP | If - ElseIf - Else | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>PHP Conditional Statements</h1>
                    </div>
                    <div class="description py-3">
                        <p>Conditional Statements are those statements which will be executed only when the condition is satisfied.</p>
                        <h5><b>1. If Statement</b></h5>
                        <p><span style="white-space:pre">	</span>The <b>IF</b> statement is executed if the condition is true.</p><pre>    Syntax :
                            if( condition)
                            {
                            //your code here
                            }<br></pre><p>Example:</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$a</span>&nbsp;&gt;&nbsp;<span style="color: #9cdcfe;">$b</span>)</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"a&nbsp;is&nbsp;greater&nbsp;than&nbsp;b"</span>;</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                            <h5><b>2. If Else Statement</b></h5>
                            <p><span style="white-space:pre">	</span>In the IF Else statement, the "<b>IF</b>" part is executed if the condition is true else the "<b>Else</b>" <span style="white-space:pre">	</span>part will be executed.</p><pre><span style="white-space:pre">	</span>Syntax :<br><span style="white-space:pre">	</span>if( condition)<br><span style="white-space:pre">	</span>{<br><span style="white-space:pre">		</span>//your code here<br><span style="white-space:pre">	</span>}<br><span style="white-space:pre">	</span>else<br><span style="white-space:pre">	</span>{<br><span style="white-space:pre">		</span>//your code here<br><span style="white-space:pre">	</span>}</pre><p>Example :</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$a</span>&nbsp;&gt;&nbsp;<span style="color: #9cdcfe;">$b</span>)</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"a&nbsp;is&nbsp;greater&nbsp;than&nbsp;b"</span>;</div><div>}</div><div><span style="color: #c586c0;">else</span></div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"b&nbsp;is&nbsp;greater&nbsp;than&nbsp;a"</span>;</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                            <h5><b>3. If Elseif Else Statement</b></h5>
                            <p><span style="white-space:pre">	</span>In the "<b>IF Elseif Else</b>" statement, first the compiler check if the "<b>IF</b>" condition is true. If it <span style="white-space:pre">	</span>is true, the respective code will be executed. But when the "<b>IF</b>" condition is false, the <span style="white-space:pre">	</span>compiler will check if the "<b>elseif</b>" condition is true. If is true, the respective code will be <span style="white-space:pre">	</span>executed. If both the "IF" and "Elseif" conditions are not satisfied, then the "<b>Else</b>" part will <span style="white-space:pre">	</span>be executed.</p><pre>Syntax :<br><span style="white-space:pre">	</span>if( condition)<br><span style="white-space:pre">	</span>{<br><span style="white-space:pre">		</span>//will be executed when the above if condition is true.<br><span style="white-space:pre">	</span>}<br><span style="white-space:pre">	</span>elseif( condition )<br><span style="white-space:pre">	</span>{<br><span style="white-space:pre">		</span>//will be executed when the if condition is false and the elseif condition is true.<br><span style="white-space:pre">	</span>}<span style="white-space:pre">	<br></span><span style="white-space:pre">	</span>else<br><span style="white-space:pre">	</span>{<br><span style="white-space:pre">		</span>//will be executed when none of the above conditions are satisfied.<br><span style="white-space:pre">	</span>}</pre><p>Example :</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$a</span>&nbsp;&gt;&nbsp;<span style="color: #9cdcfe;">$b</span>)</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"a&nbsp;is&nbsp;greater&nbsp;than&nbsp;b"</span>;</div><div>}</div><div><span style="color: #c586c0;">elseif</span>(&nbsp;<span style="color: #9cdcfe;">$b</span>&nbsp;&gt;&nbsp;<span style="color: #9cdcfe;">$a</span>)</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"b&nbsp;is&nbsp;greater&nbsp;than&nbsp;a"</span>;</div><div>}</div><div><span style="color: #c586c0;">else</span></div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"a&nbsp;is&nbsp;equal&nbsp;to&nbsp;b"</span>;</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/php/php-operators') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/php/php-switch-case') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
