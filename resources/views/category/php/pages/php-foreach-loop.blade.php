@extends("layouts.master")

@section('title')
PHP | Foreach Loop | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Foreach loop in PHP</h1>
                        </div>
                        <div class="description py-3">
                            <blockquote class="blockquote" style="font-family: Poppins, sans-serif;"><span style="font-weight: bolder;">foreach loop</span></blockquote><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;"><span style="white-space: pre;">	</span>The foreach loop traverses each element of the array once. This loop is used only with <span style="white-space: pre;">	</span>array.</p><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;">Syntax :&nbsp;</p><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;"><span style="white-space: pre;">	</span>foreach($array as $variable)</p><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;">Example:&nbsp;</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><br><div><span style="color: rgb(156, 220, 254);">$myfruits</span>&nbsp;=&nbsp;[<span style="color: rgb(206, 145, 120);">"Apple"</span>,<span style="color: rgb(206, 145, 120);">"Banana"</span>,<span style="color: rgb(206, 145, 120);">"Mango"</span>];</div><br><div><span style="color: rgb(197, 134, 192);">foreach</span>(<span style="color: rgb(156, 220, 254);">$</span><span style="color: rgb(156, 220, 254);">myfruits</span>&nbsp;as&nbsp;<span style="color: rgb(156, 220, 254);">$item</span>)</div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">echo</span>&nbsp;<span style="color: rgb(156, 220, 254);">$</span><span style="color: rgb(156, 220, 254);">item</span>.<span style="color: rgb(206, 145, 120);">"</span><span style="color: rgb(215, 186, 125);">\t</span><span style="color: rgb(206, 145, 120);">"</span>;</div><div>}</div><br><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div></div><p style="font-size: 17px; line-height: 2; font-family: Poppins, sans-serif;">Output for the above code :&nbsp;<span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Apple Banana Mango</span><br></p><div><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><br></span></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-loops') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-while-loop') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
