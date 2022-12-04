@extends("layouts.master")

@section('title')
PHP | Database Connection | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to give database connection in PHP MySQL</h1>
                        </div>

                        <div class="description py-3">
                            <h2><b>How to give or make a database connection in PHP MySQL</b></h2><p></p><p>In this post, you will be learning how to create or give a database connection in php mysql.</p><p>So guys, first you will have to create a database in phpMyAdmin (Server) and then get your hostname, database name, username and password.</p><p>But, If we are using in our system, xampp or wampp server, then by default it would be like: host="localhost", database_name="your_create_db", username="root" &amp; password=" ".&nbsp;<span style="font-size: 1rem;">Example given below:</span><br></p><blockquote class="blockquote"><b>Example (MySQLi Object-Oriented)</b></blockquote><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$host</span> = <span style="color: #ce9178;">"localhost"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$username</span> = <span style="color: #ce9178;">"your_username"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$password</span> = <span style="color: #ce9178;">"your_password"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$database</span> = <span style="color: #ce9178;">"your_database_name"</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Create DB Connection</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">mysqli</span>(<span style="color: #9cdcfe;">$</span><span style="color: rgb(156, 220, 254);">host</span>, <span style="color: rgb(156, 220, 254);">$username</span>, <span style="color: rgb(156, 220, 254);">$password</span>, <span style="color: rgb(156, 220, 254);">$database</span>);<br></div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Check connection</span></div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span> (<span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #9cdcfe;">connect_error</span>) </div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; <span style="color: #c586c0;">die</span>(<span style="color: #ce9178;">"Connection failed: "</span> . <span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #9cdcfe;">connect_error</span>);</div><div>&nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Database Connected successfully"</span>;</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><blockquote class="blockquote"><b>Example in (MySQLi Procedural)</b></blockquote><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$host</span> = <span style="color: #ce9178;">"localhost"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$username</span> = <span style="color: #ce9178;">"your_username"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$password</span> = <span style="color: #ce9178;">"your_password"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$database</span> = <span style="color: #ce9178;">"your_database_name"</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Create DB Connection</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #dcdcaa;">mysqli_connect</span>(<span style="color: #9cdcfe;">$host</span>, <span style="color: #9cdcfe;">$username</span>, <span style="color: #9cdcfe;">$password</span>, <span style="color: #9cdcfe;">$database</span>);</div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Check connection</span></div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span> (!<span style="color: #9cdcfe;">$conn</span>) {</div><div>&nbsp; &nbsp; <span style="color: #c586c0;">die</span>(<span style="color: #ce9178;">"Connection failed: "</span> . <span style="color: #dcdcaa;">mysqli_connect_error</span>());</div><div>&nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Connected successfully"</span>;</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php/create-database-using-php-mysql') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php/create-table-in-database-using-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
