@extends('layouts.master')

@section('title')
    SQL | INSERT | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL INSERT</h1>
    </div>
    <div class="description py-3">
        <div><b>SQL INSERT:</b></div><div><br></div><div>This statement is used to insert a value in the database.</div><div><b><br></b></div><div><b>METHOD 1:</b></div><div><br></div><div class="alert alert-warning"><b>SYNTAX:</b><br>INSERT INTO Table_Name Values('&amp;column1','&amp;column2','&amp;column3');</div><div><br></div><div><b>EXAMPLE:</b></div><div>INSERT INTO student VALUES('&amp;regno','&amp;name','&amp;dob');</div><div>enter the value for regno: 01</div><div>enter the value for name: om</div><div>enter the value for dob: 27-may-2000</div><div><br></div><div><span style="background-color: rgb(0, 255, 0);">&nbsp; 1 row created.&nbsp;</span><span style="background-color: rgb(0, 255, 0); font-size: 1rem;">&nbsp;</span></div><div><br></div><div>here you are creating the columns and then inserting the values.</div><div>you can also insert the values in this format also.</div><div><br></div><div><b>METHOD 2:</b></div><div><br></div><div class="alert alert-warning"><b>SYNTAX:</b><br>INSERT INTO Table_Name('column1','column2','column3') VALUES('value1','value2','value3');</div><div><b><br></b></div><div><b>EXAMPLE:</b></div><div>INSERT INTO student (regno,name,dob) VALUES('02','prakash','28-may-2000');</div><div><br></div><div><b>METHOD 3:</b></div><div><br></div><div class="alert alert-warning"><b>SYNTAX:</b><br><span style="font-size: 1rem;">INSERT INTO Table_Name VALUES(value1,value2,value3);</span></div><div><br></div><div><b>EXAMPLE:</b></div><div><br></div><div>INSERT INTO student VALUES('03','sharma','29-may-2000');</div><div><br></div><div>Here you can insert the values directly; columns are already created.</div><div><br></div><div>SELECT * FROM student;</div><div><br></div><div><span style="background-color: rgb(0, 255, 255);">The OUTPUT for the above code:</span></div><div><br></div><div><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">regno<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">name<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:26.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">dob<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:35.5pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">01<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">Om<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:35.5pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">27-may-2000<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">02<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">Prakash<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">28-may-2000<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:30.1pt">
<td width="208" valign="top" style="width:155.8pt;border:solid windowtext 1.0pt;
border-top:none;padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">03<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">Sharma<o:p></o:p></span></p>
</td>
<td width="208" valign="top" style="width:155.85pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:30.1pt">
<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif;">29-may-2000<o:p></o:p></span></p>
</td>
</tr>
</tbody></table></div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-where') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-update') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
