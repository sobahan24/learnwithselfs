@extends("layouts.master")

@section('title')
PHP | Insert Data into DB | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to Insert data into database in php mysql</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>Insert data into database in php mysql</b></h3><p></p><p>In this tutorial, you will learn how to insert data into database in php mysql, where we will create a form, database connection and finally the processing code to save your data in MySQL D<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">atabase.</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Let's create a <b>table </b>named as <b>students</b> in database as given below:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>CREATE TABLE <span style="color: #ce9178;">`students`</span> (</div><div>&nbsp; &nbsp; id <span style="color: #569cd6;">int</span> NOT <span style="color: #569cd6;">NULL</span> AUTO_INCREMENT,</div><div>&nbsp; &nbsp; fullname <span style="color: #dcdcaa;">varchar</span>(<span style="color: #b5cea8;">55</span>) NOT <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; course <span style="color: #dcdcaa;">varchar</span>(<span style="color: #b5cea8;">55</span>) NOT <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; email <span style="color: #dcdcaa;">varchar</span>(<span style="color: #b5cea8;">55</span>) NOT <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; PRIMARY <span style="color: #dcdcaa;">KEY</span> (id)</div><div>) &nbsp;ENGINE=InnoDB DEFAULT CHARSET=latin1;</div></div><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><br></span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">So guys, Lets get started to insert data in database in php mysql:</span></p><p><b>Step 1: </b>Create a file named <b>dbconfig.php</b> to give the database connection in php.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$host</span> = <span style="color: #ce9178;">"localhost"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$username</span> = <span style="color: #ce9178;">"your_username"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$password</span> = <span style="color: #ce9178;">"your_password"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$database</span> = <span style="color: #ce9178;">"your_database_name"</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Create DB Connection</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$conn</span> = <span style="color: #dcdcaa;">mysqli_connect</span>(<span style="color: #9cdcfe;">$host</span>, <span style="color: #9cdcfe;">$username</span>, <span style="color: #9cdcfe;">$password</span>, <span style="color: #9cdcfe;">$database</span>);</div><br><div>&nbsp; &nbsp; <span style="color: #6a9955;">// Check connection</span></div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span> (!<span style="color: #9cdcfe;">$conn</span>) {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">die</span>(<span style="color: #ce9178;">"Connection failed: "</span> . <span style="color: #dcdcaa;">mysqli_connect_error</span>());</div><div>&nbsp; &nbsp; }</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><b style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><br></b></p><p><b style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Step 2: </b><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">Create a file named </span><b style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">student.php</b><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"> to make a HTML FORM. Also we will be using bootstrap v5 to design the FORM.</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>Insert Data in PHP MySQL<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">link</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"</span> <span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span> <span style="color: #808080;">/&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container mt-5"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"row justify-content-center"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"col-md-6"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card shadow"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-header"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span>Insert data into database in PHP MySQL<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-body"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">"code.php"</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Full Name<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"fullname"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <pan style="color: #808080;">&lt;/</pan><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Course<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"course"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span>Email ID<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span> <span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"mb-3"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">hr</span><span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"insert_buttton"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn btn-primary"</span><span style="color: #808080;">&gt;</span>Insert Data<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p><br></p><p><b>Step 3: </b>Create a file named <b>code.php</b> to write the code to save data into database in php mysql.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; <span style="color: #c586c0;">include_once</span> <span style="color: #ce9178;">'dbconfig.php'</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'insert_buttton'</span>]))</div><div>&nbsp; &nbsp; { &nbsp; &nbsp;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$fullname</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'fullname'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$course</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'course'</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$email</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'email'</span>];</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$query</span> = <span style="color: #ce9178;">"</span><span style="color: #569cd6;">INSERT</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">INTO</span><span style="color: #ce9178;"> students (fullname,course,email) </span><span style="color: #569cd6;">VALUES</span><span style="color: #ce9178;"> ('</span><span style="color: #9cdcfe;">$fullname</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$course</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$email</span><span style="color: #ce9178;">')</span><span style="color: #ce9178;">"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$result</span> = <span style="color: #dcdcaa;">mysqli_query</span>(<span style="color: #9cdcfe;">$conn</span>, <span style="color: #9cdcfe;">$query</span>); </div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$result</span>) </div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Data Inserted Successfully!"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; } </div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">else</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Data Not Inserted!. Error: "</span> . <span style="color: #9cdcfe;">$sql</span> . <span style="color: #ce9178;">""</span> . <span style="color: #dcdcaa;">mysqli_error</span>(<span style="color: #9cdcfe;">$conn</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; }</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p><p>That's it. We successfully stored the Data.</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php/create-table-in-dabatabase-using-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php/fetch-data-from-database-in-php-mysql') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
