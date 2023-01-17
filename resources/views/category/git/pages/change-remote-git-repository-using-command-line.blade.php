@extends('layouts.master')

@section('title')
    Git | Change Remote Repository  | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to change remote git repository using command line</h1>
                    </div>
                    <div class="description py-3">
                        <h3>How to change remote git repository using command line</h3><p>In this article, we will be learning about how to change remote git repository using command line. Which means&nbsp;How do I rename a Git repository as simple?</p><p>So, Let's get started with it:</p><p><br></p><p><b>Step 1:</b> Let's check current remote git repository name as follows:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: &quot;Fira Code Retina&quot;, &quot;Droid Sans Mono&quot;, monospace, monospace, &quot;Droid Sans Fallback&quot;; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ git remote -v</div></div><p>Output:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: &quot;Fira Code Retina&quot;, &quot;Droid Sans Mono&quot;, monospace, monospace, &quot;Droid Sans Fallback&quot;; font-size: 14px; line-height: 19px; white-space: pre;"><div><font color="#d4d4d4" style="background-color: rgb(33, 33, 33);">HP</font><span style="background-color: rgb(33, 33, 33); color: rgb(197, 134, 192);">@HP-PC</span><font color="#d4d4d4" style="background-color: rgb(33, 33, 33);"> MINGW64 </font><font color="#ffff00" style="background-color: rgb(33, 33, 33);">/c/xampp/htdocs/project</font>  </div><div>$ git remote -v  </div><div>  origin  git@gitlab.com:user/repository1.<span style="color: #dcdcaa;">git</span> (fetch)</div><div>  origin  git@gitlab.com:user/repository1.<span style="color: #dcdcaa;">git</span> (push)</div></div><p>if you use HTTPS URL repository link, you will have to provide username and password with it.</p><p><b><br></b></p><p><b>Step 2:</b> Now, lets change the remote git repository using the command line.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: &quot;Fira Code Retina&quot;, &quot;Droid Sans Mono&quot;, monospace, monospace, &quot;Droid Sans Fallback&quot;; font-size: 14px; line-height: 19px; white-space: pre;">$ git remote set-url origin git@gitlab.com:user/repository2.git</div><p>if you use HTTPS URL remote repository link, then you will be asked to provide the username and password.&nbsp;</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/add-ssh-key-in-gitlab') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.git.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
