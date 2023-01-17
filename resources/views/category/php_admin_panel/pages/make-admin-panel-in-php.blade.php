@extends('layouts.master')

@section('title')
    Make Admin Panel | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.php_admin_panel.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>Part 1-Admin Panel: How to Setup (Arrange Files) and make a Admin Panel</h1>
                    </div>
                    <div class="description py-3">
                        <div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;">Code for : Structure and Set-Up of Admin Panel in PHP</span></font></div><div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;"><br></span></font></div><div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;"><span style="font-weight: bolder;">Downlooad the File from given drive:&nbsp;</span></span></font></div><div style="font-family: Roboto, sans-serif;"><a href="https://drive.google.com/file/d/1Xz-ei5uWr-ZgBzBdHBUt0-0R3z3WsOW0/view?usp=share_link" target="_blank" style="color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent; transition: all 0.2s ease-in-out 0s; cursor: pointer;"><font color="#0000ff">https://drive.google.com/file/d/1Xz-ei5uWr-ZgBzBdHBUt0-0R3z3WsOW0/view?usp=sharing</font></a><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;"><span style="font-weight: bolder;"><br></span></span></font></div><div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;"></span></font></div><div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;"><br></span></font></div><div style="font-family: Roboto, sans-serif;"><font color="#222222" face="Arial, Tahoma, Helvetica, FreeSans, sans-serif"><span style="font-size: 15px; white-space: pre-wrap;">Here.. in this video, i am doing how to make a admin panel for a simple Website. so, i have downloaded a admin template from free Bootstrap admin template. and i have set up all the things, like, navbar.php, header.php, footer.php, etc..</span></font></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/php-admin-panel') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/php-admin-panel/register-data-in-php') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>  
                </div>
                    @include('category.php_admin_panel.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
