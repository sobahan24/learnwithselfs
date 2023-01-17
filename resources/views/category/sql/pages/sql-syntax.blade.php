@extends('layouts.master')

@section('title')
    SQL | Syntex | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
    <div class="main-heading">
        <h1>SQL SYNTAX</h1>
    </div>
    <div class="description py-3">
        <p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><b>DATABASE TABLE</b></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif">&nbsp;This is item table</font></p><p></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 0.75in; border: none;"><tbody><tr>
<td width="184" valign="top" style="width:138.15pt;border:solid windowtext 1.0pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Itemcode <o:p></o:p></span></p>
</td>
<td width="186" valign="top" style="width:139.45pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpMiddle" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Itemname <o:p></o:p></span></p>
</td>
<td width="174" valign="top" style="width:130.5pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Price <o:p></o:p></span></p>
</td>
</tr>
<tr>
<td width="184" valign="top" style="width:138.15pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">4001<o:p></o:p></span></p>
</td>
<td width="186" valign="top" style="width:139.45pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpMiddle" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">pen<o:p></o:p></span></p>
</td>
<td width="174" valign="top" style="width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">300<o:p></o:p></span></p>
</td>
</tr>
<tr>
<td width="184" valign="top" style="width:138.15pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">4002<o:p></o:p></span></p>
</td>
<td width="186" valign="top" style="width:139.45pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpMiddle" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">pencil<o:p></o:p></span></p>
</td>
<td width="174" valign="top" style="width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">45<o:p></o:p></span></p>
</td>
</tr>
<tr>
<td width="184" valign="top" style="width:138.15pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">4003<o:p></o:p></span></p>
</td>
<td width="186" valign="top" style="width:139.45pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpMiddle" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Notebook <o:p></o:p></span></p>
</td>
<td width="174" valign="top" style="width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">12<o:p></o:p></span></p>
</td>
</tr>
<tr>
<td width="184" valign="top" style="width:138.15pt;border:solid windowtext 1.0pt;
border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">4004<o:p></o:p></span></p>
</td>
<td width="186" valign="top" style="width:139.45pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpMiddle" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">Eraser<o:p></o:p></span></p>
</td>
<td width="174" valign="top" style="width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
<p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal"><span style="font-size:20.0pt;
font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:EN-US">3<o:p></o:p></span></p>
</td>
</tr>
</tbody><tbody></tbody></table><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><b><br></b></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><b>&nbsp;Syntax in SQL</b></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 1rem;">Select * from tablename;</span></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 1rem;"><span style="background-color: rgb(255, 214, 99);"><b style="">Example:</b> SELECT * FROM item ;</span><br></span><br></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><b>SQL KEYWORD - NOT CASE SENSITIVE</b></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif">Select can be written in upper case or lower case.</font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif">SQL keyword is not case sensitive.</font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif" color="#000000" style="background-color: rgb(255, 214, 99);"><b>Example</b>: select or SELECT</font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><br></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif" color="#0000ff"><b>SEMI-COLON</b></font></p><p style="margin-top: 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif">It is mandatory to have semicolon(;) at the end of each query.</font></p><br>
    </div>
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-6 col-6 text-start">
                <a href="{{ url('/sql/sql-commands') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
            </div>
            <div class="col-md-6 col-6 text-end">
                <a href="{{ url('/sql/sql-select') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
