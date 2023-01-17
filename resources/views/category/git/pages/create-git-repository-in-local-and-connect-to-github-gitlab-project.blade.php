@extends('layouts.master')

@section('title')
    Git | Create Repository | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to create git repository in local and connect to Git project</h1>
                    </div>
                    <div class="description py-3">
                        <h2><b>How to create git repository in local and connect to Github, Gitlab, Bitbucket project.</b></h2><p>In this post, we will be learning about how to create a git repository in localhost and connect to gitlab, github project.</p><p><b>Step 1:</b> Let's create a git repository by following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;init</div></div><p><br></p><p><b>Step 2:</b> Let's add our localhost project file into the this git initialized by following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;add&nbsp;.</div></div><p>this above <b>git add .</b> command, which has a dot at last (git add <b>.</b>) where this dot - (.) means all files to added into git init repo.</p><p><b>Step 3:</b>&nbsp;After successfully adding files into git repo, now lets commit the file <b>git commit</b> with the message <b>-m.</b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;commit&nbsp;-m&nbsp;"First&nbsp;Commit"</div></div><p><br></p><p><b>Step 4:</b>&nbsp;Now, you have no repository to store or push your local git repository, so go to your Gitlab and create a project <b>example: myproject</b>&nbsp;and let's come to our terminal of your project, let's <b>add the gitlab project repository path in local </b>by following command:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;remote&nbsp;add&nbsp;origin&nbsp;git@gitlab.com:username/myproject.git</div></div><p><b><br></b></p><p><b>Step 5: </b>After successfully running the above command, you have setup the Git repo and now you can push the files. but before that lets check repository which we added is correct or not.? by the following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;remote&nbsp;-v</div></div><p>Now, you have got your repository result.</p><p><b>Step 6:</b>&nbsp;Finally, we have correctly setup with it and let's push the file into our <b>myproject</b> gitlab repository into our default branch named <b style="font-style: italic;">master&nbsp;&nbsp;</b>by the following command:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;push&nbsp;origin&nbsp;master</div></div><p>This last word named <b>master. </b>This is a branch in your gitlab repository. so you have to push the file in your working branch </p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>Example:</div><div>$&nbsp;git&nbsp;push&nbsp;origin&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #f44747;">master</span><span style="color: #808080;">&gt;</span>&nbsp;or&nbsp;<span style="color: #808080;">&lt;</span><span style="color: #f44747;">your_branch</span><span style="color: #808080;">&gt;</span></div></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/get-the-current-branch-name-in-git') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/create-a-branch-in-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
