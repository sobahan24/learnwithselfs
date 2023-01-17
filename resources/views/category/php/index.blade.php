@extends("layouts.master")

@section('title')
    PHP Tutorials | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP Tutorials</h1>
                        </div>

                        <div class="description py-3">
                            <div>PHP is a programming and scripting language. It is mainly used for scripting as it can be very easily embedded in HTML for building websites. PHP is mainly used for web development.</div>
                            <div><br></div>
                            <div>Getting started with PHP is simple. You don't need any prior knowledge of coding to learn PHP. It is a very easy language to learn for anyone.</div>
                            <div><br></div>
                            <div>Here is a example of how your "hello world" program in php would look like :</div>
                            <div><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #569cd6;">&lt;?php</span></div><br><div><span style="color: #dcdcaa;">echo</span>&nbsp;<span style="color: #ce9178;">"Hello&nbsp;world"</span>;</div><br><div><span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div></div></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ url('/php/php-introduction') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('category.php.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
