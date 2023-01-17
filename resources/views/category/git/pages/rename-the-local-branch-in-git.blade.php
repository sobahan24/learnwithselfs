@extends('layouts.master')

@section('title')
    Git | Rename Branch | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to Rename a Git Branch</h1>
                    </div>
                    <div class="description py-3">
                        <h3><b>Git Rename Branch</b></h3><p><span style="font-size: 1rem;">To rename a Git branch, run the following command: git branch -m &lt;old&gt; &lt;new&gt;.</span><span style="font-size: 1rem;">This will change the name of the branch you are viewing to the new name you specify.&nbsp;</span><span style="font-size: 1rem;">&nbsp;The&nbsp;</span><span style="font-size: 1rem;">“old” is the name of the branch you want to rename and “new” is the new name for the branch.</span></p><p><span style="font-size: 1rem;"><b>Command:</b></span></p><p class="alert alert-warning">$ git branch -m &lt;old&gt; &lt;new&gt;<br></p><div><br></div><p><span style="font-size: 1rem;"> </span></p><p><span style="font-size: 1rem;"><b>Note : </b>You don't need to specify the old branch name if you want to rename the current branch you are in.</span></p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div style=""><font color="#d4d4d4">HP@HP-PC&nbsp;MINGW64&nbsp;</font><font color="#ffff00">/c/xampp/htdocs/myproject</font><font color="#d4d4d4">&nbsp;</font><font color="#6badde">(my-branch-name)</font></div><div style="color: rgb(212, 212, 212);">$&nbsp;git&nbsp;branch&nbsp;-m&nbsp;my-new-branch-name</div></div><p><span style="font-size: 1rem;">after running the above command, your branch will look like shown below:</span></p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><font color="#d4d4d4">HP@HP-PC&nbsp;MINGW64&nbsp;</font><font color="#ffff00">/c/xampp/htdocs/myproject</font><font color="#d4d4d4">&nbsp;</font><font color="#6badde">(my-new-branch-name)</font></div><div style="color: rgb(212, 212, 212);">$&nbsp;</div></div><p><span style="font-size: 1rem;"><br></span></p><p><span style="font-size: 1rem;"><b>To Check all your branch List you created:</b></span></p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><font color="#d4d4d4">HP@HP-PC&nbsp;MINGW64&nbsp;</font><font color="#ffff00">/c/xampp/htdocs/myproject</font><font color="#d4d4d4">&nbsp;</font><font color="#6badde">(my-branch-name)</font></div><div style="color: rgb(212, 212, 212);">$&nbsp;git&nbsp;branch</div></div><p><b style="font-size: 1rem;"><br></b></p><p><b style="font-size: 1rem;"><br></b></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/add-ssh-key-in-gitlab') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/move-to-previous-working-git-branch') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
