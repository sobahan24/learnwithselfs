@extends('layouts.master')

@section('title')
    Git | Delete Branch | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to remove or delete branch from git repository using command line</h1>
                    </div>
                    <div class="description py-3">
                        <h4><b>How to remove or delete branch from git repository using command line</b></h4><p>In this post, we will be learning about how to delete a branch from git repository using command line.</p><p><b>Step 1</b>: Let's check the branch first, which we want to delete the branch from git repository by following:&nbsp;</p><p>Checking the Branch:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;branch&nbsp;--all</div></div><p><br></p><p><b>Step 2:</b> Now, check your correct branch which you want to delete it and lets delete the branch by following command:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style=""><font color="#d4d4d4">$&nbsp;git&nbsp;push&nbsp;origin&nbsp;--delete&nbsp;</font><font color="#ff0000">your_branch_name</font></div></div><p>In this command <b>--delete</b> is the main code for deleting the branch from your git repository by calling its branch name.</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/create-a-branch-in-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/clone-a-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
