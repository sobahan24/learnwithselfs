@extends('layouts.master')

@section('title')
    PHP Programs | Create File | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_programs.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>PHP program to create a .txt file and write some content in it.</h1>
                        </div>

                        <div class="description py-3">
                            <h3>Write a PHP program Create a .txt file &amp; write content in it</h3><p>In this tutorial, you will learn how to Create a .txt file &amp; write content in it in php, so basically it means we are creating a file by coding it named as <b><i>newfile.txt</i></b> and we are storing or writing data in that created file.</p><p>Below is the php script to Create a .txt file &amp; write content in it in php.</p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span>PHP Script Create a .txt file &amp; write content in it in PHP<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span>Write a PHP program Create a .txt file &amp; write content in it<span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">h2</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">form</span> <span style="color: #9cdcfe;">action</span>=<span style="color: #ce9178;">""</span> <span style="color: #9cdcfe;">method</span>=<span style="color: #ce9178;">"POST"</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">textarea</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"text"</span> <span style="color: #9cdcfe;">rows</span>=<span style="color: #ce9178;">"5"</span> <span style="color: #9cdcfe;">cols</span>=<span style="color: #ce9178;">"40"</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">textarea</span><span style="color: #808080;">&gt;&lt;</span><span style="color: #569cd6;">br</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color: #ce9178;">"submit"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"ok"</span><span style="color: #808080;">/&gt;</span></div><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">form</span><span style="color: #808080;">&gt;</span></div><br><div>&nbsp; &nbsp; <span style="color: #569cd6;">&lt;?php</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #9cdcfe;">$_POST</span>)</div><div>&nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$txt</span> = <span style="color: #9cdcfe;">$_POST</span>[<span style="color: #ce9178;">'text'</span>];</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$myfile</span> = <span style="color: #dcdcaa;">fopen</span>(<span style="color: #ce9178;">"newfile.txt"</span>,<span style="color: #ce9178;">"w"</span>);<span style="color: #6a9955;">//create a file</span></div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">if</span>(<span style="color: #dcdcaa;">fwrite</span>(<span style="color: #9cdcfe;">$myfile</span>,<span style="color: #9cdcfe;">$txt</span>) === <span style="color: #569cd6;">false</span>) <span style="color: #6a9955;">//write a file</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"Error in writing!!!"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">else</span></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">echo</span> <span style="color: #ce9178;">"File Created &amp; Updated Successfully"</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdcaa;">fclose</span>(<span style="color: #9cdcfe;">$myfile</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp; <span style="color: #569cd6;">?</span><span style="color: #569cd6;">&gt;</span></div><br><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: #808080;">&gt;</span></div><div><span style="color: #808080;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: #808080;">&gt;</span></div></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 col-6 text-start">
                                    <a href="{{ url('/php-programs/find-out-max-and-min-number-in-array-php') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                                </div>
                                <div class="col-md-6 col-6 text-end">
                                    <a href="{{ url('/php-programs/develop-email-registration-form') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @include('category.php_programs.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
