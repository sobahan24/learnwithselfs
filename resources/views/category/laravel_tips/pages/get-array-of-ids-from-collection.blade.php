@extends('layouts.master')

@section('title')
    Laravel Tips | Get Array | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.laravel_tips.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Get Array of IDs from Eloquent Collection in Laravel</h1>
                    </div>

                    <div class="description py-3">
                        <h4>How to get only IDs from model |&nbsp;Get Array of IDs in laravel eloquent</h4><p>Use Laravel Eloquent <b>pluck()</b> method to get array of ids as given below:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$modelIds</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">pluck</span>(<span style="color: #ce9178;">'id'</span>);</div><p><br></p><p>If you are getting array of ids&nbsp;<span style="background-color: transparent; text-align: var(--bs-body-text-align);">conditionally</span><span style="background-color: transparent; text-align: var(--bs-body-text-align);">, then use </span><b style="background-color: transparent; text-align: var(--bs-body-text-align);">pluck()</b><span style="background-color: transparent; text-align: var(--bs-body-text-align);"> method which returns all </span><b style="background-color: transparent; text-align: var(--bs-body-text-align);">"IDs"</b><span style="background-color: transparent; text-align: var(--bs-body-text-align);"> in </span><b style="background-color: transparent; text-align: var(--bs-body-text-align);">string</b><span style="background-color: transparent; text-align: var(--bs-body-text-align);"> and use </span><b style="background-color: transparent; text-align: var(--bs-body-text-align);">toArray()</b><span style="background-color: transparent; text-align: var(--bs-body-text-align);"> method to convert the&nbsp;</span><span style="background-color: transparent; text-align: var(--bs-body-text-align); font-weight: bolder;">"IDs"</span><span style="background-color: transparent; text-align: var(--bs-body-text-align);">&nbsp;type string into type array.</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$modelIds</span> = <span style="color: #4ec9b0;">YourModel</span>::<span style="color: #dcdcaa;">where</span>(<span style="color: #ce9178;">'id'</span> ,<span style="color: #ce9178;">'&gt;'</span> ,<span style="color: #b5cea8;">0</span>)-&gt;<span style="color: #dcdcaa;">pluck</span>(<span style="color: #ce9178;">'id'</span>)-&gt;<span style="color: #dcdcaa;">toArray</span>();</div><p><br></p><p>You can get all the IDs from a eloquent collection by using <b>pluck()</b> method and convert them in array using <b>toArray() </b>method:</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #9cdcfe;">$collection</span>-&gt;<span style="color: #dcdcaa;">pluck</span>(<span style="color: #ce9178;">'id'</span>)-&gt;<span style="color: #dcdcaa;">toArray</span>();</div><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/laravel-tips/get-data-with-multiple-ids') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/laravel-tips/get-or-select-specific-columns-in-laravel-eloquent') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
