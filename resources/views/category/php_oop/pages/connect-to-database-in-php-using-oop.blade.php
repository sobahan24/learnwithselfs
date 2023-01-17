@extends('layouts.master')

@section('title')
    PHP-OOP | Connect Database | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_oop.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to connect to database in php using oop</h1>
                        </div>
                        <div class="description pt-3">
                            <h3><b>Connect to database in php using oop</b></h3>
                            <p>In this article, you will be learning how to connect database using oop in php (object oriented programming in php).</p>
                            <p>So, Let's begin with connecting your database in php oop where we will be seeing 2 example to connect database. <br> <b><span style="white-space: pre;">     </span> 1.<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;MySqli Object Oriented</b> <br><b><span style="white-space: pre;">     </span>2.  MySqli Procedural.</b></span></p>
                            <p>Create a file <b>DBConn.php</b> and give&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><b>MySqli Object Oriented</b>&nbsp;</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Database connection in</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">PHP</span></p><p><b>Example:&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">MySqli Object Oriented in php</span></b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_HOST'</span>,<span style="color: #ce9178;">'localhost'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_USER'</span>,<span style="color: #ce9178;">'root'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_PASSWORD'</span>,<span style="color: #ce9178;">''</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_DATABASE'</span>,<span style="color: #ce9178;">'adminpanel'</span>);</div><br><div><span style="color: #569cd6;">class</span> <span style="color: #4ec9b0;">DatabaseConnection</span></div><div>{</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: rgb(220, 220, 170);">__construct</span>()<br></div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">mysqli</span>(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #9cdcfe;">connect_error</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">die</span> (<span style="color: #ce9178;">"&lt;h1&gt;Database Connection Failed&lt;/h1&gt;"</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #6a9955;">//echo "Database Connected </span><span style="color: rgb(106, 153, 85);">Successfully</span><span style="color: rgb(106, 153, 85);">";</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #569cd6;">$this</span>-&gt;<span style="color: #9cdcfe;">conn</span> = <span style="color: #9cdcfe;">$conn</span>;</div><div>&nbsp; &nbsp; }</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><b><br></b></p><p><b>Example:&nbsp;</b><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><b>MySqli Procedural </b>Database Connection in php.</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_HOST'</span>,<span style="color: #ce9178;">'localhost'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_USER'</span>,<span style="color: #ce9178;">'root'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_PASSWORD'</span>,<span style="color: #ce9178;">''</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_DATABASE'</span>,<span style="color: #ce9178;">'adminpanel'</span>);</div><br><div><span style="color: #569cd6;">class</span> <span style="color: #4ec9b0;">DatabaseConnection</span></div><div>{</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: rgb(220, 220, 170);">__construct</span>()<br></div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #dcdcaa;">mysqli_connect</span>(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span> (!<span style="color: #9cdcfe;">$conn</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">die</span> (<span style="color: #ce9178;">"&lt;h1&gt;Database Connection Failed&lt;/h1&gt;"</span>. <span style="color: #dcdcaa;">mysqli_connect_error</span>());</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Database Connected Successfully"</span>;</div><div>        <span style="color: rgb(197, 134, 192);">return</span> <span style="color: rgb(86, 156, 214);">$this</span>-&gt;<span style="color: rgb(156, 220, 254);">conn</span> = <span style="color: rgb(156, 220, 254);">$conn</span>;</div><div>&nbsp; &nbsp; }</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php-oop') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php-oop/insert-data-in-database-using-php-oop') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @include('category.php_oop.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
