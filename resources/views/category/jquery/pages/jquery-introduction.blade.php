@extends('layouts.master')

@section('title')
    jQuery | Introduction | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Introduction to jQuery</h1>
                    </div>
                    <div class="description py-3">
                        <p>Introduction to jQuery&nbsp;</p><p>jQuery is a simplified JavaScript library. The purpose of jQuery is to use JavaScript in a simple and light-weight way on your website. jQuery performs a bundle of tasks that require many lines of JavaScript code to execute and makes them into methods that you can call with one line of code.</p><p>jQuery is used for dynamic performance of a website.</p><p>For example :</p><p>You can fetch data from database without reloading your webpage.</p><p>Real life example :</p><p>On a Shopping site, When you increase the quantity of a product, the price changes as soon as you increase/decrease the quantity (without reloading the page). This can be achieved with jQuery.</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/jquery') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/jquery/get-value-from-input-box-using-jquery') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.jquery.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
