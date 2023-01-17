@extends('layouts.master')

@section('title')
    SQL | Introduction | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>Introduction to SQL</h1>
    </div>
    <div class="description py-3">
        <p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><b>What is SQL?</b><o:p></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Structured Query language
helps to make practice on SQL commands which provides immediate result.<o:p></o:p></span></p><p>



</p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SQL is a language of database,
it includes database <span style="background-color: rgb(148, 189, 123);">creation, deletion, fetching</span> rows and modifying rows etc.</span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p><br></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><b>SQL COMMANDS</b>&nbsp; <o:p></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p>

</o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SQL Commands to interact with
relational database are </span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><span style="background-color: rgb(255, 255, 0);">CREATE, UPDATE, DELETE, INSERT, SELECT and DROP.</span><o:p></o:p></span></p>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-commands') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>  
</div>
                    @include('category.sql.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
