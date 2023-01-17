@extends('layouts.master')

@section('title')
    Git | Check Current Repository | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to check current git repository name using command line</h1>
                    </div>
                    <div class="description py-3">
                        <h3><b>How to check current git repository name using command line.</b></h3><p>In this post, you will be learning how to check the working Git Repository name, by the following command:</p><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;"><span style="font-weight: 900;">Step 1:&nbsp;</span>Check your Git Repository name:&nbsp;</p><div class="alert bg-dark" style="font-family: Poppins, sans-serif;"><p class="mb-0 text-white" style="font-size: 17px; line-height: 2;">$&nbsp; &nbsp;<span style="font-size: 1rem;">git remote -v</span></p></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/clone-a-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
