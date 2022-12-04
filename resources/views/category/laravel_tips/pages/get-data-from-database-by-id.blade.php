@extends('layouts.master')

@section('title')
    Laravel Tips | Get Data by ID | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Laravel Get Data From Database By Id</h1>
                    </div>
                    <div class="description py-3">
                        <h2><span style="font-size: 1.25rem; background-color: transparent; text-align: var(--bs-body-text-align);">How to get a record in Laravel by id ?</span><br></h2><p><span style="background-color: transparent; text-align: var(--bs-body-text-align);"><br></span></p><p><span style="background-color: transparent; text-align: var(--bs-body-text-align);">Use laravel Eloquent <b>find()</b> method to get a record by id in Laravel below is sample usage:</span><br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #9cdcfe;">$id</span>);</div><p><br></p><p>Use Laravel Eloquent <b>findOrFail()</b> method to get data by id. This function operates as If the ID is not found it give you 404 Error.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">findOrFail</span>(<span style="color: #9cdcfe;">$id</span>);</div><p><br></p><p>You can also use <b>first()</b> method with where to get record in laravel by id.<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>,<span style="color: #ce9178;">"="</span>, <span style="color: #9cdcfe;">$id</span>)-&gt;<span style="color: #dcdcaa;">first</span>();</div><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #4ec9b0;">YourModal</span>::<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>,<span style="color: #9cdcfe;">$id</span>)-&gt;<span style="color: #dcdcaa;">first</span>();</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-tips') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-tips/get-data-with-multiple-ids') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.laravel_tips.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
