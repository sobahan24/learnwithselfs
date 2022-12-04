@extends('layouts.master')

@section('title')
    Laravel 5.8 | Disable Register Route | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel5.partials.Sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to disable register route and other Auth route in laravel 5.7  +</h1>
                        </div>

                        <div class="description py-3">
                            <h4>How to disable register route and other Auth route in laravel 5.7&nbsp; +</h4><p>In this tutorial, we'll see how we can disable and remove the register route in laravel as follows:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #6a9955;">Auth::routes();</span></div><div><span style="color: #4ec9b0;">Auth</span>::<span style="color: #dcdcaa;">routes</span>([</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">'register'</span>&nbsp;=&gt;&nbsp;<span style="color: #569cd6;">false</span>,&nbsp;<span style="color: #6a9955;">//&nbsp;Register&nbsp;Routes...</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">'reset'</span>&nbsp;=&gt;&nbsp;<span style="color: #569cd6;">false</span>,&nbsp;<span style="color: #6a9955;">//&nbsp;Reset&nbsp;Password&nbsp;Routes...</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">'verify'</span>&nbsp;=&gt;&nbsp;<span style="color: #569cd6;">false</span>,&nbsp;<span style="color: #6a9955;">//&nbsp;Email&nbsp;Verification&nbsp;Routes...</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">'login'</span>&nbsp;=&gt;&nbsp;<span style="color: #569cd6;">true</span>,&nbsp;<span style="color: #6a9955;">//&nbsp;Login&nbsp;enabled</span></div><div>]);</div></div><p><br></p><p>So, in this format we can disable register route and other routes too which comes in Auth in Laravel.</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-5-8/create-database-seeder-in-laravel') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-5-8/create-database-error-page-in-laravel') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @include('category.laravel5.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
