@extends('layouts.master')

@section('title')
    Git | Create Branch | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to create a branch in git repository using command line</h1>
                    </div>
                    <div class="description py-3">
                        <h4><b>How to create a branch in git repository in gitlab using command line</b></h4><p>In this post, we will be learning about how to make a branch in git repository so lets begin with it.</p><p>First, we need check that in which repository or branch we are working on it. So to check repository and branch use following commads:</p><p>1. To check your git repository name:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;remote&nbsp;-v</div></div><p><br></p><p>2. To check your branch in git repositry: you will be able to see all your branches by following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;branch&nbsp;--all</div></div><p><span style="font-size: 1rem;">After checking all the thing that you are in a right git repository and branch, Lets begin with creating a branch in gitlab</span></p><p><br></p><p><b>Step 1: </b>Type the below command to <b>Create a branch</b> in <b>repository </b>in gitlab by following:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style=""><font color="#d4d4d4">$&nbsp;git&nbsp;checkout&nbsp;-b&nbsp;</font><font color="#ff0000">your_new_branch</font></div></div><p>So, here in this command line <b>-b</b> is the main thing which creates your new branch into the repository.</p><p><br></p><p><b>Step 2:</b> Check your branch by the above <b>Point 2 </b>command, so that you can be in a correct branch. If you are not into your correct branch, follow the below command:</p><p>How to <b>Move or Change </b>from <b>one branch </b>to <b>another branch </b>by following command:&nbsp;</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style=""><font color="#d4d4d4">$&nbsp;git&nbsp;checkout&nbsp;</font><font color="#ff0000">your_branch</font></div></div><p><br></p><p><b>Step 3:</b> After successfully creating a new branch and moving into your new branch. Let's <b>push </b>your files in <b>new branch </b>by following below commands:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><span style="color: #6a9955;">//To&nbsp;Add&nbsp;all&nbsp;the&nbsp;Files
                </span><span style="color: rgb(212, 212, 212); background-color: rgb(33, 33, 33);">$&nbsp;git&nbsp;add&nbsp;.</span>

                <span style="color: rgb(106, 153, 85); background-color: rgb(33, 33, 33);">//&nbsp;To&nbsp;commit&nbsp;with&nbsp;message
                </span><span style="color: rgb(212, 212, 212); background-color: rgb(33, 33, 33);">$&nbsp;git&nbsp;commit&nbsp;-m&nbsp;</span><span style="background-color: rgb(33, 33, 33); color: rgb(206, 145, 120);">"My&nbsp;New&nbsp;Branch&nbsp;Commit"
                </span><font color="#d4d4d4">
                </font><span style="color: rgb(106, 153, 85); background-color: rgb(33, 33, 33);">//&nbsp;To&nbsp;push&nbsp;the&nbsp;file&nbsp;into&nbsp;repo
                </span><font color="#d4d4d4" style="background-color: rgb(33, 33, 33);">$&nbsp;git&nbsp;push&nbsp;origin&nbsp;</font><font color="#ff0000" style="background-color: rgb(33, 33, 33);">your_branch</font><font color="#d4d4d4"><br></font></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/create-git-repository-in-local-and-connect-to-github-gitlab-project') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/remove-or-delete-branch-from-git-repository') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
