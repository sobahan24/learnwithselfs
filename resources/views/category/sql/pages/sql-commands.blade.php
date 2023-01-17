@extends('layouts.master')

@section('title')
    SQL | Commands | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL Commands</h1>
    </div>
    <div class="description py-3">
        <p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SQL COMMANDS&nbsp; <o:p></o:p></span></p><p>

</p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SQL Commands to interact with
relational database are </span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;font-family:
&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">CREATE, UPDATE, DELETE, INSERT, SELECT and DROP.</span></p><p class="MsoNormal"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 18pt;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="background-color: rgb(231, 156, 156);"> 1. DDL - Data Definition Language</span></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;
font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA"></span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 0.5in; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">COMMAND<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DESCRIPTION<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:34.55pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">CREATE<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Creates a new
table.<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">ALTER<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Modifies an
existing database object, such as table.<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DROP<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Deletes an entire
table.<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p class="MsoListParagraphCxSpFirst" style="text-indent:-.25in;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span style="font-size:18.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US">1&nbsp; &nbsp; &nbsp;</span></p><p class="MsoListParagraphCxSpFirst" style="text-indent:-.25in;mso-list:l0 level1 lfo1"></p><p><span style="font-size:18.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US">&nbsp; &nbsp;<font color="#000000" style=""> &nbsp; &nbsp;&nbsp;</font></span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 18pt; text-indent: -0.25in; background-color: rgb(231, 156, 156);"><font color="#000000" style="">2. DML – Data Manipulating
Language</font></span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 0.5in; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">COMMAND<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DESCRIPTION<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:34.55pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">INSERT<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Creates a
record.<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">UPDATE<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Modifies
records.<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DELETE<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Deletes records.<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p></p><p class="MsoListParagraphCxSpLast"><span style="font-size:18.0pt;line-height:
115%;font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p>&nbsp; &nbsp; &nbsp; &nbsp; <span style="background-color: rgb(231, 156, 156);">3.<font color="#000000" style="">&nbsp;</font></span></o:p></span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 18pt; background-color: rgb(231, 156, 156);"><font color="#000000" style="">TCL – Transaction Control Language</font></span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 0.5in; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">COMMAND<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DESCRIPTION<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:34.55pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">GRANT<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Gives a
privilege to user.<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">REVOKE<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Takes back privileges
granted from the user.<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p class="MsoListParagraphCxSpLast"><font face="Times New Roman, serif" style="font-size: 1rem;"><span style="font-size: 24px;"><br></span></font></p><div style="text-indent: -24px;"><font face="Times New Roman, serif" style="font-size: 1rem;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </font><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 18pt; background-color: rgb(231, 156, 156);"><font color="#000000">4. DQL – Data Query Language</font></span></div><p></p><p class="MsoListParagraphCxSpLast"><span style="text-indent: -0.25in; font-size: 18pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, serif;"></span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 0.5in; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.25pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">COMMAND<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:40.25pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">DESCRIPTION<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes;height:34.55pt">
<td width="193" valign="top" style="width:144.75pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">SELECT<o:p></o:p></span></p>
</td>
<td width="618" valign="top" style="width:463.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.55pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:18.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Retrieves
certain records from one or more tables.<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p class="MsoListParagraphCxSpLast"><span style="font-family: Roboto;">﻿</span><span style="text-indent: -0.25in; font-size: 18pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, serif;"><br></span></p><p class="MsoListParagraph" style="text-indent:-.25in;mso-list:l0 level1 lfo1"><span style="font-size:18.0pt;line-height:115%;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US"><o:p></o:p></span></p><p class="MsoNormal"><span style="font-size:18.0pt;line-height:115%;
font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA">
</span><br></p>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-introduction') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-syntax') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
