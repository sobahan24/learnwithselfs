@extends('layouts.master')

@section('title')
    Git Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Git Tutorials</h1>
                        </div>

                        <div class="description py-3">
                            <p>Here, We will be learning about how to use Git and many other things like.</p><p><span style="font-size: 1rem;">1. How to install Git.</span></p><p><span style="font-size: 1rem;">2. How to setup Git and Sign Up and SingIn</span></p><p><span style="font-size: 1rem;">3. How to create a project or repository in Git</span></p><p><span style="font-size: 1rem;">4. How to create a branch in a repository.</span></p><p><span style="font-size: 1rem;">5. How to check your repository, branch and sub-branch.</span></p><p><span style="font-size: 1rem;">6. How to re-initialize repository with another repository.</span></p><p><span style="font-size: 1rem;">7. How to merge push and pull your code (project) in GIT.</span></p><p><span style="font-size: 1rem;">8. many more things we will be learning in it... as you are able to see in left sidebar, your tutorials continues....</span></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ url('/git/download-or-install-git') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('category.git.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
