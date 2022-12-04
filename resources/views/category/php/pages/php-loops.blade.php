@extends("layouts.master")

@section('title')
PHP | Loops | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Loops in PHP</h1>
                        </div>
                        <div class="description py-3">
                            <p>Loop is used to execute a part of the code more than once until the condition is true.</p>
                            <p>We have the following loops in php :</p>
                            <p><span style="white-space:pre">   </span> 1. for loop</p>
                            <p><span style="white-space:pre">   </span> 2. foreach loop</p>
                            <p><span style="white-space:pre">   </span> 3. while loop</p>
                            <p><span style="white-space:pre">   </span> 4. do...while loop</p><p><br></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-switch-case') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-foreach-loop') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
