@extends('layouts.master')

@section('title')
    PHP Solutions | CRUD | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_solutions.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>PHP CRUD : How to Insert data into database in PHP MySQL</h1>
                    </div>
 
                    <div class="description py-3">
                        <h3><b>Insert data into database in php mysql&nbsp;</b></h3><p>In this post, you will be learning about how to insert data into database in php mysql, so, lets create a table named student to insert data in mysql using php as given in <b>STEP 1</b>.&nbsp;</p><p>We are using Bootstrap v4 to design the user interface like forms and table.</p><p><span style="font-size: 1rem;">So, Let's get started: (To insert data into database in php mysql).</span></p><p><span style="font-size: 1rem;"><b>Step 1:</b>&nbsp;</span><span style="font-family: Poppins, sans-serif; font-size: 17px;">Create a database phpcrud and in that create a table named&nbsp;</span><span style="font-weight: bolder; font-family: Poppins, sans-serif; font-size: 17px;">student :&nbsp;</span><br></p><div class="alert funda-bg" style="width: fit-content; min-width: 100%; background-color: rgb(30, 30, 30); color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>CREATE&nbsp;TABLE&nbsp;<span style="color: rgb(220, 220, 170);">student</span>&nbsp;(<br></div><div>&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;<span style="color: rgb(86, 156, 214);">INT</span>(<span style="color: rgb(181, 206, 168);">6</span>)&nbsp;UNSIGNED&nbsp;AUTO_INCREMENT&nbsp;PRIMARY&nbsp;KEY,</div><div>&nbsp;&nbsp;&nbsp;&nbsp;fname&nbsp;<span style="color: rgb(220, 220, 170);">VARCHAR</span>(<span style="color: rgb(181, 206, 168);">30</span>)&nbsp;NOT&nbsp;<span style="color: rgb(86, 156, 214);">NULL</span>,</div><div>&nbsp;&nbsp;&nbsp;&nbsp;lname&nbsp;<span style="color: rgb(220, 220, 170);">VARCHAR</span>(<span style="color: rgb(181, 206, 168);">30</span>)&nbsp;NOT&nbsp;<span style="color: rgb(86, 156, 214);">NULL</span>,</div><div>&nbsp;&nbsp;&nbsp;&nbsp;contact&nbsp;<span style="color: rgb(220, 220, 170);">VARCHAR</span>(<span style="color: rgb(181, 206, 168);">50</span>)&nbsp;NOT&nbsp;<span style="color: rgb(86, 156, 214);">NULL</span>,</div><div>)</div></div><p style="font-size: 17px; line-height: 2;"><b>Step 2:</b>&nbsp;<span style="font-family: Poppins, sans-serif;">Create a file named <b>insertdata.php </b>and we will use bootstrap to design the form and store data through that html form, where code given below:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span>&nbsp;<span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span>&nbsp;<span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span>&nbsp;<span style="color: #9cdcfe;">charset</span>=<span style="color: #ce9178;">"UTF-8"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"viewport"</span>&nbsp;<span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"width=device-width,&nbsp;initial-scale=1.0"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span>&nbsp;<span style="color: #9cdcfe;">http-equiv</span>=<span style="color: #ce9178;">"X-UA-Compatible"</span>&nbsp;<span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"ie=edge"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">link</span>&nbsp;<span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span>&nbsp;<span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>Insert Data into Database in PHP<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"jumbotron"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"row"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"col-md-12"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span>&nbsp;PHP&nbsp;-&nbsp;CRUD&nbsp;:&nbsp;ADD&nbsp;Data&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">hr</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span>&nbsp;<span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">""</span>&nbsp;<span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"post"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-group"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span>&nbsp;<span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>&nbsp;First&nbsp;Name&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"fname"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span>&nbsp;<span style="color: #9cdcfe;">placeholder</span>=<span style="color: #ce9178;">"Enter&nbsp;First&nbsp;Name"</span>&nbsp;<span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-group"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span>&nbsp;<span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>&nbsp;Last&nbsp;Name&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"lname"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span>&nbsp;<span style="color: #9cdcfe;">placeholder</span>=<span style="color: #ce9178;">"Enter&nbsp;Last&nbsp;Name"</span>&nbsp;<span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-group"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">label</span>&nbsp;<span style="color: #9cdcfe;">for</span>=<span style="color: #ce9178;">""</span><span style="color: #808080;">&gt;</span>&nbsp;Contact&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">label</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"text"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"contact"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span>&nbsp;<span style="color: #9cdcfe;">placeholder</span>=<span style="color: #ce9178;">"Enter&nbsp;Contact"</span>&nbsp;<span style="color: #9cdcfe;">required</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"insert"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn&nbsp;btn-primary"</span><span style="color: #808080;">&gt;</span>&nbsp;Save&nbsp;Data&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">a</span>&nbsp;<span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"index.php"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn&nbsp;btn-danger"</span><span style="color: #808080;">&gt;</span>&nbsp;BACK&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">a</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p style="font-size: 17px; line-height: 2;">Now, we have successfully created the HTML FORM using Bootstrap to insert data in STEP 2, so guys now lets write the code to insert data into database in php mysql in the same file just you created. (<b>insertdata.php</b>). </p><p style="font-size: 17px; line-height: 2;">Paste the below given code at the TOP of the FILE named (<b>insertdata.php</b>)</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #9cdcfe;">$connection</span>&nbsp;=&nbsp;<span style="color: #dcdcaa;">mysqli_connect</span>(<span style="color: #ce9178;">"localhost"</span>,<span style="color: #ce9178;">"root"</span>,<span style="color: #ce9178;">""</span>);</div><div><span style="color: #9cdcfe;">$db</span>&nbsp;=&nbsp;<span style="color: #dcdcaa;">mysqli_select_db</span>(<span style="color: #9cdcfe;">$connection</span>,&nbsp;<span style="color: #ce9178;">'phpcrud'</span>);</div><br><div><span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'insert'</span>]))</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$fname</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'fname'</span>];</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$lname</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'lname'</span>];</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$contact</span>&nbsp;=&nbsp;<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'contact'</span>];</div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$query</span>&nbsp;=&nbsp;<span style="color: #ce9178;">"</span><span style="color: #569cd6;">INSERT</span><span style="color: #ce9178;">&nbsp;</span><span style="color: #569cd6;">INTO</span><span style="color: #ce9178;">&nbsp;student(`fname`,`lname`,`contact`)&nbsp;</span><span style="color: #569cd6;">VALUES</span><span style="color: #ce9178;">&nbsp;('</span><span style="color: #9cdcfe;">$fname</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$lname</span><span style="color: #ce9178;">','</span><span style="color: #9cdcfe;">$contact</span><span style="color: #ce9178;">')</span><span style="color: #ce9178;">"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$query_run</span>&nbsp;=&nbsp;<span style="color: #dcdcaa;">mysqli_query</span>(<span style="color: #9cdcfe;">$connection</span>,&nbsp;<span style="color: #9cdcfe;">$query</span>);</div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$query_run</span>)</div><div>&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">'&lt;script&gt;&nbsp;alert("Data&nbsp;Saved");&nbsp;&lt;/script&gt;'</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">else</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">'&lt;script&gt;&nbsp;alert("Data&nbsp;Not&nbsp;Saved");&nbsp;&lt;/script&gt;'</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;}</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/php-solutions/php-crud-fetch-data-in-php-mysql') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('php-solutions/php-crud-edit-and-update-data-into-database-in-php-mysql') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.php_solutions.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
