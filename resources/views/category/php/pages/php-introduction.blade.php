@extends("layouts.master")

@section('title')
PHP | Introduction | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Introduction to PHP</h1>
                        </div>
                        <div class="description py-3">
                            <p>PHP stands for "Php Hypertext Preprocessor". It is a widely used scripting language, mainly used for web development. PHP Scripts are executed on the server.</p>
                            <p>Before getting started with PHP, you must have good knowledge of the following:</p>
                            <p><span style="white-space:pre">       </span>1. HTML</p>
                            <p><span style="white-space:pre">       </span>2. CSS</p>
                            <p><span style="white-space:pre">       </span>3. JavaScript</p>
                            <p>HTML and CSS is used to design the page.</p>
                            <p>JavaScript is used for dynamic funtioning of the website</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-syntax') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('category.php.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
