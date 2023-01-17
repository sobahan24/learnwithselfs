@extends("layouts.master")

@section('title')
PHP | Export mySQL Data | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to Export MySQL data to excel sheet in PHP</h1>
                        </div>
                        <div class="description py-3">
                            <h3><b>How to Export MySQL data to excel sheet in PHP</b></h3><p></p><p>In this article, you will learn how to export mysql data from database to excel sheet in php. Export data to excel in php.</p><p>So guys, to export data to excel sheet using php, we need to create a html form and submit the form request with post method which will be downloading the file Xlsx, Xls, Csv using code. Let's get started:</p><p>We will be using Bootstrap 5 to design the FORM or user interface.</p><p><b>Step 1:</b> Download/Install the Package (phpSpreadSheet): </p><p>Let's install via composer, open your terminal from your application root directory:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style="color: rgb(33, 37, 41);"><font color="#9c00ff">HP@HP-PC MINGW64</font><font color="#d4d4d4"> </font><font color="#ffff00">/c/xampp/htdocs/php-excel</font></div><div>$ composer require phpoffice/phpspreadsheet</div></div><p>After successful installation of this package, you will find few files in your application like vendor, composer.json, etc.</p><p><br></p><p><b>Step 2:</b> Create a <b>index.php</b> file and paste the below form:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span> <span style="color: #dcdcaa;">session_start</span>(); <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div><span style="color: #808080;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span> <span style="color: #9cdcfe;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span> <span style="color: #9cdcfe;">lang</span>=<span style="color: #ce9178;">"en"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">charset</span>=<span style="color: #ce9178;">"UTF-8"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">http-equiv</span>=<span style="color: #ce9178;">"X-UA-Compatible"</span> <span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"IE=edge"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"viewport"</span> <span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"width=device-width, initial-scale=1.0"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>How to Export Data from database in excel sheet using PHP<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">link</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"</span> <span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; </div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"container"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"row"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"col-md-12 mt-4"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>]))</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"&lt;h4&gt;"</span>.<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>].<span style="color: #ce9178;">"&lt;/h4&gt;"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">unset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card mt-5"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-header"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span>How to Export Data from database in excel sheet using PHP<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h4</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"card-body"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">"code.php"</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">select</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"export_file_type"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"form-control"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">option</span> <span style="color: #9cdcfe;">value</span>=<span style="color: #ce9178;">"xlsx"</span><span style="color: #808080;">&gt;</span>XLSX<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">option</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">option</span> <span style="color: #9cdcfe;">value</span>=<span style="color: #ce9178;">"xls"</span><span style="color: #808080;">&gt;</span>XLS<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">option</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">option</span> <span style="color: #9cdcfe;">value</span>=<span style="color: #ce9178;">"csv"</span><span style="color: #808080;">&gt;</span>CSV<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">option</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">select</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"export_excel_btn"</span> <span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn btn-primary mt-3"</span><span style="color: #808080;">&gt;</span>Export<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div><p><b><br></b></p><p><b>Step 3:</b> Create a table named <b>students </b>in your database as follows:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">CREATE</span> <span style="color: #569cd6;">TABLE</span> students (</div><div>&nbsp; &nbsp; id <span style="color: #569cd6;">INT</span>(<span style="color: #b5cea8;">11</span>) AUTO_INCREMENT <span style="color: #569cd6;">PRIMARY</span> <span style="color: #569cd6;">KEY</span>,</div><div>&nbsp; &nbsp; fullname <span style="color: #569cd6;">VARCHAR</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; email <span style="color: #569cd6;">VARCHAR</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; phone <span style="color: #569cd6;">VARCHAR</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div><div>&nbsp; &nbsp; course <span style="color: #569cd6;">VARCHAR</span>(<span style="color: #b5cea8;">191</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span></div><div>)</div></div><p><b><br></b></p><p><b>Step 4:</b> Create a <b>code.php</b>&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">file</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;and paste the below code:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div><span style="color: #dcdcaa;">session_start</span>();</div><div><span style="color: #9cdcfe;">$con</span> = <span style="color: #dcdcaa;">mysqli_connect</span>(<span style="color: #ce9178;">'localhost'</span>,<span style="color: #ce9178;">'root'</span>,<span style="color: #ce9178;">''</span>,<span style="color: #ce9178;">'adminpanel'</span>);</div><br><div><span style="color: #c586c0;">require</span> <span style="color: #ce9178;">'vendor/autoload.php'</span>;</div><br><div><span style="color: #569cd6;">use</span> PhpOffice\PhpSpreadsheet\<span style="color: #4ec9b0;">Spreadsheet</span>;</div><div><span style="color: #569cd6;">use</span> PhpOffice\PhpSpreadsheet\Writer\<span style="color: #4ec9b0;">Xlsx</span>;</div><div><span style="color: #569cd6;">use</span> PhpOffice\PhpSpreadsheet\Writer\<span style="color: #4ec9b0;">Xls</span>;</div><div><span style="color: #569cd6;">use</span> PhpOffice\PhpSpreadsheet\Writer\<span style="color: #4ec9b0;">Csv</span>;</div><br><div><span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'export_excel_btn'</span>]))</div><div>{</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$file_ext_name</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'export_file_type'</span>];</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$fileName</span> = <span style="color: #ce9178;">"student-sheet"</span>;</div><br><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$student</span> = <span style="color: #ce9178;">"</span><span style="color: #569cd6;">SELECT</span><span style="color: #ce9178;"> </span>*<span style="color: #ce9178;"> </span><span style="color: #569cd6;">FROM</span><span style="color: #ce9178;"> students</span><span style="color: #ce9178;">"</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$query_run</span> = <span style="color: #dcdcaa;">mysqli_query</span>(<span style="color: #9cdcfe;">$con</span>, <span style="color: #9cdcfe;">$student</span>);</div><br><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">mysqli_num_rows</span>(<span style="color: #9cdcfe;">$query_run</span>) &gt; <span style="color: #b5cea8;">0</span>)</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$spreadsheet</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Spreadsheet</span>();</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span> = <span style="color: #9cdcfe;">$spreadsheet</span>-&gt;<span style="color: #dcdcaa;">getActiveSheet</span>();</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'A1'</span>, <span style="color: #ce9178;">'ID'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'B1'</span>, <span style="color: #ce9178;">'Full Name'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'C1'</span>, <span style="color: #ce9178;">'Email'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'D1'</span>, <span style="color: #ce9178;">'Phone'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'E1'</span>, <span style="color: #ce9178;">'Course'</span>);</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$rowCount</span> = <span style="color: #b5cea8;">2</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">foreach</span>(<span style="color: #9cdcfe;">$query_run</span> as <span style="color: #9cdcfe;">$data</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'A'</span>.<span style="color: #9cdcfe;">$rowCount</span>, <span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">'id'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'B'</span>.<span style="color: #9cdcfe;">$rowCount</span>, <span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">'fullname'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'C'</span>.<span style="color: #9cdcfe;">$rowCount</span>, <span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">'email'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'D'</span>.<span style="color: #9cdcfe;">$rowCount</span>, <span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">'phone'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$sheet</span>-&gt;<span style="color: #dcdcaa;">setCellValue</span>(<span style="color: #ce9178;">'E'</span>.<span style="color: #9cdcfe;">$rowCount</span>, <span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">'course'</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$rowCount</span>++;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$file_ext_name</span> == <span style="color: #ce9178;">'xlsx'</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$writer</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Xlsx</span>(<span style="color: #9cdcfe;">$spreadsheet</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$final_filename</span> = <span style="color: #9cdcfe;">$fileName</span>.<span style="color: #ce9178;">'.xlsx'</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">elseif</span>(<span style="color: #9cdcfe;">$file_ext_name</span> == <span style="color: #ce9178;">'xls'</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$writer</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Xls</span>(<span style="color: #9cdcfe;">$spreadsheet</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$final_filename</span> = <span style="color: #9cdcfe;">$fileName</span>.<span style="color: #ce9178;">'.xls'</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">elseif</span>(<span style="color: #9cdcfe;">$file_ext_name</span> == <span style="color: #ce9178;">'csv'</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$writer</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Csv</span>(<span style="color: #9cdcfe;">$spreadsheet</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$final_filename</span> = <span style="color: #9cdcfe;">$fileName</span>.<span style="color: #ce9178;">'.csv'</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #6a9955;">// $writer-&gt;save($final_filename);</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Content-Disposition: attactment; filename="'</span>.<span style="color: #dcdcaa;">urlencode</span>(<span style="color: #9cdcfe;">$final_filename</span>).<span style="color: #ce9178;">'"'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$writer</span>-&gt;<span style="color: #dcdcaa;">save</span>(<span style="color: #ce9178;">'php://output'</span>);</div><br><div>&nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #c586c0;">else</span></div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'message'</span>] = <span style="color: #ce9178;">"No Record Found"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Location: index.php'</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">exit</span>(<span style="color: #b5cea8;">0</span>);</div><div>&nbsp; &nbsp; }</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php/import-excel-file-into-mysql-database-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php/create-dynamic-sql-insert-query-in-phpmysql') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
