@extends('layout.main')

@section('content')

@php

$bg = asset('template');
@endphp

<section class="section home home-2" id="home" style="background-image: url({{$bg}}/images/clh-masterplan.jpg);">
    <video autoplay muted loop id="myVideo">
        <source src="{{asset('template')}}/images/Office-69952.mp4" type="video/mp4">
    </video>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-7">
                <div class="home-heading">
                    <h1 class="mb-3 text-white">Rumah dengan fasilitas terlengkap di Tembesi</h1>
                </div>
                <p class="text-white-50 fs-20"></p>
                <div class="home-btn hstack gap-2 flex-column d-sm-block">
                    <button type="button" class="btn btn-white me-1" data-bs-toggle="modal" data-bs-target="#modalForm">Download Brochure</button>

                    <!-- modal -->
                    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel">Masukan data diri Anda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="recipient-name" placeholder="Masukan nama" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="recipient-name" placeholder="Nomor whatsapp">
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Download Brochure</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- een modal -->

                    <a class="modal-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                        <span class="avatar-sm">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-play"></i>
                            </span>
                        </span>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                            <div class="modal-content home-modal p-1">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="VisaChipCardVideo" class="video-box" controls="">
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                    <!--Browser does not support <video> tag -->
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
            </div><!-- end col-->
        </div><!-- end row-->
    </div><!--end container-->
</section>
<!-- End Home -->

<div class="container-fluid">
    <div class="row">
        <div class="home-shape-arrow">
            <a href="#features" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a>
        </div>
    </div><!--end row-->
</div><!--end container-->

<!-- Start features -->
<section class="section feature" id="Why-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-4">
                    <h2 class="heading">Why Central Laguna Hills</h2>
                    <p class="text-muted fs-17">Ut enim ad minima veniam quis nostrum exercitationem ullam
                        corporis suscipit laboriosam nisi commodi consequatur.</p>
                </div>
            </div><!-- end col-->
        </div><!-- end row-->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded d-flex">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="content">
                                <h5 class="title">Fully Responsive</h5>
                                <p class="text-muted">One disadvantage of Lorum Ipsum is that in certain letters which is said more than.</p>
                                <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Fresh Layouts</h5>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem', which well-known is said which is said.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Modern Workflow</h5>
                            <p class="text-muted mt-2">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded d-flex">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="content">
                                <h5 class="title">Fully Responsive</h5>
                                <p class="text-muted">One disadvantage of Lorum Ipsum is that in certain letters which is said more than.</p>
                                <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Fresh Layouts</h5>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem', which well-known is said which is said.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Modern Workflow</h5>
                            <p class="text-muted mt-2">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded d-flex">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="content">
                                <h5 class="title">Fully Responsive</h5>
                                <p class="text-muted">One disadvantage of Lorum Ipsum is that in certain letters which is said more than.</p>
                                <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Fresh Layouts</h5>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem', which well-known is said which is said.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-7 mt-sm-4">
                <div data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-card p-3 py-sm-4 rounded">
                        <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">Modern Workflow</h5>
                            <p class="text-muted mt-2">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>
                            <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row my-sm-5 py-5 align-items-center justify-content-between">
            <div class="col-lg-6">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <div class="card border-0 mb-3 mb-lg-0">
                        <img src="{{asset('template')}}/images/feature1.jpg" class="img-fluid rounded-3" alt="">
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-5">
                <div data-aos="fade-left" data-aos-duration="1800">
                    <h3 class="mb-2">Modern Minimalist Home Design</h3>
                    <ul class="feature-list">
                        <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>High Ceiling</li>
                        <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Open Layout Concept</li>
                        <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Taman depan dan belakang luas</li>
                        <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Kawasan anti banjir</li>
                        <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Fasilitas lengkap</li>
                    </ul>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">Download Brochure</button>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <h3 class="feature-heading">We aim to help busy peoples</h3>
                    <p class="text-muted">Lorem text is also used to demonstrate the appearance of different typefaces and layouts.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a class="accordion-button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div>
                                        <p class="mb-0">Flexible access to facilities.</p>
                                        <p class="mb-0 fs-13 text-muted">Our new key fobs make it so easy!</p>
                                    </div>
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-14 text-muted mb-1">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                    <a href="javascript:void(0)">
                                        Check it out <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div>
                                        <p class="mb-0">Snacks, drinks, coffee, and more.</p>
                                        <p class="mb-0 fs-13 text-muted">Keep your engine going with free food and drinks.</p>
                                    </div>
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-14 text-muted mb-0">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                    <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                        Check it out <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div>
                                        <p class="mb-0">On site tech support</p>
                                        <p class="mb-0 fs-13 text-muted">Connectivity, power, and IT issues solved in no time.</p>
                                    </div>
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-14 text-muted mb-0">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                    <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                        Check it out <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6">
                <div data-aos="fade-left" data-aos-duration="1800">
                    <div class="card bg-transparent border-0">
                        <img src="{{asset('template')}}/images/feature2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</section>
<!-- end Features -->

<!-- Start cta -->
<section class="section cta" style="background-image: url({{$bg}}/images/cta.jpg) fixed no-repeat;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div data-aos="fade-down" data-aos-duration="1800">
                    <h3 class="fw-bold">Stay Connected</h3>
                    <p>Now that we've aligned the details, it's time to get things mapped out and organized. Now that we've aligned the details.</p>
                    <a class="btn btn-primary" href="javascript:void(0)">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End cta -->

<!-- Start Reviews -->
<section class="section reviews" id="Type-Rumah">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h2 class="heading">What they say about us honest reviews</h2>
                    <p class="text-muted fs-17">Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum mauris sit amet arcu
                        fringilla auctor In eleifend maximus nisi sed vulputate.</p>
                </div>
            </div><!-- end col-->
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators mb-0">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="card bg-transparent reviews-box h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card reviews-card">
                                                <div class="card-body text-center">
                                                    <img class="img-fluid" src="{{asset('template')}}/images/user/user1.png" alt="">
                                                    <div class="mt-3">
                                                        <h6 class="mb-0">Brandon Carney</h6>
                                                        <p class="text-muted mb-0 fs-14">Vice president</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="reviews-heading">Client Reviews</h5>
                                            <div class="d-flex align-items-top">
                                                <div class="flex-shrink-0">
                                                    <img class="reviews-quote-1" src="{{asset('template')}}/images/quote.png" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2 mt-2">
                                                    <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <div class="card bg-transparent reviews-box h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card reviews-card">
                                                <div class="card-body text-center">
                                                    <img class="img-fluid" src="{{asset('template')}}/images/user/user2.png" alt="">
                                                    <div class="mt-3">
                                                        <h6 class="mb-0">Brandon Carney</h6>
                                                        <p class="text-muted mb-0 fs-14">Vice president</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="reviews-heading">Client Reviews</h5>
                                            <div class="d-flex align-items-top">
                                                <div class="flex-shrink-0">
                                                    <img class="reviews-quote-1" src="{{asset('template')}}/images/quote.png" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2 mt-2">
                                                    <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card bg-transparent reviews-box h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card reviews-card">
                                                <div class="card-body text-center">
                                                    <img class="img-fluid" src="{{asset('template')}}/images/user/user.png" alt="">
                                                    <div class="mt-3">
                                                        <h6 class="mb-0">Brandon Carney</h6>
                                                        <p class="text-muted mb-0 fs-14">Vice president</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="reviews-heading">Client Reviews</h5>
                                            <div class="d-flex align-items-top">
                                                <div class="flex-shrink-0">
                                                    <img class="reviews-quote-1" src="{{asset('template')}}/images/quote.png" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2 mt-2">
                                                    <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-->
        </div><!-- End row-->
    </div><!-- end container-->
</section>
<!-- End Reviews -->

<!-- START pricing -->
<section class="section pricing" id="pricing">
    <div class="bg-shape"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h2 class="heading">Pricing</h2>
                    <p class="text-muted fs-17">Donec nec nibh vestibulum, fringilla ante nec, convallis turpis.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rhoncus tristique nibh.</p>
                </div>
            </div><!-- end col-->
        </div><!-- End row -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <div class="card pricing-box mx-1 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Standard</h6>
                                <h1 class="mb-0 pt-2 fw-bold">$10 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                            </div>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">150+ Templets</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">250+ Icons</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Build Tools</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-close-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Free Update</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-close-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Source Files</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-grid">
                                <a href="javascript:void(0)" class="btn btn-outline-primary">Choose Plan</a>
                            </div>
                        </div>
                    </div><!-- End card -->
                </div>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-6">
                <div class="card pricing-box mx-1 mt-4 active">
                    <span class="pricing-lable">populer</span>
                    <div class="card">
                        <div class="card-body">
                            <h6>Premium</h6>
                            <h1 class="mb-0 pt-2 fw-bold">$30 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                        </div>
                    </div>
                    <div class="p-4">
                        <ul class="list-unstyled">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shring-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary">
                                                <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 fs-14">290+ Templets</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shring-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary">
                                                <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 fs-14">400+ Icons</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shring-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary">
                                                <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 fs-14">Build Tools</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shring-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary">
                                                <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 fs-14">Free Update</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shring-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary">
                                                <i class="mdi mdi-close-circle-outline text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 fs-14">Source Files</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-grid">
                            <a href="javascript:void(0)" class="btn btn-outline-primary active">Choose Plan</a>
                        </div>
                    </div>
                </div><!-- End card -->
            </div><!-- col end -->
            <div class="col-lg-4 col-md-6">
                <div data-aos="fade-left" data-aos-duration="1800">
                    <div class="card pricing-box mx-1 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Enterprise</h6>
                                <h1 class="mb-0 pt-2 fw-bold">$39 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                            </div>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">350+ Templets</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">999+ Icons</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Build Tools</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Free Update</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shring-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 fs-14">Source Files</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-grid">
                                <a href="javascript:void(0)" class="btn btn-outline-primary">Choose Plan</a>
                            </div>
                        </div>
                    </div><!-- End card -->
                </div>
            </div><!-- col end -->
        </div><!-- End row -->
    </div><!-- End container -->
</section>
<!-- END pricing -->

<!-- Start cta -->
<section class="section cta">
    <marquee behavior="" direction="left">
        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </marquee>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div data-aos="fade-down" data-aos-duration="1800">
                    <div class="cta-heading">Today Offer <span class="mb-3">
                            <span class="counter_value" data-target="37">0</span>
                            <span>% Off</span>
                        </span>!
                    </div>
                    <p>Now that we've aligned the details, it's time to get things mapped out and organized. Now that we've aligned the details.</p>
                    <!-- <p class="fs-18">Limited signup only. Order today before the discount period end.</p> -->
                    <a class="btn btn-primary" href="javascript:void(0)">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End cta -->

<!-- Start Team -->
<section class="section team" style="z-index: 1;">
    <div id="particles-js" style="z-index: -1;">
    </div>
    <!-- end particles -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h2 class="heading">Team</h2>
                    <p class="text-muted fs-17">Build responsive, mobile-first projects on the web
                        with the world's most popular front-end component library.</p>
                </div>
            </div><!-- end col-->
        </div><!-- end row -->
        <div class="row gy-4">
            <div class="col-lg-3 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img class="img-fluid" src="{{asset('template')}}/images/user/user.png" alt="image">
                        <div class="team-social-icons">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card-text-2">
                        <h5 class="fw-bold mb-0">Bao Pan</h5>
                        <p class="mb-0 fs-13 text-muted">Back End Developer</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img class="img-fluid" src="{{asset('template')}}/images/user/user1.png" alt="image">
                        <div class="team-social-icons">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card-text-2">
                        <h5 class="fw-bold mb-0">Ines Durr</h5>
                        <p class="mb-0 fs-13 text-muted">Front End Developer</p>
                    </div>
                </div>
            </div><!-- End col -->
            <div class="col-lg-3 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img class="img-fluid" src="{{asset('template')}}/images/user/user2.png" alt="image">
                        <div class="team-social-icons">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card-text-2">
                        <h5 class="fw-bold mb-0">Stephan Vogt</h5>
                        <p class="mb-0 fs-13 text-muted">Bid Manager</p>
                    </div>
                </div>
            </div><!-- End col -->
            <div class="col-lg-3 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img class="img-fluid" src="{{asset('template')}}/images/user/user3.png" alt="image">
                        <div class="team-social-icons">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" target="">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-card-text-2">
                        <h5 class="fw-bold mb-0">Cong Chia</h5>
                        <p class="mb-0 fs-13 text-muted">Team Lead</p>
                    </div>
                </div>
            </div> <!-- End col-->
        </div><!-- end row-->
    </div><!-- end cotainer-->
</section>
<!-- End Team -->

<!-- Start contact -->
<section class="section contact" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h2 class="heading">Contact Us</h2>
                    <p class="text-muted mt-2 fs-17">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row align-items-center gy-3">
            <div class="col-lg-6">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <div class="card">
                        <div class="card-body">
                            <div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="100%" height="325" style="border: 0" allowfullscreen></iframe> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div data-aos="fade-left" data-aos-duration="1800">
                    <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                        <span id="error-msg"></span>
                        <div class="row rounded-3 py-3">
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end form-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End contect -->

@endsection