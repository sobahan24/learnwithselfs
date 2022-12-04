@extends('layouts.master')

@section('title')
    Logout System | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_admin_panel.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Part 9-Admin Panel(Logout): Logout System with Session Destroy in php</h1>
                        </div>
                        <div class="description py-3">
                            <p><b>Step 1: </b>Create a page and paste the below code where you want to set the Logout Button :</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span>&nbsp;<span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">"logout.php"</span>&nbsp;<span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span>&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">button</span>&nbsp;<span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span>&nbsp;<span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"logout_btn"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn&nbsp;btn-primary"</span><span style="color: #808080;">&gt;</span>Logout<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">button</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>Step&nbsp;2:&nbsp;Create&nbsp;a&nbsp;page&nbsp;with&nbsp;the&nbsp;name&nbsp;logout.php&nbsp;and&nbsp;paste&nbsp;the&nbsp;below&nbsp;code.</div><div><span style="color: #569cd6;">&lt;?php</span></div><div><span style="color: #dcdcaa;">session_start</span>();</div><br><div><span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">isset</span>(<span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'logout_btn'</span>]))</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">session_destroy</span>();</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">unset</span>(<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'username'</span>]);</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Location:&nbsp;login.php'</span>);</div><div>}</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-admin-panel/login-system-in-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-admin-panel/create-multi-login-user-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.php_admin_panel.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
