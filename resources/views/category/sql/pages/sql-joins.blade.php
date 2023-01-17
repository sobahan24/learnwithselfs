@extends('layouts.master')

@section('title')
    SQL | Join | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>SQL Joins</h1>
                    </div>
                    <div class="description py-3">
                        <h1><span style="font-family: Roboto;"><font color="#000000">SQL JOIN&nbsp;</font></span></h1><p><font face="Roboto">A JOIN clause is used to combine rows from two or more tables, based on a related column between them.</font></p><p><font face="Roboto">Orders table:</font></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Roboto"><span style="font-size: 21.3333px;">OrderID</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">CustomerID</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">OrderDate</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10308</span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1996-09-18</span></font><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10309</span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">37</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1996-09-19</span></font><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10310</span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 16pt; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;">77<o:p></o:p></span></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1996-09-20</span></font><br></p></td></tr></tbody></table><p><span style="font-family: Roboto;"><br></span></p><p><font face="Roboto">&nbsp;Customers table:</font></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Roboto"><span style="font-size: 21.3333px;">CustomerID</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">CustomerName</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">ContactName</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Country</span></font><br></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">1</span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">om</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">8877665544</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px;">India</span><br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">2</span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">ved</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">9900776655</span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Germany</span></font><br></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">3</span></font></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Kushbu</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">9966092089</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">Mexico</span></font><br></td></tr></tbody></table><p><span style="font-family: Roboto;"><br></span></p><p><span style="font-family: Roboto;">Customers table:</span></p><p><font face="Roboto">Notice that the "CustomerID" column in the "Orders" table refers to the "CustomerID" in the "Customers" table. The relationship between the two tables above is the "CustomerID" column.</font></p><p><font face="Roboto">Then, we can create the following SQL statement (that contains an INNER JOIN), that selects records that have matching values in both tables:</font></p><h4><span style="font-size: 1rem; background-color: rgb(255, 231, 156);">Example :&nbsp;</span></h4><h4><span style="font-size: 16px;">SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate</span></h4><h4><span style="font-size: 16px;">FROM Orders</span></h4><h4><span style="background-color: rgb(255, 231, 156); font-size: 16px;"></span></h4><h4><span style="font-size: 16px;">INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;</span></h4><p><span style="font-family: Roboto;"></span></p><h4><font color="#ff0000">The OUTPUT for the above query:</font></h4><h4><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="633" style="font-size: 16px; width: 474.65pt; border: none;"><tbody><tr style="height: 34.95pt;"><td width="121" valign="top" style="border-width: 1pt; border-color: windowtext; border-image: initial; width: 90.4pt; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Roboto"><span style="font-size: 21.3333px;">OrderID<span style="white-space:pre">	</span></span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="119" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">CustomerName<span style="white-space:pre">	</span></span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td><td width="122" valign="top" style="border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; border-image: initial; padding: 0cm 5.4pt; height: 34.95pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">OrderDate</span></font><br></p><span style="font-family: &quot;Times New Roman&quot;;"></span></td></tr><tr style="height: 35.45pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10308<span style="white-space:pre">	</span></span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">om</span></font></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 35.45pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">9/18/1996</span></font><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10365<span style="white-space:pre">	</span></span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">anu<span style="white-space:pre">	</span></span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">11/27/1996</span></font><br></p></td></tr><tr style="height: 34.55pt;"><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10383<span style="white-space:pre">	</span></span></font><br></p></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">sneha<span style="white-space:pre">	</span></span></font><br></p></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">12/16/1996</span></font><br></p></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10355<span style="white-space:pre">	</span></span></font><br></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">ashok</span></font></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">11/15/1996</span></font><br></td></tr><tr><td width="121" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; width: 90.4pt; border-image: initial; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">10278<span style="white-space:pre">	</span></span></font><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 21.3333px; white-space: pre;">	</span><br></td><td width="119" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 89.1pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">mony<span style="white-space:pre">	</span></span></font><br></td><td width="122" valign="top" style="border-top: none; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; width: 91.7pt; padding: 0cm 5.4pt; height: 34.55pt;"><font face="Times New Roman, serif"><span style="font-size: 21.3333px;">8/12/1996</span></font><br></td></tr></tbody></table></h4><h4><font color="#ff0000"><br></font></h4>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/sql/sql-operators') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/sql/sql-inner-join') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
