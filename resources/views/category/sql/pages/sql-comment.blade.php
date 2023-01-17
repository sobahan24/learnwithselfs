@extends('layouts.master')

@section('title')
    SQL | Comment | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.sql.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Comments</h1>
                    </div>
                    <div class="description py-3">
                        <p>SQL comments</p><p>Comments is used to add a line which is not executed in the output.</p><p><b>Single line Comments</b></p><p>It starts with - -&nbsp;</p><div class="alert alert-primary"><p>Example:</p><p>- - Select all the employee</p><p>SELECT * FROM employee;</p></div><p>Example:</p><div class="alert alert-secondary"><p>SELECT * FROM employee <font color="#00ff00">- - WHERE salary = 50,000 ;</font></p></div><p>In this example, the details of all the employee will be generated , not the salary. Here the salary is commented.</p><p>Multi-line comments</p><p>Multiple line comments starts with / *&nbsp; &nbsp; &nbsp; &nbsp;*/ .</p><p>Any thing you write between the commented line it will&nbsp; not be considered ( ignored ).</p><p>Example:&nbsp;</p><p>/ * This will not be considered * /</p><div class="alert alert-secondary"><p>Example:&nbsp;</p><p>/ * SELECT * FROM employee ;</p><p>SELECT * FROM student ; * /</p><p>SELECT * FROM library ;</p></div><p>In this example, employee and student is commented, so details of library will be generated or fetched.</p><hr><p><br></p><p><br></p><p><br></p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/sql/sql-update') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/sql/sql-delete') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
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
