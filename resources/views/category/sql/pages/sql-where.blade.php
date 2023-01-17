@extends('layouts.master')

@section('title')
    SQL | WHERE CLAUSE | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL WHERE CLAUSE</h1>
    </div>
    <div class="description py-3">
        <div><b>SQL WHERE CLAUSE:</b></div><div><br></div><div>Where clause is use to get the exact value from a record.</div><div>You can also get values by giving condition.</div><div><br></div><div><b>DATABASE TABLE:</b></div><div>item table</div><div><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemcode</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemname</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Price</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4001</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">50</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4002</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pencil</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">20</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:27.4pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4003</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">notebook</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">40</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
</tbody></table></div><div><br></div><div class="alert alert-info"><b>&nbsp;SQL WHERE SYNTAX:</b><b><br></b>SELECT column1,column2...FROM Table_Name WHERE condition;</div><div><br></div><div><b>EXAMPLE:</b></div><div><b><br></b></div><div>SELECT itemname, price FROM item where itemcode = 4001;&nbsp;</div><div><br></div><div><span style="background-color: rgb(0, 255, 255);">The <b>OUTPUT</b> for the above code:</span></div><div><br></div><div><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" align="left" style="border: none; margin-left: 6.75pt; margin-right: 6.75pt;">
<tbody><tr>
<td width="150" valign="top" style="width:112.5pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:12.85pt;mso-height-rule:exactly"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemname</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="126" valign="top" style="width:94.5pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:12.85pt;mso-height-rule:exactly"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Price</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr>
<td width="150" valign="top" style="width:112.5pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:12.85pt;mso-height-rule:exactly"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="126" valign="top" style="width:94.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:12.85pt;mso-height-rule:exactly"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">50</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
</tbody></table></div><div><br></div><div>&nbsp;</div><div><b><br></b></div><div><b style="background-color: rgb(255, 0, 0);"><br></b></div><div><b style="font-size: 1rem;">WHERE clause</b><span style="font-size: 1rem;"> :</span><br></div><div>To select a particular record from the table.</div><div><br></div><div><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemcode</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemname</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Price</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4001</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">50</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4002</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">20</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:27.4pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4003</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">notebook</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">40</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
</tbody></table></div><div><br></div><div class="alert alert-info"><b>SYNTAX:</b><br>SELECT * FROM Table_Name WHERE condition;</div><div><br></div><div><b>EXAMPLE:</b></div><div>SELECT * FROM item WHERE itemname='pen';</div><div><br></div><div><span style="background-color: rgb(0, 255, 255);">The <b style="">OUTPUT</b> for the above code:</span></div><div><br></div><div><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemcode</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Itemname</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Price</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4001</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">50</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">4002</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">20</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
</td>
</tr>
</tbody></table></div><div><br></div><div><br></div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-distinct') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-insert') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
