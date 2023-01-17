@extends('layouts.master')

@section('title')
    SQL | SELECT STATEMENT | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL SELECT STATEMENT</h1>
    </div>
    <div class="description py-3">
        <p></p><p><b>SQL SELECT STATMENT :</b></p><p><span style="font-size: 1rem;">SELECT is used to select a particular column or show all the data which is stored in the database.</span></p><p><b>SQL SELECT SYNTAX:</b></p><p>This is item table:</p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Itemcode<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Itemname<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Price<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">4001<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Pen<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">50<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">4002<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">Pencil<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">20<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:27.4pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">4003<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">notebook<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.4pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:20.0pt;font-family:&quot;Times New Roman&quot;,serif">40<o:p></o:p></span></p>
</td>
</tr>
</tbody></table><p><br></p><p>To select column data:</p><p><span style="font-size: 1rem;"></span></p><div class="alert alert-info"><b>SYNTAX:</b><br>SELECT coloumn1,column2......FROM Table_Name;</div><p>&nbsp;<span style="font-size: 1rem;">Here, Column1,column2.... are the particular attributes you want to select from&nbsp; the table.</span></p><p><span style="font-size: 1rem;"><b>EXAMPLE:</b></span><br></p><p>SELECT itemname, itemcode FROM item;</p><p>In this it will only show you the result of itemname and itemcode.&nbsp;</p><p><b>SQL SELECT SYNTAX :</b></p><p>To retrieve all the records.</p><p>If you want to look for all the columns details that are stored in a table&nbsp;</p><p><span style="font-size: 1rem;"></span></p><div class="alert alert-info"><b>SYNTAX:</b><br>SELECT * FROM Table_Name;</div><p></p><p></p><p><span style="font-size: 1rem;"><b>EXAMPLE:</b></span><br></p><p>SELECT * FROM item;</p><p><span style="font-size: 1rem;">In this all the values or data stored in item table will be displayed.</span><br></p><p><span style="font-size: 1rem;">This is the two possible ways to select a record from the database.&nbsp;</span><br></p><div><br></div><p></p>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-syntax') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-distinct') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
