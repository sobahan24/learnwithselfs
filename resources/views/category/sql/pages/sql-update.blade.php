@extends('layouts.master')

@section('title')
    SQL | Update | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL UPDATE</h1>
    </div>
    <div class="description py-3">
        <h1><span style="font-family: Roboto;"><font color="#000000">SQL UPDATE&nbsp;</font></span></h1><p><span style="font-family: Roboto;">This statement is&nbsp; to modify/U</span><font face="Roboto">pdate the existing&nbsp;records in a table.</font></p><h4><font color="#ff0000"><span style="font-family: Roboto;">Student table:</span><span style="font-family: Roboto;">﻿</span></font></h4><span style="font-family: Roboto;">
</span><span style="font-family: Roboto;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><span style="font-family: &quot;Times New Roman&quot;;">
</span><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.95pt"><td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt"><span style="font-family: Roboto;">
</span><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="font-family: Roboto;">Regno</span><o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;">
</span></td><td width="119" valign="top" style="width:89.1pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt"><span style="font-family: &quot;Times New Roman&quot;;">
</span><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Name<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;">
</span></td><td width="122" valign="top" style="width:91.7pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt"><span style="font-family: &quot;Times New Roman&quot;;">
</span><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dob<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;">
</span></td><td width="139" valign="top" style="width:104.6pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt"><span style="font-family: &quot;Times New Roman&quot;;">
</span><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Contact<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;">
</span></td><td width="132" valign="top" style="width:98.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt"><span style="font-family: &quot;Times New Roman&quot;;">
</span><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">state<o:p></o:p></span></p><span style="font-family: &quot;Times New Roman&quot;;">
</span></td></tr><tr style="mso-yfti-irow:1;height:35.45pt"><td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1001<o:p></o:p></span></p>
</td><td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">funda<o:p></o:p></span></p>
</td><td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">20-june-2000<o:p></o:p></span></p>
</td><td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9696985457<o:p></o:p></span></p>
</td><td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td></tr><tr style="mso-yfti-irow:2;height:34.55pt"><td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1002<o:p></o:p></span></p>
</td><td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">of<o:p></o:p></span></p>
</td><td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">18-march-2003<o:p></o:p></span></p>
</td><td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8585969674<o:p></o:p></span></p>
</td><td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">haryana<o:p></o:p></span></p>
</td></tr><tr style="mso-yfti-irow:3;height:34.55pt"><td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1003<o:p></o:p></span></p>
</td><td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">web<o:p></o:p></span></p>
</td><td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">12-may-1998<o:p></o:p></span></p>
</td><td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8256968475<o:p></o:p></span></p>
</td><td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td></tr><tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:34.55pt"><td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1004<o:p></o:p></span></p>
</td><td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">it<o:p></o:p></span></p>
</td><td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">24-nov-1994<o:p></o:p></span></p>
</td><td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9785956748<o:p></o:p></span></p>
</td><td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">goa<o:p></o:p></span></p>
</td></tr></tbody></table><p><span style="font-size: 1rem; font-family: &quot;Times New Roman&quot;;"><br></span></p><h4></h4><h2><span style="font-size: 1rem; font-family: &quot;Arial Black&quot;;">Syntax:</span></h2>UPDATE table_Name set Column1 = value1,Column2 = value2.. WHERE Condition;<h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);">Example :&nbsp;</span></h4><p>Update student set name='om', contact='8596874858' WHERE regno=1001;</p><h4><font style="background-color: rgb(255, 255, 255);" color="#ff0000">The OUTPUT for the above query:</font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.95pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Regno<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Name<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dob<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Contact<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">state<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.45pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1001<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">om<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">20-june-2000<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">8596874858</span><br></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1002<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">of<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">18-march-2003<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8585969674<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">haryana<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1003<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">web<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">12-may-1998<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8256968475<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1004<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">it<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">24-nov-1994<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9785956748<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">goa<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p><br></p><h1><font color="#731842">UPDATE MULTIPLE RECORDS</font></h1><p><span style="font-size: 1rem;">Here, Where clause decides how many rows or records will get updated.</span><br></p><p>Following statement will updated the name to om where state is karnataka</p><h5>Example:</h5><p>UPDATE student set name='om' WHERE state='Karnataka';</p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.95pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Regno<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Name<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dob<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Contact<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">state<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.45pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1001<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">om<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">20-june-2000<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9696985457<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1002<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">of<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">18-march-2003<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8585969674<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">haryana<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1003<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">om<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">12-may-1998<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8256968475<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1004<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">it<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">24-nov-1994<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9785956748<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">goa<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p><br></p><p>When you update any record, you must be careful and use the WHERE condition. If you dont use the WHERE condition all the records will get updated.</p><h5>Example: </h5><p>UPDATE Student SET state='karnataka';</p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.95pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Regno<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Name<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dob<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Contact<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.95pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">state<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.45pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1001<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">funda<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">20-june-2000<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9696985457<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.45pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1002<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">of<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">18-march-2003<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8585969674<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">karnataka</span><br></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1003<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">web<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">12-may-1998<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8256968475<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">karnataka<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:34.55pt">
<td width="121" valign="top" style="width:90.4pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1004<o:p></o:p></span></p>
</td>
<td width="119" valign="top" style="width:89.1pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">it<o:p></o:p></span></p>
</td>
<td width="122" valign="top" style="width:91.7pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">24-nov-1994<o:p></o:p></span></p>
</td>
<td width="139" valign="top" style="width:104.6pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">9785956748<o:p></o:p></span></p>
</td>
<td width="132" valign="top" style="width:98.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.55pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">karnataka</span><br></p>
</td>
</tr>
</tbody></table><p><br></p><p><font color="#0000ff">IF you want to update a single record use Where condition.</font></p>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-insert') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-comment') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
