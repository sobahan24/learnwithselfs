@extends('layouts.master')

@section('title')
SQL | SELECT DISTINCT | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL SELECT DISTINCT STATEMENT</h1>
    </div>
    <div class="description py-3">
        <p><b>SQL DISTINCT STATEMENT:</b></p><p>This statement is use to select the distinct value or different value from the database.</p><p>In a Table, the column can contain or have same value(duplicate), so to get the unique value or different value we use distinct statement.</p><p><br></p><div class="alert alert-primary"><b>SYNTAX:</b><br>SELECT DISTINCT Column1, Column2... FROM Table_Name;</div><p><b>DATABASE TABLE</b></p><p>
</p><p></p><p></p>Item Table<br><p></p><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
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
normal"><span style="font-size: 20pt; font-family: &quot;Times New Roman&quot;, serif;">Pen</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
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
</tbody><tbody></tbody></table><p><br></p><p><b>EXAMPLE:</b></p><p>SELECT DISTINCT itemname from item;</p><p><font color="#0000ff">The <b>OUTPUT</b>&nbsp;for the above code:</font></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" align="left" style="border: none; margin-left: 6.75pt; margin-right: 6.75pt;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.35pt">
<td width="158" valign="top" style="width:118.6pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:7.95pt;mso-height-rule:exactly"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Itemname<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:26.5pt">
<td width="158" valign="top" style="width:118.6pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:7.95pt;mso-height-rule:exactly"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Pen<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:31.9pt">
<td width="158" valign="top" style="width:118.6pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:31.9pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
margin;mso-element-top:7.95pt;mso-height-rule:exactly"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">notebook<o:p></o:p></span></p>
</td>
</tr>
</tbody></table>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-select') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-where') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
