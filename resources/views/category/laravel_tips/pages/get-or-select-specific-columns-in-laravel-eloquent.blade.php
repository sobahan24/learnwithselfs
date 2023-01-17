@extends('layouts.master')

@section('title')
    Laravel Tips | Get Specific Columns | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to get or select specific columns in laravel eloquent</h1>
                    </div>
                    <div class="description py-3">
                        <h4>How to get or select specific columns using Laravel eloquent methods</h4><p>Use <b>select()</b> method to select specific columns and get all data of those column with laravel eloquent <b>get() </b>method:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">select</span>(<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>)-&gt;<span style="color: #dcdcaa;">get</span>();</div><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">select</span>(<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>)-&gt;<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>, <span style="color: #b5cea8;">1</span>)-&gt;<span style="color: #dcdcaa;">get</span>();</div><p><br></p><p>Use Laravel Eloquent <b>get()</b> method&nbsp;<span style="background-color: transparent; text-align: var(--bs-body-text-align);">to get selected specific column data as given below:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">get</span>([<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>]);</div><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>, <span style="color: #b5cea8;">1</span>)-&gt;<span style="color: #dcdcaa;">get</span>([<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>]);</div><p><br></p><p>Use Laravel Eloquent <b>all()</b> method to get selected specific column data as given below:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">all</span>([<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>]);</div><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">all</span>([<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>])-&gt;<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span>, <span style="color: #b5cea8;">1</span>);</div><p><br></p><p>Use Laravel Eloquent&nbsp;<span style="font-weight: bolder;">find()</span>&nbsp;method to get selected specific column data as with <b>ID</b> given below:<br></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$models</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">find</span>(<span style="color: #9cdcfe;">$id</span>, [<span style="color: #ce9178;">'name'</span>,<span style="color: #ce9178;">'email'</span>,<span style="color: #ce9178;">'phone'</span>]);</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-tips/get-array-of-ids-from-collection') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-tips/concat-two-columns-using-eloquent-model') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
