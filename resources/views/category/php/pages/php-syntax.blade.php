@extends("layouts.master")

@section('title')
PHP | Syntax | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP Basic Syntax</h1>
                        </div>
                        <div class="description py-3">
                            <p>A PHP code starts with <b>" &lt;?php "</b> and ends with <b>" ?&gt; "</b></p><p>It can be placed anywhere in between the file/document.</p><p>For Example:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><br><div><span style="color: rgb(106, 153, 85);">//Your&nbsp;Code&nbsp;here</span></div><br><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div></div><p><span style="font-size: 1rem;">So a basic hello world code would look like:</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">echo</span>&nbsp;<span style="color: rgb(206, 145, 120);">"hello&nbsp;world"</span>;</div><br><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div></div><p><span style="font-size: 1rem;">A php file will be saved with a ".php" extension.&nbsp;</span><br></p><p>Normally a php file contains Html, CSS and&nbsp; php scripting code.</p><p>In simple language, HTML and CSS is the design what we see on the web browser. PHP code is responsible for carrying out tasks such as storing and retrieving the data in and from database, performing many other tasks which we will discuss in the further chapters.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">html</span><span style="color: rgb(128, 128, 128);">&gt;</span></div><div><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">body</span><span style="color: rgb(128, 128, 128);">&gt;</span></div><br><div><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">p</span><span style="color: rgb(128, 128, 128);">&gt;</span>Hello&nbsp;world&nbsp;in&nbsp;HTML<span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">p</span><span style="color: rgb(128, 128, 128);">&gt;</span></div><br><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><div><span style="color: rgb(220, 220, 170);">echo</span>&nbsp;<span style="color: rgb(206, 145, 120);">"Hello&nbsp;World&nbsp;in&nbsp;PHP"</span>;</div><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div><br><div><span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">body</span><span style="color: rgb(128, 128, 128);">&gt;</span></div><div><span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">html</span><span style="color: rgb(128, 128, 128);">&gt;</span></div></div><p><b style="font-size: 1rem;">Not Case Sensitive</b><br></p><p>PHP is not a Case Sensitive language which means any inbuilt functions or user defined funtions can be written and called in upper case or lower case.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">echo</span>&nbsp;<span style="color: rgb(206, 145, 120);">"hello"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">ECHO</span>&nbsp;<span style="color: rgb(206, 145, 120);">"hello"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">eCho</span>&nbsp;<span style="color: rgb(206, 145, 120);">"hello"</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">eCHO</span>&nbsp;<span style="color: rgb(206, 145, 120);">"hello"</span>;</div><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div><br></div><p><span style="font-size: 1rem;">All the above statements are correct, as PHP is not a case sensitive language.</span><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-introduction') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-comments') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
