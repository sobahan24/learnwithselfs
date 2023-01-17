@extends('layouts.master')

@section('title')
    Git | Install | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to download or install Git</h1>
                    </div>

                    <div class="description py-3">
                        <h3>How to download or install Git</h3><p><span style="color: rgb(0, 0, 0); font-family: SF-Pro-Display, Roboto, sans-serif; font-size: 24px; font-weight: 900;">Download Git for Windows</span></p><p><b>Step 1:</b> Goto the official Git website: <a href="https://git-scm.com/downloads" target="_blank">https://git-scm.com/downloads</a></p><p><b>Step 2:</b>&nbsp;Click the download link for Windows and allow the download to complete.</p><p><b>Step 3:</b> After downloading the file successfully, goto its location and extract the File &amp; now you will see the Git file (Installer). Double click on it and start the installation &amp; complete as per your need.</p><p><b>Step 4:</b> Now your Git is installed successfully. Press your <b>Windows Key button</b> and search <b>Git Bash </b>and check the git is installed or not on your machine.</p><p><b>Step 5: </b>Check your Git Version:&nbsp;</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git --version</span></p></div><p><b>Step 6:</b> Now you configure your git credentials to get started with your github or gitlab or bitbucket etc..</p><p><br></p><p>Short Cuts: (Git Cheat Sheet) -</p><p><span style="font-size: 1rem;">1. Get all the branches :&nbsp;</span></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git fetch -all</span></p></div><p><span style="font-size: 1rem;"><br></span></p><p><span style="font-size: 1rem;">2. Check in which branch you are and how many branches are there :</span></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git branch</span></p><p class="mb-0 text-white"><span style="font-size: 1rem;">$&nbsp; &nbsp;git branch -all</span><span style="font-size: 1rem; background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);">l</span><br></p></div><p><br></p><p>3. Check to Current Branch : $ git branch --show-current</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git branch -show-current</span></p></div><p><br></p><p>4. Check your current repository name :</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git remote -v</span></p></div><p><br></p><p>5. Check your current repository full detailed status (Username &amp; password will be asked):</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git remote show origin</span></p></div><p><br></p><p>6. How to add Git or Re-initialise Git :</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git init</span></p></div><p><br></p><p><span style="font-size: 1rem;">7. If you want to change the repository from one to another :</span><br></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git remote add origin your_repo_path</span></p></div><p>eg:&nbsp;<span style="font-size: 1rem;">https://gitlab.com/your-repository.git</span></p><p><br></p><p>8. Create a branch :</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git checkout -b &lt;name-of-branch&gt;</span></p></div><p><br></p><p>9. Switching from <b>ONE </b>Branch to <b>ANOTHER</b> branch</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git checkout &lt;name-of-branch&gt;</span></p></div><p><span style="font-size: 1rem;">eg: $ git checkout master</span><br></p><p><br></p><p>10. Push Changes of files to your Git Repository:</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git add .</span></p><p class="mb-0 text-white">$&nbsp; &nbsp;git commit -m "First Commit"</p><p class="mb-0 text-white">$&nbsp; &nbsp;git push origin &lt;master&gt; or &lt;your_branch_name&gt;</p></div><p><br></p><p>11. Create a branch in your repository and pushing to Git:</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;git checkout -b &lt;name-of-branch&gt;</p><p class="mb-0 text-white">$&nbsp; &nbsp;git add .</p><p class="mb-0 text-white">$&nbsp; &nbsp;git commit -m "First Commit"</p><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git push origin &lt;master&gt; or &lt;your_branch_name&gt;</span></p></div><p>&nbsp; &nbsp;</p><p><span style="font-size: 1rem;">12. How to <b>Clone a Git Repository</b> -</span></p><p><span style="font-size: 1rem;">Via HTTPS:</span></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git clone https://gitlab.com/gitlabtest/sample-project.git</span></p></div><p>Via SSH:&nbsp;</p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git clone git@gitlab.com:gitlab-test/sample-project.git</span></p></div><p><br></p><p>13. How to <b>Clone a Git Branch</b></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git clone -b &lt;branch_name&gt; &lt;remote_repo&gt;</span></p></div><p><br></p><p><span style="font-size: 1rem;">14. How to <b>Remove</b> or <b>Delete</b>&nbsp;<b>Branch</b> from your repository</span><br></p><div class="alert bg-dark"><p class="mb-0 text-white">$&nbsp; &nbsp;<span style="font-size: 1rem;">git push origin -delete &lt;master&gt;&nbsp; or &lt;your_branch_name&gt;</span></p></div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/get-the-current-branch-name-in-git') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
