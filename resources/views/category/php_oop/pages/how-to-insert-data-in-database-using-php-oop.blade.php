@extends('layouts.master')

@section('title')
    PHP-OOP | Insert Data | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_oop.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to Insert Data in PHP OOP using MySqli Object Oriented</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>Insert data into database with MySqli Object Oriented.</b></h3><p>In this post, you will be learning about how to insert data into database in php mysql using oops concept. So, we will be using bootstrap 5 for designing the html form user interface.</p><p>We are going to <b>MySqli Object Oriented</b> to insert data in php oop.</p><p><b>Step 1:</b> Create a table into your database as follows:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">CREATE</span> <span style="color: #569cd6;">TABLE</span> <span style="color: #569cd6;">IF</span> <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">EXISTS</span> <span style="color: #ce9178;">`students`</span> (</div><div>&nbsp; &nbsp; <span style="color: #ce9178;">`id`</span> <span style="color: #569cd6;">int</span>(<span style="color: #b5cea8;">11</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; <span style="color: #ce9178;">`fullname`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; <span style="color: #ce9178;">`email`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; <span style="color: #ce9178;">`phone`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">20</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; <span style="color: #ce9178;">`course`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">20</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>) ENGINE=InnoDB AUTO_INCREMENT=<span style="color: #b5cea8;">3</span> <span style="color: #569cd6;">DEFAULT</span> CHARSET=latin1;</div></div><p><b><br></b></p><p><b>Step 2:</b>&nbsp;Create a&nbsp;<span style="font-weight: bolder; font-family: var(--bs-font-sans-serif); font-size: 1rem;">student-add.php&nbsp;</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">file and paste the below html form designed using bootstrap.</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><div style="line-height: 19px;"><span style="color: #569cd6;">&lt;?php</span> <span style="color: #dcdcaa;">session_start</span>(); <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">charset</span>=<span style="color: #ce9178;">"UTF-8"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">http-equiv</span>=<span style="color: #ce9178;">"X-UA-Compatible"</span> <span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"IE=edge"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"viewport"</span> <span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"width=device-width, initial-scale=1.0"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP OOPS - Insert Data into database in php mysql using oops<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">link</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"</span> <span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span><span style="color: #808080;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container mt-4"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"row"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"col-md-12"</span><span style="color: #808080;">&gt;</span></div><div><div style="line-height: 19px;"><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>]))</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"&lt;h5&gt;"</span>.<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>].<span style="color: #ce9178;">"&lt;/h5&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">unset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-header"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span>Student Add<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-body"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">"code.php"</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span> <span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>Full Name<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"fullname"</span> <span style="color: #9cdcfe;">required</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span> <span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>Email ID<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">required</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span> <span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>Course<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"course"</span> <span style="color: #9cdcfe;">required</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span> <span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>Phone No<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"phone"</span> <span style="color: #9cdcfe;">required</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"save_student"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn btn-primary"</span><span style="color: #808080;">&gt;</span>Save Student<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p><b><br></b></p><p><b>Step 3:</b> Create a database connection. create a file <b>dbconn.php</b> and paste the below code:</p><p><b>Example: Database Connection with MySqli Object Oriented.</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_HOST'</span>,<span style="color: #ce9178;">'localhost'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_USER'</span>,<span style="color: #ce9178;">'root'</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_PASSWORD'</span>,<span style="color: #ce9178;">''</span>);</div><div><span style="color: #dcdcaa;">define</span>(<span style="color: #ce9178;">'DB_DATABASE'</span>,<span style="color: #ce9178;">'adminpanel'</span>);</div><br><div><span style="color: #569cd6;">class</span> <span style="color: #4ec9b0;">DatabaseConnection</span></div><div>{</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: rgb(220, 220, 170);">__construct</span>()<br></div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">mysqli</span>(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #9cdcfe;">connect_error</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">die</span> (<span style="color: #ce9178;">"&lt;h1&gt;Database Connection Failed&lt;/h1&gt;"</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #6a9955;">//echo "Database Connected Successfully";</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #569cd6;">$this</span>-&gt;<span style="color: #9cdcfe;">conn</span> = <span style="color: #9cdcfe;">$conn</span>;</div><div>&nbsp; &nbsp; }</div><div>}</div><div><br></div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><p><b>Step 4:</b> Create a <b>code.php</b> file and paste the below:</p><p>In this file, we will include the database connection file and StudentController.php file.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div><div style="line-height: 19px;"><span style="color: #dcdcaa;">session_start</span>();</div><div style="line-height: 19px;"><br></div></div><div><span style="color: #c586c0;">include</span>(<span style="color: #ce9178;">'dbconn.php'</span>);</div><div><span style="color: #c586c0;">include</span>(<span style="color: #ce9178;">'StudentController.php'</span>);</div><div><br></div><div><div style="line-height: 19px;"><span style="color: #9cdcfe;">$db</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">DatabaseConnection</span>;</div></div><br><div><span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'save_student'</span>]))</div><div>{</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$inputData</span> = [</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ce9178;">'fullname'</span> =&gt; <span style="color: rgb(220, 220, 170);">mysqli_real_escape_string</span>(<span style="color: rgb(156, 220, 254);">$db</span>-&gt;<span style="color: rgb(156, 220, 254);">conn</span>,<span style="color: rgb(156, 220, 254);">$_POST</span>[<span style="color: rgb(206, 145, 120);">'fullname'</span>]),<br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ce9178;">'email'</span> =&gt; <span style="color: rgb(220, 220, 170);">mysqli_real_escape_string</span>(<span style="color: rgb(156, 220, 254);">$db</span>-&gt;<span style="color: rgb(156, 220, 254);">conn</span>,<span style="color: rgb(156, 220, 254);">$_POST</span>[<span style="color: rgb(206, 145, 120);">'email'</span>]),<br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ce9178;">'phone'</span> =&gt; <span style="color: rgb(220, 220, 170);">mysqli_real_escape_string</span>(<span style="color: rgb(156, 220, 254);">$db</span>-&gt;<span style="color: rgb(156, 220, 254);">conn</span>,<span style="color: rgb(156, 220, 254);">$_POST</span>[<span style="color: rgb(206, 145, 120);">'phone'</span>]),<br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ce9178;">'course'</span> =&gt; <span style="color: rgb(220, 220, 170);">mysqli_real_escape_string</span>(<span style="color: rgb(156, 220, 254);">$db</span>-&gt;<span style="color: rgb(156, 220, 254);">conn</span>,<span style="color: rgb(156, 220, 254);">$_POST</span>[<span style="color: rgb(206, 145, 120);">'course'</span>]),<br></div><div>&nbsp; &nbsp; ];</div><br><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$student</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">StudentController</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$result</span> = <span style="color: #9cdcfe;">$student</span>-&gt;<span style="color: #dcdcaa;">create</span>(<span style="color: #9cdcfe;">$inputData</span>);</div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$result</span>)</div><div>    {</div><div><div style="line-height: 19px;"><div><span style="color: #9cdcfe;">        $_SESSION</span>[<span style="color: #ce9178;">'message'</span>] = <span style="color: #ce9178;">"</span><span style="color: rgb(206, 145, 120);">Student Added Successfully</span><span style="color: rgb(206, 145, 120);">"</span>;</div><div>&nbsp; &nbsp;     <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">"Location: </span><span style="color: rgb(206, 145, 120);">student-add.php</span><span style="color: rgb(206, 145, 120);">"</span>);</div><div>&nbsp; &nbsp;     <span style="color: #c586c0;">exit</span>(<span style="color: #b5cea8;">0</span>);</div></div></div><div>&nbsp; &nbsp; }</div><div><span style="color: #c586c0;">    else</span></div><div>    {</div><div>&nbsp;<span style="color: rgb(156, 220, 254);">       $_SESSION</span>[<span style="color: rgb(206, 145, 120);">'message'</span>] = <span style="color: rgb(206, 145, 120);">"Not Inserted</span><span style="color: rgb(206, 145, 120);">"</span>;</div><div><div style="line-height: 19px;"><div>&nbsp; &nbsp;     <span style="color: rgb(220, 220, 170);">header</span>(<span style="color: rgb(206, 145, 120);">"Location: </span><span style="color: rgb(206, 145, 120);">student-add.php</span><span style="color: rgb(206, 145, 120);">"</span>);</div><div>&nbsp; &nbsp;     <span style="color: rgb(197, 134, 192);">exit</span>(<span style="color: rgb(181, 206, 168);">0</span>);</div></div></div><div>&nbsp; &nbsp; }</div><div>}</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><p><b>Step 5:</b> Create a <b>StudentController.php</b> file and paste the below to insert data into database.</p><p><b>Example: Insert Query with MySqli Object Oriented.</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #569cd6;">class</span> <span style="color: #4ec9b0;">StudentController</span></div><div>{</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">__construct</span>()</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$db</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">DatabaseConnection</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">$this</span>-&gt;<span style="color: #9cdcfe;">conn</span> = <span style="color: #9cdcfe;">$db</span>-&gt;<span style="color: #9cdcfe;">conn</span>;</div><div>&nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">public</span> <span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">create</span>(<span style="color: #9cdcfe;">$inputData</span>)</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$fullname</span> = <span style="color: #9cdcfe;">$inputData</span>[<span style="color: #ce9178;">'fullname'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$email</span> = <span style="color: #9cdcfe;">$inputData</span>[<span style="color: #ce9178;">'email'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$phone</span> = <span style="color: #9cdcfe;">$inputData</span>[<span style="color: #ce9178;">'phone'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$course</span> = <span style="color: #9cdcfe;">$inputData</span>[<span style="color: #ce9178;">'course'</span>];</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$studentQuery</span> = <span style="color: #ce9178;">"</span><span style="color: #569cd6;">INSERT</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">INTO</span><span style="color: #ce9178;"> students (fullname,email,phone,course) </span><span style="color: #569cd6;">VALUES</span><span style="color: #ce9178;"> ('</span><span style="color: #9cdcfe;">$fullname</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$email</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$phone</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$course</span><span style="color: #ce9178;">')</span><span style="color: #ce9178;">"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$result</span> = <span style="color: #569cd6;">$this</span>-&gt;<span style="color: #9cdcfe;">conn</span>-&gt;<span style="color: #dcdcaa;">query</span>(<span style="color: #9cdcfe;">$studentQuery</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$result</span>){</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #569cd6;">true</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }<span style="color: #c586c0;">else</span>{</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span> <span style="color: #569cd6;">false</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; }</div><div>}</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php-oop/connect-to-database-in-php-using-oop') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php-oop/insert-data-in-php-oop-using-mysqli-procedural') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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