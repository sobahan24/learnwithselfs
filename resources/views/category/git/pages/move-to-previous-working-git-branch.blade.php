@extends('layouts.master')

@section('title')
    Git | Move Prev Branch | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to checkout to previous working git branch</h1>
                    </div>
                    <div class="description py-3">
                        <h3><b>How to checkout to previous working git branch</b></h3><p>In this article, you will learn how to move to previous working branch in git, which means git checkout to previous branch.</p><p><br></p><p><b>1.</b> If you want to <b>move</b> or <b>checkout</b> to exactly to the previous git branch, you can follow as:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$ git checkout -</div><p><b>2.</b> Here, you can checkout to your previous git branch according to your branch list.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">$ git checkout @{-<span style="color: #b5cea8;">1</span>}</div><p>in above command <b>git checkout @{-1}&nbsp;</b>, you can change with another number. <b>@{-N},</b>&nbsp;N is number where need to move to&nbsp;branches list point or position. </p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/rename-the-local-branch-in-git') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/get-a-list-of-git-branches-ordered-by-most-recent-commit') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
