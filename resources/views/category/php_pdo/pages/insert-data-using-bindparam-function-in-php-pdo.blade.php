@extends('layouts.master')

@section('title')
    PHP PDO | Insert Data BindParam | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_pdo.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
     

     <div class="main-heading">
         <h1>How to Insert data using bindParam function in php pdo</h1>
    </div>
 
     <div class="description py-3">
         <h3><b>How to Insert data using bindParam function in php pdo</b></h3><p>In this tutorial, you will be learning about how to insert data using <b>"bindParam()"</b> function in php pdo.</p><p>We are using bootstrap v5 to design the user Interface.</p><p><br></p><p><b>Step 1: </b>Create a Database Connection.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$servername</span> = <span style="color: #ce9178;">"localhost"</span>;</div><div><span style="color: #9cdcfe;">$username</span> = <span style="color: #ce9178;">"username"</span>;</div><div><span style="color: #9cdcfe;">$password</span> = <span style="color: #ce9178;">"password"</span>;</div><div><span style="color: #9cdcfe;">$database</span> = <span style="color: #ce9178;">"database_name"</span>;</div><br><div><span style="color: #c586c0;">try</span> {</div><br><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">PDO</span>(<span style="color: #ce9178;">"mysql:host=</span><span style="color: #9cdcfe;">$servername</span><span style="color: #ce9178;">;dbname=</span><span style="color: #9cdcfe;">$database</span><span style="color: #ce9178;">"</span>, <span style="color: #9cdcfe;">$username</span>, <span style="color: #9cdcfe;">$password</span>);</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #dcdcaa;">setAttribute</span>(<span style="color: #4ec9b0;">PDO</span>::ATTR_ERRMODE, <span style="color: #4ec9b0;">PDO</span>::ERRMODE_EXCEPTION); <span style="color: #6a9955;">// set the PDO error mode to exception</span></div><div>&nbsp; &nbsp; <span style="color: #6a9955;">// echo "Connected Successfully";</span></div><div>&nbsp; &nbsp; </div><div>} <span style="color: #c586c0;">catch</span>(<span style="color: #4ec9b0;">PDOException</span> <span style="color: #9cdcfe;">$e</span>) {</div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Connection Failed"</span> .<span style="color: #9cdcfe;">$e</span>-&gt;<span style="color: #dcdcaa;">getMessage</span>();</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><p><b>Step 2:</b> Create a file named <b>student-add.php</b> and paste below form:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">doctype</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">charset</span>=<span style="color: #ce9178;">"utf-8"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"viewport"</span> <span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"width=device-width, initial-scale=1"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">link</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"</span> <span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP PDO using bindParam() function CRUD<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"row"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"col-md-12 mt-4"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-header"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span> Add Data using PDO with bindParam() in PHP</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">a</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"index.php"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn btn-primary float-end"</span><span style="color: #808080;">&gt;</span>BACK<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">a</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-body"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">"code.php"</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Full Name<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"fullname"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Email Id<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Phone Number<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"phone"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Course<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"course"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"save_student"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn btn-primary"</span><span style="color: #808080;">&gt;</span>Save Student<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p>After form submit, it takes the action to code.php with post method.</p><p><b>Step 3:</b> Create a <b>code.php</b> file and paste the below code:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div><span style="color: #dcdcaa;">session_start</span>();</div><div><span style="color: #c586c0;">include</span>(<span style="color: #ce9178;">'dbcon.php'</span>);</div><br><div><span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'save_student'</span>]))</div><div>{</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$fullname</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'fullname'</span>];</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$email</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'email'</span>];</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$phone</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'phone'</span>];</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$course</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'course'</span>];</div><br><div>&nbsp; &nbsp; <span style="color: #c586c0;">try</span> {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$query</span> = <span style="color: #ce9178;">"</span><span style="color: #569cd6;">INSERT</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">INTO</span><span style="color: #ce9178;"> students (fullname, email, phone, course) </span><span style="color: #569cd6;">VALUES</span><span style="color: #ce9178;"> (?, ?, ?, ?)</span><span style="color: #ce9178;">"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$statement</span> = <span style="color: #9cdcfe;">$conn</span>-&gt;<span style="color: #dcdcaa;">prepare</span>(<span style="color: #9cdcfe;">$query</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$statement</span>-&gt;<span style="color: #dcdcaa;">bindParam</span>(<span style="color: #b5cea8;">1</span>, <span style="color: #9cdcfe;">$fullname</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$statement</span>-&gt;<span style="color: #dcdcaa;">bindParam</span>(<span style="color: #b5cea8;">2</span>, <span style="color: #9cdcfe;">$email</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$statement</span>-&gt;<span style="color: #dcdcaa;">bindParam</span>(<span style="color: #b5cea8;">3</span>, <span style="color: #9cdcfe;">$phone</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$statement</span>-&gt;<span style="color: #dcdcaa;">bindParam</span>(<span style="color: #b5cea8;">4</span>, <span style="color: #9cdcfe;">$course</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$query_execute</span> = <span style="color: #9cdcfe;">$statement</span>-&gt;<span style="color: #dcdcaa;">execute</span>();</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$query_execute</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>] = <span style="color: #ce9178;">"Added Successfully"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Location: index.php'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">exit</span>(<span style="color: #b5cea8;">0</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">else</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>] = <span style="color: #ce9178;">"Not Added"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Location: index.php'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">exit</span>(<span style="color: #b5cea8;">0</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; } <span style="color: #c586c0;">catch</span> (<span style="color: #4ec9b0;">PDOException</span> <span style="color: #9cdcfe;">$e</span>) {</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"My Error Type:"</span>. <span style="color: #9cdcfe;">$e</span>-&gt;<span style="color: #dcdcaa;">getMessage</span>();</div><div>&nbsp; &nbsp; }</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
     </div>
     <div class="col-md-12 mt-3">
         <div class="row">
             <div class="col-md-6 col-6 text-start">
                 <a href="{{ url('/php-pdo/delete-data-from-database-using-pdo-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
             </div>
             <div class="col-md-6 col-6 text-end">
                 <a href="{{ url('/php-pdo/edit-update-data-using-bindparam-in-php-pdo') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
             </div>
         </div>
     </div>
      
 </div>
                    @include('category.php_pdo.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection