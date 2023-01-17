@extends('layouts.master')

@section('title')
    Git Tutorial | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                        <div class="main-heading">
                            <h1>SQL Tutorials</h1>
                        </div>

                        <div class="description py-3">
                            <p class="MsoNormal"><b><span style="font-size:20.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif;
mso-ansi-language:EN-US">What is DATABASE: <o:p></o:p></span></b></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">

</span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Database is a collection of logically
related data organized in such a way &nbsp;that data can be easily accessed, managed and
updated.</span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><b>What is SQL?</b><o:p></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Structured Query language
helps to make practice on SQL commands which provides immediate result.<o:p></o:p></span></p><p>



</p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SQL is a language of database,
it includes database creation, deletion, fetching rows and modifying rows etc.</span></p><p class="MsoNormal"><b><span style="font-size:20.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif;
mso-ansi-language:EN-US">What is DATA?<o:p></o:p></span></b></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">

</span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Representations of facts,
figures, statistics having no particular meaning. It can be in form of numbers,
characters, Symbols or even pictures.<o:p></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p><br></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p><br></o:p></span></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 my-3">
                                <a href="{{ url('/sql/sql-introduction') }}" class="btn bg-red px-3 py-2 shadow-sm text-white">Get Started <i class="fa fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                </div>
                    @include('category.sql.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
