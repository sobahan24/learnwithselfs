@extends("layouts.master")

@section('title')
PHP | Operators | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Operators in PHP</h1>
                        </div>
                        <div class="description py-3">
                            <p>Operators are used to perform some operation.</p><p>For example : addition of two numbers is an operation.</p><p>PHP operators are divided into the following groups :</p>
                            <p><span style="white-space: pre;">     </span> 1. Arithematic Operators</p>
                            <p><span style="white-space: pre;">     </span> 2. Assignment Operators</p>
                            <p><span style="white-space: pre;">     </span> 3. Comparison Operators</p>
                            <p><span style="white-space: pre;">     </span> 4. Logical Operators</p>
                            <p><span style="white-space: pre;">     </span> 5. Increment and Decrement Operators</p>
                            <p><span style="font-size: 1.25rem;"><b>
                            1. Arithematic Operators</b></span><br></p><p><span style="white-space:pre">	</span>These operators are used to perform arithematic operations such as addition, <span style="white-space:pre">	</span>subtraction of two numbers, etc.</p><hr><p>1 A) "<b>+</b>" Operator</p>
                            <p><span style="white-space:pre">	</span>It is used to perform addition of two or more variables/values.</p><p><span style="white-space:pre">	</span>Syntax : Variable1 + Variable2</p><p><span style="white-space:pre">	</span>Example :</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">2</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">8</span>;</div><div><span style="color: #9cdcfe;">$result</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;+&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$result</span>;&nbsp;<span style="color: #6a9955;">//10&nbsp;will&nbsp;be&nbsp;the&nbsp;output</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
                            <p><span style="font-size: 1rem;">1 B) "</span><b style="font-size: 1rem;">-</b><span style="font-size: 1rem;">" Operator</span><br></p><p><span style="white-space:pre">	</span>It is used to perform subtraction of two or more variables/values.</p><p><span style="white-space:pre">	</span>Syntax : Variable1 - Variable2</p><div><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #9cdcfe;">$result</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;-&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$result</span>;&nbsp;<span style="color: #6a9955;">//5&nbsp;will&nbsp;be&nbsp;the&nbsp;output</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div>
                            <div><span style="font-size: 1rem;">1 C) "</span><b style="font-size: 1rem;">*</b><span style="font-size: 1rem;">" Operator</span><br></div><div><div><span style="white-space:pre">	</span>It is used to perform Multiplication of two or more variable/value.</div><div><span style="white-space:pre">	</span>Syntax : Variable1 * Variable2</div><div><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #9cdcfe;">$result</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;*&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$result</span>;&nbsp;<span style="color: #6a9955;">//50&nbsp;will&nbsp;be&nbsp;the&nbsp;output</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div>
                            <div><span style="font-size: 1rem;">1 D) "</span><b style="font-size: 1rem;">/</b><span style="font-size: 1rem;">" Operator</span><br></div></div><div><div><span style="white-space:pre">	</span>It is used to perform division of two or more variables/values.</div><div><span style="white-space:pre">	</span>Syntax : Variable1 / Variable2</div></div><div><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #9cdcfe;">$result</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;/&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$result</span>;&nbsp;<span style="color: #6a9955;">//2&nbsp;will&nbsp;be&nbsp;the&nbsp;output</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div>
                            <div><span style="font-size: 1rem;">1 E) "</span><b style="font-size: 1rem;">%</b><span style="font-size: 1rem;">" Opertor</span><br></div><div><div><span style="white-space:pre">	</span>It gives the remainder of two or more variables/values.</div><div><span style="white-space:pre">	</span>Syntax : Variable1 % Variable2</div></div><div><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$a</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">10</span>;</div><div><span style="color: #9cdcfe;">$b</span>&nbsp;=&nbsp;<span style="color: #b5cea8;">5</span>;</div><div><span style="color: #9cdcfe;">$result</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$a</span>&nbsp;%&nbsp;<span style="color: #9cdcfe;">$b</span>;</div><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #9cdcfe;">$result</span>;&nbsp;<span style="color: #6a9955;">//0&nbsp;will&nbsp;be&nbsp;the&nbsp;output</span></div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div>
                            <div><span style="font-size: 1.25rem; font-weight:bold">2. Assignment Operators</span><br></div><div><div><span style="white-space:pre">	</span>These operators are used to assign values to a variable.</div><div><span style="white-space:pre">	</span>Let's consider our variables are $a and $b.</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 A) "=" Operator</div>
                            <div><span style="white-space:pre">                 </span>$a = $b. Here $a is assigned the value of $b;</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 B) $a += $b</div>
                            <div><span style="white-space:pre">	         </span>This is equal to writting $a = $a + $b;</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 C) $a -= $b</div>
                            <div><span style="white-space:pre">	        </span>This is equal to writting $a = $a - $b;</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 D) $a *= $b</div>
                            <div><span style="white-space:pre">	        </span>This is equal to writting $a = $a * $b;</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 E) $a /= $b</div>
                            <div><span style="white-space:pre">	        </span>This is equal to writting $a = $a / $b;</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">       </span>2 F) $a %= $b</div>
                            <div><span style="white-space:pre">	        </span>This is equal to writting $a = $a % $b;</div><div><br></div>

                            <div>
                                <h5><b>3. Comparison Operator</b></h5>
                                <div><span style="white-space:pre">	</span>These operators are used to compare two variables/values.</div>
                                <div><span style="white-space:pre">	</span>Let's consider our variables are $a and $b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 A) $a <b>==</b> $b</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a is <b>equal to</b> $b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 B) $a != $b</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a is <b>not equal to </b>$b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 C) $a &gt; $b&nbsp;</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a is <b>greater than</b> $b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 D) $a &lt; $b&nbsp;</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a is <b>lesser than </b>$b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 E) $a &gt;= $b&nbsp;</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a is <b>greater than or equal to </b>$b.</div>
                                <div style="margin-top: 10px"><span style="white-space:pre;">      </span> 3 F) $a &lt;= $b&nbsp;</div>
                                <div><span style="white-space:pre">	         </span>Returns true when $a <b>lesser than or equal to </b>$b.</div>
                            </div>
                        </div>
                        <div><br></div>
                        <div>
                            <h5><b>4. Logical Operators</b></h5>
                            <div><span style="white-space:pre">	</span>These operators are used to combine two or more conditional <span style="white-space:pre">	</span>statements.</div>
                            <div><span style="white-space:pre">	</span>Let's consider our variables are $a and $b.</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">	</span>4 A) $a &amp;&amp; $b</div>
                            <div><span style="white-space:pre">	          </span>Returns true when both $a <b>and </b>$b are true.</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">	</span>4 B) $a || $b</div>
                            <div><span style="white-space:pre">	          </span>Returns true when either $a <b>or </b>$b is true.</div>
                            <div style="margin-top: 10px"><span style="white-space:pre">	</span>4 C) !$a</div>
                            <div><span style="white-space:pre">	          </span>Returns true when $a is <b>not</b> true.</div>
                        </div>
                        <div><br></div>
                        <div>
                            <h5><b>5. Increment and Decrement Operators</b></h5>
                            <div><span style="white-space:pre">	</span>These operators are used to increase or decrease the value of a variable.</div>
                            <div><span style="white-space:pre">	</span>Let's consider our variables are $a and $b.<span style="white-space:pre">	</span></div>
                            <div style="margin-top: 10px"><span style="white-space: pre;">       </span> 5 A) $a++&nbsp;</div>
                            <div><span style="white-space:pre">	        </span>This is known as <b>post-increment</b> operator. It returns the value of $a and then <span style="white-space: pre;">                </span> increments the value of $a by 1.</div>
                            <div style="margin-top: 10px"><span style="white-space: pre;">       </span> 5 B) $a--</div>
                            <div><span style="white-space:pre">	        </span>This is known as <b>post-decrement</b> operator. It returns the value of $a and then <span style="white-space: pre;">                </span> decrements the value of $a by 1.</div>
                            <div style="margin-top: 10px"><span style="white-space: pre;">       </span> 5 C) ++$a&nbsp;</div>
                            <div><span style="white-space:pre">	        </span>This is known as <b>pre-increment</b> operator. It increments the value of $a by 1 and <span style="white-space: pre;">               </span> then returns the value of $a .</div>
                            <div><br></div>
                            <div style="margin-top: 10px"><span style="white-space: pre;">       </span> 5 D) --$a&nbsp;</div>
                            <div><span style="white-space:pre">	        </span>This is known as <b>pre-decrement</b> operator. It decrements the value of $a by 1 and <span style="white-space: pre;">               </span> then returns the value of $a .</div>
                        </div><div><br></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-variables') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-if-else') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
