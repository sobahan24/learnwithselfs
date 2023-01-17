@extends('layouts.master')

@section('title')
    SQL | ORDER BY | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>SQL ORDER BY</h1>
                    </div>
                    <div class="description py-3">
                        <h1><span style="font-family: Roboto;"><font color="#000000">SQL ORDER BY&nbsp;</font></span></h1><p><font face="Roboto">The ORDER BY keyword is used to sort the result-set in ascending or descending order.</font></p><p><font face="Roboto">The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.</font></p><h4><font color="#ff0000"><span style="font-family: Roboto;">Student table:</span><span style="font-family: Roboto;">﻿</span></font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><span style="font-family: Roboto;"></span><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;"><span style="font-family: Roboto;">Regno</span><o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><span style="font-family: &quot;Times New Roman&quot;;"></span><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Name<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><span style="font-family: &quot;Times New Roman&quot;;"></span><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Dob<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="139" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><span style="font-family: &quot;Times New Roman&quot;;"></span><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Contact<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="132" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><span style="font-family: &quot;Times New Roman&quot;;"></span><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">state<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1001<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">funda<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">20-june-2000<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">9696985457<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">karnataka<o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1003<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">web</span><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">12-march-1998<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">8256968475</span><br></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">karnataka</span><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1002<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">&nbsp;<o:p></o:p></span><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;">of</span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">18-may-2003<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">8585969674</span><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;"><o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">haryana</span><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;"><o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1004<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">it<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">24-nov-1994<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">9785956748<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">goa<o:p></o:p></span></p></td></tr></tbody></table><p><span style="font-size: 1rem; font-family: &quot;Times New Roman&quot;;"><br></span></p><h4></h4><h2><span style="font-size: 1rem; font-family: &quot;Arial Black&quot;;">Syntax:</span></h2><p>SELECT column1, column2,&nbsp;</p><p>FROM table_name</p><p>ORDER BY column1, column2,&nbsp; ASC|DESC;</p><h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);">Example :&nbsp;</span></h4><p>SELECT * FROM students</p><p>ORDER BY regno;</p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Regno<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Name<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Dob<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Contact<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">state<o:p></o:p></span></p></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1001<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">om<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">20-june-2000<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">8596874858</span><br></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">karnataka<o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1002<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">of<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">18-march-2003<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">8585969674<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">haryana<o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1003<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">web<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">12-may-1998<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">8256968475<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">karnataka<o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1004<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">it<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">24-nov-1994<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">9785956748<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">goa<o:p></o:p></span></p></td></tr></tbody></table><p><br></p><h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);">ORDER BY DESC Example :&nbsp;</span></h4><p>SELECT * FROM students</p><p>ORDER BY regno DESC;</p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Regno<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Name<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Dob<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">Contact<o:p></o:p></span></p></td><td width="132" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">state<o:p></o:p></span></p></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1004<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">it<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">20-nov-1994<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">9785956748</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><br></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">goa</span><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1003<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">web<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">12-may-1998<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">8256968475</span><br></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">karnataka<o:p></o:p></span></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1002<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">of<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">18-</span><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">march</span><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">-2003<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">8585969674</span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, &quot;serif&quot;; font-size: 21.3333px;">haryana</span><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">1001<o:p></o:p></span></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">om<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">20-june-2000<o:p></o:p></span></p></td><td width="139" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 104.6pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">8596874858</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;"><o:p></o:p></span></p></td><td width="132" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 98.85pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">karnataka<o:p></o:p></span></p><div><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;"><br></span></div></td></tr></tbody></table><div><br></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/sql/sql-delete') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/sql/sql-operators') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
