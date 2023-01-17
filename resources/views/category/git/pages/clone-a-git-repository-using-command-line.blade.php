@extends('layouts.master')

@section('title')
    Git | Clone Repository | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to clone a git repository using command line</h1>
                    </div>
                    <div class="description py-3">
                        <h2><b>How to clone a git repository using command line</b></h2><p>In this post, you will be learning how to clone a git repository using command line. </p><p>Basically clone git repository means that when you want to download an existing git repository to your local computer or system and can start working on it.</p><h3>Cloning a repository using the command line</h3><p>Go to your git&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">repository</span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">&nbsp;and copy the HTTPS repo link and paste in your <b>git clone command</b> as follows:</span></p><p><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><b>Syntax:</b></span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$ git clone {repository URL}</div><p><br></p><p>Example:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$ git clone https://github.com/my-project.git</div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/remove-or-delete-branch-from-git-repository') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/check-current-repository-name-using-command-line') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
