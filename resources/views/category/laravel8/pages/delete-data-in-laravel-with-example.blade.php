@extends('layouts.master')

@section('title')
    Laravel 8 | Delete Data | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel8.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>How to delete data from database using Eloquent Modal</h1>
                        </div>
                        <div class="description py-3">
                            <p>In this post, you will be learning about how to delete data from database using Eloquent Model in Laravel 8, where we will fetch the data in html table and create one simple Delete button with &lt;a&gt; tag and specifing the url or path to delete data with the following&nbsp;<span style="font-size: 1rem;">routes.</span></p><p>So guys, Lets get started.</p><p>Before starting, as we completed Creating of Laravel 8 Project, Database Connectivity, Insert data, Fetch data &amp; Edit and Update data in laravel and now Lets start with Deleting the data.</p><p><b>Step 1:</b> add below html table &lt;tr&gt; with &lt;a&gt; tag in your fetched record table as follows:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">td</span><span style="color: #808080;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #569cd6;">a</span>&nbsp;<span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"</span><span style="color: #dcdcaa;"><span>{</span><span>{</span></span><span style="color: #ce9178;">&nbsp;</span><span style="color: #dcdcaa;">url</span><span style="color: #ce9178;">('delete-student/'</span>.<span style="color: #9cdcfe;"><span>$</span>item</span>-&gt;<span style="color: #9cdcfe;">id</span><span style="color: #ce9178;">)&nbsp;</span><span style="color: #dcdcaa;"><span>}</span><span>}</span></span><span style="color: #ce9178;">"</span>&nbsp;<span style="color: #9cdcfe;">class</span>=<span style="color: #ce9178;">"btn&nbsp;btn-danger&nbsp;btn-sm"</span><span style="color: #808080;">&gt;</span>Delete<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">a</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">td</span><span style="color: #808080;">&gt;</span></div><div></div></div><p><b>Step 2:</b> Create a route in the following path <b><i>routes/web.php</i></b> as follows:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><div><span style="color: #569cd6;">use</span>&nbsp;Illuminate\Support\Facades\<span style="color: #4ec9b0;">Route</span>;</div><div><span style="color: #569cd6;">use</span>&nbsp;App\Http\Controllers\<span style="color: #4ec9b0;">StudentController</span>;</div><br><div><span style="color: #4ec9b0;">Route</span>::<span style="color: #dcdcaa;">delete</span>(<span style="color: #ce9178;">'delete-student/<span>{</span>id<span>}</span>'</span>,&nbsp;[<span style="color: #4ec9b0;">StudentController</span>::<span style="color: #569cd6;">class</span>,&nbsp;<span style="color: #ce9178;">'destroy'</span>]);</div></div><p><b>Step 3:</b> To delete the data, paste the below code in Controller as we created in <b>app/Http/Controllers/StudentController.php</b><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #569cd6;">namespace</span>&nbsp;<span style="color: #4ec9b0;">App\Http\Controllers</span>;</div><br><div><span style="color: #569cd6;">use</span>&nbsp;App\Models\<span style="color: #4ec9b0;">Student</span>;</div><div><span style="color: #569cd6;">use</span>&nbsp;Illuminate\Http\<span style="color: #4ec9b0;">Request</span>;</div><br><div><span style="color: #569cd6;">class</span>&nbsp;<span style="color: #4ec9b0;">StudentController</span>&nbsp;<span style="color: #569cd6;">extends</span>&nbsp;<span style="color: #4ec9b0;">Controller</span></div><div><span>{</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #569cd6;">public</span>&nbsp;<span style="color: #569cd6;">function</span>&nbsp;<span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;"><span>$</span>id</span>)</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span>{</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;"><span>$</span>student</span>&nbsp;=&nbsp;<span style="color: #4ec9b0;">Student</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #9cdcfe;"><span>$</span>id</span>);</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9cdcfe;"><span>$</span>student</span>-&gt;<span style="color: #dcdcaa;">delete</span>();</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c586c0;">return</span>&nbsp;<span style="color: #dcdcaa;">redirect</span>()-&gt;<span style="color: #dcdcaa;">back</span>()-&gt;<span style="color: #dcdcaa;">with</span>(<span style="color: #ce9178;">'status'</span>,<span style="color: #ce9178;">'Student&nbsp;Deleted&nbsp;Successfully'</span>);</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span></div><div><span>}</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/laravel-8/edit-update-data-in-laravel') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/laravel-8/login-registration-system-tutorial') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.laravel8.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
