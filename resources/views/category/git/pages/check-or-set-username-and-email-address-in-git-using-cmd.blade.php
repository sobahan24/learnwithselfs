@extends('layouts.master')

@section('title')
    Git | Get Branch List | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How can I get a list of Git branches ordered by most recent commit ?</h1>
                    </div>
                    <div class="description py-3">
                        <h2><b>How to get a list of Git branches ordered by most recent commit</b></h2><p>In this article, you will be learn how to get a list of Git branches ordered by ascending and descending wise.<br></p><p>Let's see how to get all the git branches as follows:</p><p><b>1.</b> get list of git branches in Descending:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">git branch --sort=-committerdate</div><p><br></p><p><b>2.</b>&nbsp;<span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">get list of git branches in Ascending:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">git branch --sort=committerdate</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/get-a-list-of-git-branches-ordered-by-most-recent-commit') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
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
