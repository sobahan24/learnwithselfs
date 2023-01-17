@extends("layouts.master")

@section('title')
PHP | Do While Loop | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php.partials.phpSideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>Do...While Loop in PHP</h1>
                        </div>
                        <div class="description py-3">
                            <div class="description py-3" style="overflow-y: scroll; font-family: Poppins, sans-serif;"><blockquote class="blockquote"><span style="font-weight: 900;">do...while loop</span></blockquote><p style="font-size: 17px; line-height: 2;"><span style="">	</span>It executes a block of code once without checking any conditions and then runs continuously until the condition is satisfied.</p><p style="font-size: 17px; line-height: 2;">Syntax :&nbsp;</p><pre style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">	do<br>	{<br>		//Block of code<br>	}<br>	while( condition )</pre><p style="font-size: 17px; line-height: 2;">Example:</p><div class="fw" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: rgb(86, 156, 214);">&lt;?php</span></div><br><div><span style="color: rgb(156, 220, 254);">$i</span>&nbsp;=&nbsp;<span style="color: rgb(181, 206, 168);">0</span>;</div><div><span style="color: rgb(197, 134, 192);">do</span></div><div>{</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(220, 220, 170);">echo</span>&nbsp;<span style="color: rgb(156, 220, 254);">$i</span>;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(156, 220, 254);">$i</span>++;</div><div>}<span style="color: rgb(197, 134, 192);">while</span>(<span style="color: rgb(156, 220, 254);">$i</span>&nbsp;&gt;&nbsp;<span style="color: rgb(181, 206, 168);">5</span>);</div><br><div><span style="color: rgb(86, 156, 214);">?</span><span style="color: rgb(86, 156, 214);">&gt;</span></div></div><p style="font-size: 17px; line-height: 2;"><br></p><p style="font-size: 17px; line-height: 2;">Output for the above code :&nbsp;<span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">0</span></p><p style="font-size: 17px; line-height: 2;"><span style="font-weight: 900;">Explanation</span>&nbsp;: We have initialised our variable $i=0. We have given the condition that $i should be greater than 5. If $i is not greater than 5, it will not continue the loop. But because this is a post tested loop, the loop will run once before checking the condition. So even though $i is not greater than 5 it entered the loop and printed "0" and then the condition does not satisfy, hence it exits the loop.</p></div><div class="col-md-12" style="box-sizing: border-box; position: relative; width: 754.906px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><div class="row" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;"></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php/php-while-loop') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php/php-for-loop') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
