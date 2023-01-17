@extends("layouts.master")

@section('title')
PHP | Session Message | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to show Success Message / Flash message in PHP</h1>

                                                </div>

                        <div class="description py-3">
                            <p>In this article, we will learn how to show success message after completing a task. You will learn how to use sessions in php and use sessions to set the flash message and display them after success.</p><p class="alert alert-success"><b>Note : To use session in any page, we need to start the session on top of the page using the session_start();</b></p><p>After inserting / updating the data in the database, set the session message in a session variable as shown below:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span>&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">session_start</span>();</div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #6a9955;">//after&nbsp;insert&nbsp;or&nbsp;update&nbsp;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'status'</span>]&nbsp;=&nbsp;<span style="color: #ce9178;">"&lt;Type&nbsp;Your&nbsp;success&nbsp;message&nbsp;here&gt;"</span>;</div><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div><p>Now we have set the message and now paste the below code in the page where you want display the success message :</p><p class="alert alert-success"><b>Note : Import the Bootstrap v5 CSS and JS using the cdn link available on getboostrap.com, for good design.</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span>&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">session_start</span>();</div><div>&nbsp;&nbsp;&nbsp;&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'status'</span>]))</div><div>&nbsp;&nbsp;&nbsp;&nbsp;{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">div</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"alert&nbsp;alert-warning&nbsp;alert-dismissible&nbsp;fade&nbsp;show"</span>&nbsp;<span style="color: #9cdcfe;">role</span>=<span style="color: #ce9178;">"alert"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">strong</span><span style="color: #808080;">&gt;</span>Hey&nbsp;!<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">strong</span><span style="color: #808080;">&gt;</span>&nbsp;<span style="color: #569cd6;">&lt;?=</span>&nbsp;<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'status'</span>];&nbsp;<span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"button"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn-close"</span>&nbsp;<span style="color: #9cdcfe;">data-bs-dismiss</span>=<span style="color: #ce9178;">"alert"</span>&nbsp;<span style="color: #9cdcfe;">aria-label</span>=<span style="color: #ce9178;">"Close"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">div</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #569cd6;">&lt;?php</span>&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">unset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'status'</span>]);</div><div>&nbsp;&nbsp;&nbsp;&nbsp;}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('php/php-for-loop') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('php/create-database-using-php-mysql') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
