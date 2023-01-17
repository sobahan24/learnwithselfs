@extends('layouts.master')

@section('title')
    SQL | LEFT JOIN | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>SQL LEFT JOIN</h1>
                    </div>
                    <div class="description py-3">
                        <h1><font color="#000000" face="Roboto">SQL LEFT JOIN</font><br></h1><p><font face="Roboto">The LEFT JOIN keyword returns all records from the left table (table1), and the matching records from the right table (table2). The result is 0 records from the right side, if there is no match.</font><br></p><p><font face="Roboto"><span style="font-weight: bolder;">LEFT JOIN Syntax:</span></font></p><p><font face="Roboto">SELECT column_name(s)</font></p><p><font face="Roboto">FROM table1</font></p><p><font face="Roboto">LEFT JOIN table2</font></p><p><font face="Roboto">ON table1.column_name = table2.column_name;</font></p><h4><br></h4><p><font face="Roboto">Customer table:</font></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font color="#ff0000">id</font></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;"><font color="#ff0000">name</font>&nbsp; &nbsp; &nbsp;</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;"><font color="#ff0000">age</font>&nbsp;</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">&nbsp;&nbsp;<font color="#ff0000">address</font></span></font><br></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><font face="Times New Roman, serif" color="#ff0000"><span style="font-size: 21.3333px;">salary</span></font></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">1</p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">Ramesh</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">32</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;">Ahmedabad&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;">2000.00&nbsp;<br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">2</p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">Khilan</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">25</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">Delhi&nbsp; &nbsp; &nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">1500.00&nbsp;<br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">3</p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">Kaushik</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">23</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">Kota&nbsp; &nbsp; &nbsp;&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">2000.00&nbsp;<br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;">4</td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;">Chaitali</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">25</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">Mumbai&nbsp; &nbsp;&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">6500.00&nbsp;<br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;">5</td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;">Hardik</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">27</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">Bhopal&nbsp; &nbsp;&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">8500.00&nbsp;<br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;">6</td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;">Komal</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">22</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">MP&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">4500.00&nbsp;<br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;">7</td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;">Muffy</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">24</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">Indore&nbsp; &nbsp;&nbsp;<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">10000.00&nbsp;<br></td></tr></tbody></table><p><span style="font-family: Roboto;"><br></span></p><p><font face="Roboto">&nbsp;Orders table:</font></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><font color="#ff0000">oid</font></span></p></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">&nbsp;&nbsp;</span></font><span style="font-family: var(--bs-font-sans-serif); font-size: 1rem;"><font color="#ff0000">date</font></span><span style="font-size: 21.3333px; font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font color="#ff0000">customer_id</font></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><font color="#ff0000">Amount</font></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">102&nbsp;<br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">&nbsp;2009-10-08<br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">3</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;">3000&nbsp;<br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">100&nbsp;<br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">2009-10-08<br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">3</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">1500&nbsp;<br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">101&nbsp;<br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">2009-11-20&nbsp;<br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;">2</p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">1560&nbsp;<br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;">103&nbsp;<br></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;">2008-05-20<br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">4</td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;">2060&nbsp;<br></td></tr></tbody></table><h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);"><br></span></h4><h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);">Example :&nbsp;</span></h4><h4><span style="font-size: 16px;">&nbsp;SELECT&nbsp; ID, NAME, AMOUNT, DATE</span></h4><h4><span style="font-size: 16px;">&nbsp; &nbsp;FROM CUSTOMERS</span></h4><h4><span style="font-size: 16px;">&nbsp; &nbsp;LEFT JOIN ORDERS</span></h4><h4><span style="font-size: 16px;">&nbsp; &nbsp;ON CUSTOMERS.ID = ORDERS.CUSTOMER_ID;</span></h4><p><span style="font-family: Roboto;"></span></p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="font-size: 16px; width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: var(--bs-font-sans-serif);"><font color="#ff0000">id</font></span><font face="Roboto"><span style="font-size: 21.3333px;"><span style="white-space: pre;">	</span></span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-family: var(--bs-font-sans-serif);"><font color="#ff0000">name</font></span><font face="Times New Roman, serif"><span style="font-size: 21.3333px;"><span style="white-space: pre;">	</span></span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="color: rgb(255, 0, 0);">amount</span><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><span style="color: rgb(255, 0, 0);">date</span><br></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1</span></font></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Ramesh&nbsp; &nbsp;&nbsp;&nbsp;</span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;&nbsp;</span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">NULL</span><br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2<span style="white-space: pre;">	</span></span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Khilan&nbsp; &nbsp;&nbsp;&nbsp;<span style="white-space: pre;">	</span></span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1560&nbsp;&nbsp;</span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2009-11-20</span></font><br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">3<span style="white-space: pre;">	</span></span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">kaushik&nbsp;&nbsp;&nbsp; &nbsp;<span style="white-space: pre;">	</span></span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">3000&nbsp;&nbsp;</span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2009-10-08</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">3</span></font></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">kaushik&nbsp;&nbsp;&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1500&nbsp;&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2009-10-08</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">4&nbsp;</span></font><br></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Chaitali&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2060&nbsp;&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2008-05-20</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">5</span></font></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Hardik&nbsp; &nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">6</span></font></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Komal&nbsp; &nbsp;&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">7</span></font></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Muffy&nbsp; &nbsp;&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">NULL&nbsp;</span></font><br></td></tr></tbody></table></h4>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/sql/sql-inner-join') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/sql/sql-right-join') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
