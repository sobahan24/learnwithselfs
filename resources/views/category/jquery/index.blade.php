@extends('layouts.master')

@section('title')
    jQuery Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.jquery.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                            <div class="main-heading">
                                <h1>jQuery Tutorial</h1>
                            </div>

                            <div class="description py-3">
                                <h3 style=""><font color="#000000" face="Verdana, sans-serif"><b>jQuery Tutorial</b></font></h3><p style="color: rgb(0, 0, 0); font-family: Verdana, sans-serif; font-size: 15px;"><br></p><p style="color: rgb(0, 0, 0); font-family: Verdana, sans-serif; font-size: 15px;">Before getting started, here are few reasons why you should learn jquery :&nbsp;<br></p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">1.jQuery is fast.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">2.jQuery is a simple way of performing tasks which are accomplished using JavaScript.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">3.jQuery is simple, easy to use and very easy to learn when compared to JavaScript.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">4.jQuery has smaller codes unlike the lengthy ones in JavaScript.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;"><br></p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;"><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">jQuery</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">&nbsp;is a simplified JavaScript library. The purpose of&nbsp;</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">jQuery</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">&nbsp;is to </span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">use</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">&nbsp;JavaScript in a simple and light-weight way on your website.&nbsp;</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">jQuery</span><span style="font-size: 1rem; color: rgb(34, 34, 34); font-family: arial, sans-serif;">&nbsp;performs a bundle of tasks that require many lines of JavaScript code to execute and makes them into methods that you can call with one line of code.</span></p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;"><br></p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">jQuery is used for dynamic performance of a website.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">For example :</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">You can fetch data from database without reloading your webpage.</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">Real life example :</p><p style="box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;">On a Shopping site, When you increase the quantity of a product, the price changes as soon as you increase/decrease the quantity (without reloading the page). This can be achieved with jQuery.</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 my-3">
                                    <a href="{{ url('/jquery/jquery-introduction') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                                </div>
                            </div>
                    </div>
                    @include('category.jquery.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
