@extends("layouts.master")

@section('title')
    Learn with Self - Online Web Tutorials
@endsection

@section('content')
    <div class="modal fade" id="SendQueryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="p-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="py-4 mt-2 text-centesr">
                        <h3>Hire a Web Developer</h3>
                        <div class="underline mx-autos bg-red"></div>
                        <a href="mailto:a.sobahan24@gmail.com" class="mt-3" class="text-primary">Email: contact@learnwithself.com </a>
                        <div class="mt-2">
                            <hr>
                            <p class="mb-0">We usually get back to our clients in 1 day.
                                <br>
                                Thank You for contacting Learn with Self.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="slider-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="owl-carousel four-cards owl-theme ">
                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/17.png') }}" class="w-100" alt="PHP Tutorials">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        PHP Tutorials
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="php.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/18.png') }}" class="w-100" alt="HTML Tutorial">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        HTML Tutorial
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="html.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/19.png') }}" class="w-100" alt="jQuery Tutorial">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        jQuery Tutorial
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="jquery.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/16.png') }}" class="w-100" alt="Laravel 5.8 Solution">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        Laravel 5.8 Solution
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="laravel-5-8.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/12.png') }}" class="w-100" alt="Python Tutorials">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        Python Tutorials
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="python.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/20.png') }}" class="w-100" alt="SQL Tutorials">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        SQL Tutorials
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="sql.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/13.png') }}" class="w-100" alt="Laravel 8 Tutorials">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        Laravel 8 Tutorials
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="laravel-8.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                    <img src="{{ asset('ui/frontend/images/scourcecategory/12.png') }}" class="w-100" alt="Python Programs">
                                    <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        Python Programs
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="python-programs.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/15.png') }}" class="w-100" alt="Java Programming">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        Java Programming
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="programming-in-java.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card bg-f2f2f2 border">
                                <img src="{{ asset('ui/frontend/images/scourcecategory/14.png') }}" class="w-100" alt="PHP OOP Tutorials">
                                <div class="py-2 text-center">
                                    <h6 class="mb-0 font-weight-bold text-uppercase">
                                        PHP OOP Tutorials
                                    </h6>
                                    <div class="row px-2">
                                        <div class="col-md-12 mt-2">
                                            <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a href="php-oop.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 my-auto">
                    <h3 class="fw-bold">Learn with Self</h3>
                    <div class="underline bg-red"></div>
                    <p class="">
                        Learn with Self provides a collection of tutorials about PHP, Mysql,
                        Laravel, Python Django, Codeigniter, Bootstrap v3, v4, 4+, jQuery,
                        Ajax, Laravel APIs, Composer Packages, Git, etc.
                        You will find the best example and tutorials about PHP and laravel.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="card-2">
                        <div class="card-body-2">
                            <h3 class="card-2-heading">Hire a Web Developer</h3>
                            <div class="underline"></div>
                            <p class="">
                                Do you want to build a modern, lightweight and responsive website?
                            </p>
                            <div class="text-right">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#SendQueryModal" class="btn bg-red text-capitalize text-white py-2">Hire Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-f2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="div">
                        <h4 class="global-heading">Popular Tutorials</h4>
                        <div class="underline bg-red"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 mt-4">
                            <div class="owl-carousel free-yt-courses owl-theme ">
                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/17.png') }}" class="w-100" alt="PHP Tutorials">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                PHP Tutorials
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="php.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/18.png') }}" class="w-100" alt="HTML Tutorial">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                HTML Tutorial
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="html.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/19.png') }}" class="w-100" alt="jQuery Tutorial">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                jQuery Tutorial
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="jquery.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/16.png') }}" class="w-100" alt="Laravel 5.8 Solution">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                Laravel 5.8 Solution
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="laravel-5-8.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/12.png') }}" class="w-100" alt="Python Tutorials">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                Python Tutorials
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="python.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/20.png') }}" class="w-100" alt="SQL Tutorials">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                SQL Tutorials
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="sql.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/13.png') }}" class="w-100" alt="Laravel 8 Tutorials">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                Laravel 8 Tutorials
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="laravel-8.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                            <img src="{{ asset('ui/frontend/images/scourcecategory/12.png') }}" class="w-100" alt="Python Programs">
                                            <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                Python Programs
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="python-programs.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/15.png') }}" class="w-100" alt="Java Programming">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                Java Programming
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="programming-in-java.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card bg-f2f2f2 border">
                                        <img src="{{ asset('ui/frontend/images/scourcecategory/14.png') }}" class="w-100" alt="PHP OOP Tutorials">
                                        <div class="py-2 text-center">
                                            <h6 class="mb-0 font-weight-bold text-uppercase">
                                                PHP OOP Tutorials
                                            </h6>
                                            <div class="row px-2">
                                                <div class="col-md-12 mt-2">
                                                    <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="php-oop.html" class="p-2 text-white bg-blue d-block">Start Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card-2">
                                <div class="card-body-3">
                                    <h3 class="card-3-heading">Advertise your brand with Learn with Self</h3>
                                    <div class="underline my-4"></div>
                                    <p class="">
                                        Thousands of eyes view this page everyday.!
                                        <br>
                                        To Advertise here, reach us at
                                        <a href="mailto:info@fundaofwebit.com" class="text-white">info@learnwithself.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 populerYoutubeCourse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <i class="fa-brands fa-youtube funda-yt"></i>
                        <h4 class="global-heading text-white">
                            Popular YouTube Free Courses
                        </h1>
                        <div class="underline bg-white mx-auto"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-6 mt-4">
                            <div class="card bg-f2f2f2 border shadow">
                                <img src="{{ asset('ui/frontend/images/no-image.jpg') }}" class="w-100" alt="Php Admin Panel">
                                <div class="py-2 text-center">
                                    <div class="youtube-heading">
                                        <h5>Php Admin Panel</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="px-2">
                                                <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 mt-4">
                            <div class="card bg-f2f2f2 border shadow">
                                <img src="{{ asset('ui/frontend/images/no-image.jpg') }}" class="w-100" alt="Laravel 5.8 Ecommerce Website">
                                <div class="py-2 text-center">
                                    <div class="youtube-heading">
                                        <h5>Laravel 5.8 Ecommerce Website</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="px-2">
                                                <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 mt-4">
                            <div class="card bg-f2f2f2 border shadow">
                                <img src="{{ asset('ui/frontend/images/no-image.jpg') }}" class="w-100" alt="Django 3.x Crash Course">
                                <div class="py-2 text-center">
                                    <div class="youtube-heading">
                                        <h5>Django 3.x Crash Course</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="px-2">
                                                <a href="#" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 mt-4">
                            <div class="card bg-f2f2f2 border shadow">
                                <img src="{{ asset('ui/frontend/images/no-image.jpg') }}" class="w-100" alt="Laravel 8 Ecommerce">
                                <div class="py-2 text-center">
                                    <div class="youtube-heading">
                                        <h5>Laravel 8 Ecommerce</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="px-2">
                                                <a href="https://www.youtube.com/watch?v=Fz0pTzHptGE" class="p-2 text-white bg-red d-block" target="_blank">Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-f2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="div">
                        <h4 class="global-heading">Popular Posts</h4>
                        <div class="underline bg-red"></div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 mt-4">
                            <a href="post/laravel-8-full-ecommerce-tutorial-source-code.html">
                                <div class="card shadow border">
                                    <div class="card-body">
                                        <h4 class="mb-2 f-20 font-weight-bold text-dark">
                                            Laravel 8 Ecommerce Project Tutorial Source Code
                                        </h4>
                                        <a href="post/laravel-8-full-ecommerce-tutorial-source-code.html" class="text-danger "> read more <i class="fa fa-angle-right"></i></a>
                                        <div class="mt-3 ">
                                            <label class="text-secondary"><i class="fa fa-calendar"></i> 10-11-2022</label>
                                            <label class="mr-2"> | Share : </label>
                                            <a href="#" target="_blank" class="btn btn-sm btn-success f-14 text-white">
                                                <i class="fa-brands fa-whatsapp font-weight-bold"></i> Whatsapp
                                            </a>

                                            <p class="p70 d-none">https://www.fundaofwebit.com/post/laravel-8-full-ecommerce-tutorial-source-code</p>
                                            <button onclick="copyToClipboard('.p70')" class="btn btn-sm f-14 btn-info text-white">Copy Link</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-12 mt-4">
                            <a href="post/how-to-install-vue-js-project-with-vue-cli.html">
                                <div class="card shadow border">
                                    <div class="card-body">
                                        <h4 class="mb-2 f-20 font-weight-bold text-dark">
                                            How to install vue js and create vue project with vue cli
                                        </h4>
                                        <a href="post/how-to-install-vue-js-project-with-vue-cli.html" class="text-danger "> read more <i class="fa fa-angle-right"></i></a>
                                        <div class="mt-3 ">
                                            <label class="text-secondary"><i class="fa fa-calendar"></i> 25-10-2022</label>
                                            <label class="mr-2"> | Share : </label>
                                            <a href="#" target="_blank" class="btn btn-sm btn-success f-14 text-white">
                                                <i class="fa-brands fa-whatsapp font-weight-bold"></i> Whatsapp
                                            </a>

                                            <p class="p56 d-none">https://www.fundaofwebit.com/post/how-to-install-vue-js-project-with-vue-cli</p>
                                            <button onclick="copyToClipboard('.p56')" class="btn btn-sm f-14 btn-info text-white">Copy Link</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-12 mt-4">
                            <a href="post/how-to-integrate-summernote-in-bootstrap-5-in-php-html.html">
                                <div class="card shadow border">
                                    <div class="card-body">
                                        <h4 class="mb-2 f-20 font-weight-bold text-dark">
                                            How to integrate Summernote in Bootstrap 5 in PHP or HTML
                                        </h4>
                                        <a href="post/how-to-integrate-summernote-in-bootstrap-5-in-php-html.html" class="text-danger "> read more <i class="fa fa-angle-right"></i></a>
                                        <div class="mt-3 ">
                                            <label class="text-secondary"><i class="fa fa-calendar"></i> 11-10-2022</label>
                                            <label class="mr-2"> | Share : </label>
                                            <a href="#" target="_blank" class="btn btn-sm btn-success f-14 text-white">
                                                <i class="fa-brands fa-whatsapp font-weight-bold"></i> Whatsapp
                                            </a>

                                            <p class="p53 d-none">https://www.fundaofwebit.com/post/how-to-integrate-summernote-in-bootstrap-5-in-php-html</p>
                                            <button onclick="copyToClipboard('.p53')" class="btn btn-sm f-14 btn-info text-white">Copy Link</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-3">
                                <a href="#" class="btn btn-md bg-red text-white w-100">VIEW ALL POST</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 order-3 order-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest-posts my-3">
                                <h5>Latest Posts</h5>
                                <a href="laravel-8/how-to-login-with-email-or-phone-number-in-laravel.html"><i class="fa fa-angle-right"></i> Login with email or phone number in laravel </a>
                                <a href="ecommerce-template/bootstrap-ecommerce-footer-template-in-html-css.html"><i class="fa fa-angle-right"></i> Ecommerce Footer Page Design </a>
                                <a href="ecommerce-template/checkout-page-design-using-bootstrap-5.html"><i class="fa fa-angle-right"></i> Ecommerce Checkout Page Design </a>
                                <a href="ecommerce-template/cart-wishlist-template-design-using-html-css-bootstrap-5.html"><i class="fa fa-angle-right"></i> Ecommerce Cart / Wishlist Template Design </a>
                                <a href="git/how-to-check-or-set-username-and-email-address-in-git-using-cmd.html"><i class="fa fa-angle-right"></i> Check or Set username and email </a>
                                <a href="ecommerce-template/products-view-template-design-using-html-css-bootstrap5.html"><i class="fa fa-angle-right"></i> Ecommerce Products View Template Design </a>
                                <a href="ecommerce-template/products-template-design-using-html-css-bootstrap5.html"><i class="fa fa-angle-right"></i> Ecommerce Products List Design </a>
                                <a href="ecommerce-template/ecommerce-category-design-using-html-css-bootstrap.html"><i class="fa fa-angle-right"></i> Ecommerce Categories Design </a>
                                <a href="ecommerce-template/ecommerce-navbar-design-using-html-css-bootstrap.html"><i class="fa fa-angle-right"></i> Ecommerce Navbar Design </a>
                                <a href="ecommerce-template/how-to-make-ecommerce-slider-design-using-html-css-and-bootstrap.html"><i class="fa fa-angle-right"></i> Ecommerce Slider Design </a>
                                <a href="laravel-tips/laravel-concat-two-columns-using-eloquent-model.html"><i class="fa fa-angle-right"></i> Concat two columns using eloquent model </a>
                                <a href="laravel-tips/how-to-get-or-select-specific-columns-in-laravel-eloquent.html"><i class="fa fa-angle-right"></i> Get or Select specific columns in eloquent </a>
                                <a href="laravel-tips/laravel-get-array-of-ids-from-collection.html"><i class="fa fa-angle-right"></i> Get Array of IDs from Eloquent </a>
                                <a href="laravel-tips/laravel-get-data-with-multiple-ids.html"><i class="fa fa-angle-right"></i> Get data with multiple ids </a>
                                <a href="laravel-tips/laravel-get-data-from-database-by-id.html"><i class="fa fa-angle-right"></i> Get data by id </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
