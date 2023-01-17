@extends('layouts.master')

@section('title')
    Git | Get Current Branch | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>How to get the current branch name in Git ?</h1>
    </div>
    <div class="description py-3">
        <h2><b>How to get the current branch name in Git ?</b></h2><p>In this post, we will be learning how to determine or get the name of the current branch in Git.<br></p><p>So, there are several ways to get the name of the current branch in Git:</p><p><b>Method 1:</b>&nbsp;git branch with no arguments displays the <b>Current branch </b>marked with an <b>asterisk (*)</b> in front of it:</p><p>Command:&nbsp;</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;branch<br></div></div><p>after typing the above command you will get the following result:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); line-height: 19px;"><div style=""><font face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;"><font color="#d4d4d4">HP@HP-PC MINGW64 </font><font color="#ffff00">/c/xampp/htdocs/project</font><font color="#d4d4d4"><br></font></span></font></div><font color="#d4d4d4" face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">$ git branch
* your_branch_name</span></font></div><p><b>Method 2:</b>&nbsp;We will show the <i><b>current branch</b></i> name directly without any argument by using the following command:</p><p>Command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;branch&nbsp;--show-current</div></div><p>after typing the above command you will get the following result:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); line-height: 19px;"><div><font color="#d4d4d4" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">HP@HP-PC MINGW64 </font><font color="#ffff00" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">/c/xampp/htdocs/project</font><br></div><font color="#d4d4d4" face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">$ git branch </span></font><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">--show-current
</span><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">  your_branch_name</span></div><p><b><br></b></p><p><b>Method 3:</b>&nbsp;this is another method of showing that how to find which git branch I am on, so you will get directly the branch name using the following command:</p><p>Command: <b>(&nbsp;<span style="color: rgb(36, 39, 41); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 15px;">Git 2.22 and above )</span></b></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;name-rev&nbsp;--name-only&nbsp;HEAD</div></div><p>after typing the above command you will get the following result:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); line-height: 19px;"><div><font color="#d4d4d4" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">HP@HP-PC MINGW64 </font><font color="#ffff00" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">/c/xampp/htdocs/project</font><br></div><font color="#d4d4d4" face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">$ git </span></font><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">name-rev&nbsp;--name-only&nbsp;HEAD
</span><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">your_branch_name</span></div><p><b><br></b></p><p><b>Method 4:</b>&nbsp;how to see what branch you are on.! so you will get your branch name by the following command:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$&nbsp;git&nbsp;rev-parse&nbsp;--abbrev-ref&nbsp;HEAD</div></div><p>after typing the above command you will get the following result:</p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); line-height: 19px;"><div><font color="#d4d4d4" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">HP@HP-PC MINGW64 </font><font color="#ffff00" style="font-size: 14px; white-space: pre; font-family: Consolas, &quot;Courier New&quot;, monospace;">/c/xampp/htdocs/project</font><br></div><font color="#d4d4d4" face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">$ git </span></font><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">rev-parse&nbsp;--abbrev-ref&nbsp;HEAD
</span><span style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">  your_branch_name</span></div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/git/download-or-install-git') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/git/create-git-repository-in-local-and-connect-to-github-gitlab-project') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
