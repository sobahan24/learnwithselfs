@extends('layouts.master')

@section('title')
    Laravel Tips | Multiple Data by ID | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to get data with multiple ids in laravel</h1>
                    </div>

                    <div class="description py-3">
                        <h3>How to get records with multiple ids in Laravel ?</h3><p>Use Laravel Eloquent <b>findMany()</b> method to get record with multiple ids in Laravel as given below:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: rgb(78, 201, 176);">YourModel</span>::<span style="color: #dcdcaa;">findMany</span>([<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>]);</div><p><br></p><p>You can also pass an array to <b>find() </b>method and it will internally call findMany():</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">find</span>([<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>]);</div><p><br></p><p>Condition for multiple id in laravel by using <b>whereIn()</b> method:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">whereIn</span>(<span style="color: #ce9178;">'id'</span>, [<span style="color: #b5cea8;">1</span>, <span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>])-&gt;<span style="color: #dcdcaa;">get</span>();</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-tips/get-data-from-database-by-id') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('laravel-tips/get-array-of-ids-from-collection') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
