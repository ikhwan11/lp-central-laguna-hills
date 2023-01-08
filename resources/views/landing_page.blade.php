@extends('layout.main')

@section('content')

@php
$bg = asset('template2');
@endphp

<!-- banner starts -->
<section class="banner overflow-hidden" id="Home">
    <div class="slider top50">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url({{$bg}}/images/slider/1.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <span class="entry-category"><a href="listing-leftfilter.html" class="white"> Central Laguna Hills</a></span>
                            </div>
                            <h1 class="mb-2 white">Hunian Modern di Lokasi Asri</h1>
                            <p class="white mb-4">Bangunan tertata rapi dan di lengkapi dengan <strong>Smart Cluster & Smart Community</strong> sehingga memberikan kenyamanan dan keamanan bagi para penghuni</p>
                            <a href="#" class="nir-btn">Booking Sekarang</a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url({{$bg}}/images/slider/2.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <span class="entry-category"><a href="listing-leftfilter.html" class="white"> Central Laguna Hills</a></span>
                            </div>
                            <h1 class="mb-2 white">Pusat bisnis terbesar di tembesi</h1>
                            <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <div class="slider-button d-flex justify-content-center">
                                <a href="#" class="nir-btn">Lihat Brochure</a>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url({{$bg}}/images/slider/3.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <span class="entry-category"><a href="listing-leftfilter.html" class="white"> Central Laguna Hills</a></span>
                            </div>
                            <h1 class="mb-2 white">Perumahan dengan fasilitas terlengkap di Tembesi</h1>
                            <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="#" class="nir-btn">Lihat Brochure</a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- banner ends -->



<section class="about-us pb-5 pt-10" id="Tentang">
    <div class="container">
        <div class="about-image-box">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="about-content">
                        <h4 class="bg-theme white px-4 py-1 d-inline-block">Tentang Kami</h4>
                        <h2 class="border-b mb-2 pb-2 ">Live Your Dream at Central Laguna Hills</h2>
                        <p class="mb-0"><strong>Central Laguna Hills</strong> merupakan hunian yang paling prestisius dikelasnya dan dipersembahkan oleh Developer terbesar & terpercaya yaitu <strong>Central Group</strong><br><br>sebuah kawasan dengan <strong>desain modern, asri, dan tata ruang yang rapi</strong> memberikan estetika yang nyaman untuk hunian dan usaha. serta dilengkapi dengan fasilitas lengkap yang akan menjadi perumahan pertama dengan taman wisata.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="about-image p-3 box-shadow">
                        <img src="{{$bg}}/images/trending/trending5.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="about-us bg-white pb-6 pt-0" id="WhyUs">
    <div class="container">

        <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
            <h2 class="m-0">Mengapa <span>Pilih</span> Kami?</h2>
            <p>Central Laguna Hills dibangun oleh Developer Terbesar & Terpercaya di Batam</p>
        </div>

        <!-- why us starts -->
        <div class="why-us">
            <div class="why-us-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="flaticon-location-pin theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Lokasi Strategis</a></h4>
                                <p class="mb-0"><strong>Central Laguna Hills</strong> berada di lokasi yang dikelilingi oleh fasilitas pendidikan, area perbelanjaan dan area rekreasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-road theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Akses Mudah</a></h4>
                                <p class="mb-0"><strong>Central Laguna Hills</strong> terletak di depan jalan raya utama dan mudah dijangkau dan terlihat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-tree theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Fasilitas Lengkap</a></h4>
                                <p class="mb-0">Terdapat 11 faslitaas umum yang dapat digunakan oleh penghuni <strong>Central Laguna Hills</strong> bersama orang-orang tersayang</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-building theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Kualitas Bangunan</a></h4>
                                <p class="mb-0"><strong>Central Laguna Hills</strong> memberikan standar kualitas bangunan yang baik untuk kenyamanan para penghuni</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-users theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Estate Management</a></h4>
                                <p class="mb-0">Kawasan tertata rapi yang dikelola oleh Estate Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-feed theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Sistem Cluster</a></h4>
                                <p class="mb-0">menerapkan sistem cluster dengan <strong>One Gate System</strong> & didukung dengan <strong>Smart Cluster</strong> sehingga memberikan kenyamanan dan kemanan penuh kepada para penghuni karena dapat memantau CCTV cluster hanya dengan Smartphone</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-home theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Konsep Desain</a></h4>
                                <p class="mb-0">Mengusung konsep desain rumah <strong>Modern Minimalist</strong> sehingga memberikan banyak benefit, selain ruangannya jadi fungsional dan meminimalisir biaya perawatan pada rumah selain itu juga memiliki sisa luas tanah yang luas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item text-center bg-lgrey">
                            <div class="why-us-icon">
                                <i class="fa fa-leaf theme"></i>
                            </div>
                            <div class="why-us-content">
                                <h4><a href="#">Growing House Cocept</a></h4>
                                <p class="mb-0">Rumah memiliki spacious backyard untuk kebutuhan pengembangan bangunan atau digunakan untuk kebutuhan oleh masing-masing penghuni</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trend-btn text-center"><a href="#" class="nir-btn">Booking Sekarang</a></div>
        </div>
        <!-- why us ends -->
    </div>
</section>



<section class="trending bg-grey pt-9" id="Property">
    <div class="container">
        <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
            <h2 class="m-0">Tipe <span>Bangunan</span> kami</h2>
            <p>Central Laguna hills</p>
        </div>
        <div class="trend-box">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item box-shadow rounded">
                        <div class="trend-image">
                            <img src="{{$bg}}/images/trending/trending1.jpg" alt="image">
                            <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>

                        </div>
                        <div class="trend-content p-4 bg-white">
                            <h5 class="theme">Rumah</h5>
                            <h4>Type 32</h4>
                            <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                <div class="entry-author">
                                    <p>Mulai dari<small class="d-block theme fw-bold">Rp. 200 Jt-an</small></p>
                                </div>
                                <div class="entry-metalist d-flex align-items-center">
                                    <a href="" class="nir-btn">Selengkapnya</a>
                                </div>
                            </div>
                            <p class="mb-0">memiliki luas dengan 12x5 meter persegi dengan sisa lahan belakang dan depan</p>

                        </div>
                    </div>
                </div>

                <!--  -->

                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item box-shadow rounded">
                        <div class="trend-image">
                            <img src="{{$bg}}/images/trending/trending2.jpg" alt="image">
                            <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>

                        </div>
                        <div class="trend-content p-4 bg-white">
                            <h5 class="theme">Rumah</h5>
                            <h4>Type 36</h4>
                            <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                <div class="entry-author">
                                    <p>Mulai dari<small class="d-block theme fw-bold">Rp. 300 Jt-an</small></p>
                                </div>
                                <div class="entry-metalist d-flex align-items-center">
                                    <a href="" class="nir-btn">Selengkapnya</a>
                                </div>
                            </div>
                            <p class="mb-0">memiliki luas dengan 12x5 meter persegi dengan sisa lahan belakang dan depan</p>

                        </div>
                    </div>
                </div>

                <!--  -->

                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item box-shadow rounded">
                        <div class="trend-image">
                            <img src="{{$bg}}/images/trending/trending3.jpg" alt="image">
                            <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>

                        </div>
                        <div class="trend-content p-4 bg-white">
                            <h5 class="theme">Rumah</h5>
                            <h4>Type 45</h4>
                            <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                <div class="entry-author">
                                    <p>Mulai dari<small class="d-block theme fw-bold">Rp. 400 Jt-an</small></p>
                                </div>
                                <div class="entry-metalist d-flex align-items-center">
                                    <a href="" class="nir-btn">Selengkapnya</a>
                                </div>
                            </div>
                            <p class="mb-0">memiliki luas dengan 12x5 meter persegi dengan sisa lahan belakang dan depan</p>

                        </div>
                    </div>
                </div>

                <!--  -->
            </div>
        </div>
    </div>
</section>



<section class="about-us about-us1 pb-6" style="background-image: url({{$bg}}/images/bg/bg2.jpg)">
    <div class="container">
        <div class="about-image-box">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="about-content">
                        <h4 class="bg-theme white px-4 py-1 d-inline-block">Sejarah kami</h4>
                        <h2 class="border-b mb-2 pb-2">Making living spaces More Beautiful at Central Laguna hills</h2>
                        <p class="mb-0"><strong>Central Laguna hills</strong> merupakan project dari Central group yang mulai dikembangkan pada tahun 2018 hingga saat ini sudah terjual lebih dari setengah luas kawasan</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="video-button text-center">
                        <div class="call-button text-center position-relative">
                            <button type="button" class="play-btn">
                                <i class="fa fa-play bg-blue"></i>
                            </button>
                        </div>
                        <div class="video-figure"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="trending recent-articles pb-4 border-t pt-9" id="Promo">
    <div class="container">
        <div class="section-title mb-4 pb-1 w-75 mx-auto text-center">
            <h2 class="m-0">Klaim <span>Promo Spesial</span> Khusus hari ini!</h2>
            <p>Promo hanya dapat di kalim melalu website ini</p>
        </div>
        <div class="recent-articles-inner">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trend-item box-shadow bg-white p-4 mb-2">
                        <div class="trend-image">
                            <img src="images/trending/trending10.jpg" alt="image">
                        </div>
                        <div class="trend-content-main pt-3">
                            <div class="trend-content">
                                <h5 class="theme">Technology</h5>
                                <h4><a href="detail-1.html">How a developer and designer duo at Deutsche Bank keep remote alive.</a></h4>
                                <p class="mb-3">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt="" class="rounded-circle me-1">
                                        <span>Sollmond Nell</span>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                            <li><i class="fa fa-comments"></i> 5k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trend-item box-shadow bg-white p-4 mb-2">
                        <div class="trend-image">
                            <img src="images/trending/trending12.jpg" alt="image">
                        </div>
                        <div class="trend-content-main pt-3">
                            <div class="trend-content">
                                <h5 class="theme">Inspiration</h5>
                                <h4><a href="detail-1.html">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                <p class="mb-3">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt="" class="rounded-circle me-1">
                                        <span>David Scott</span>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                            <li><i class="fa fa-comments"></i> 5k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="trend-item box-shadow bg-white p-4 mb-2">
                        <div class="trend-image">
                            <img src="images/trending/trending13.jpg" alt="image">
                        </div>
                        <div class="trend-content-main pt-3">
                            <div class="trend-content">
                                <h5 class="theme">Public</h5>
                                <h4><a href="detail-1.html">We Provide Services To Grow Your Business more Sell Affiliate Products</a></h4>
                                <p class="mb-3">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/3.jpg" alt="" class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                            <li><i class="fa fa-comments"></i> 5k</li>
                                        </ul>
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

<!-- Discount action starts -->
<section class="discount-action discount-action1 pb-0 pt-0">
    <div class="container">
        <div class="call-banner" style="background-image: url({{$bg}}/images/bg/bg2.jpg);">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-8 p-0">
                    <div class="call-banner-inner bg-theme1">
                        <div class="trend-content-main">
                            <div class="trend-content p-5">
                                <h5 class="mb-1 white">Wanna to Sell Or Rent??</h5>
                                <h2 class="mb-4 white">Looking to Buy a New Property or Sell an Existing One?</h2>
                                <div class="section-btns d-flex align-items-center">
                                    <a href="grid-leftfilter.html" class="nir-btn me-4">Rent Properties <i class="fa fa-arrow-right white pl-1"></i></a>
                                    <a href="grid-rightfilter.html" class="nir-btn">Buy Properties <i class="fa fa-arrow-right white pl-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 p-0"></div>
            </div>
        </div>
        <div class="partner-wrapper bg-lgrey p-4">
            <ul class="attract-slider">
                <li class="px-3"><img src="images/cl-1.png" alt=""></li>
                <li class="px-3"><img src="images/cl-2.png" alt=""></li>
                <li class="px-3"><img src="images/cl-3.png" alt=""></li>
                <li class="px-3"><img src="images/cl-4.png" alt=""></li>
                <li class="px-3"><img src="images/cl-5.png" alt=""></li>
                <li class="px-3"><img src="images/cl-3.png" alt=""></li>
                <li class="px-3"><img src="images/cl-4.png" alt=""></li>
                <li class="px-3"><img src="images/cl-5.png" alt=""></li>
            </ul>
        </div>
    </div>
</section>
<!-- Discount action Ends -->

<!-- our teams starts -->
<section class="our-team pb-6 pt-19">
    <div class="container">
        <div class="section-title mb-6 pb-1 w-75 text-center mx-auto">
            <h2 class="m-0">Meet Our <span>Excellent Agents</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="images/team/img1.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-white">
                            <h4 class="mb-0">Salmon Thuir</h4>
                            <p class="mb-0">Senior Agent</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="images/team/img2.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-white">
                            <h4 class="mb-0">Horke Pels</h4>
                            <p class="mb-0">Head Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-white">
                            <h4 class="mb-0">Solden kalos</h4>
                            <p class="mb-0">Supervisor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="images/team/img3.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-white">
                            <h4 class="mb-0">Nelson Bam</h4>
                            <p class="mb-0">Quality Assurance</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="images/team/img5.jpg" alt="team">
                        </div>
                        <div class="team-content text-center bg-white p-3">
                            <h4 class="mb-0">Cacics Coold</h4>
                            <p class="mb-0">Asst. Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our teams Ends -->

<!-- testomonial start -->
<section class="testimonial pb-6 pt-9" style="background-image:url(images/testimonial.png)">
    <div class="container">
        <div class="section-title mb-4 pb-1 w-75 mx-auto text-center">
            <h2 class="m-0">Good Reviews By <span>Clients</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row review-slider1">
            <div class="col-sm-4 item">
                <div class="testimonial-item1 text-center">
                    <div class="details">
                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                    </div>
                    <div class="author-info mt-2">
                        <a href="#"><img src="images/testimonial/img1.jpg" alt=""></a>
                        <div class="author-title">
                            <h4 class="m-0 theme2">Jared Erondu</h4>
                            <span>Supervisor</span>
                        </div>
                    </div>
                    <i class="fa fa-quote-left mb-2"></i>
                </div>
            </div>
            <div class="col-sm-4 item">
                <div class="testimonial-item1 text-center">
                    <div class="details">
                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                    </div>
                    <div class="author-info mt-2">
                        <a href="#"><img src="images/testimonial/img2.jpg" alt=""></a>
                        <div class="author-title">
                            <h4 class="m-0 theme2">Cadic Vegeta</h4>
                            <span>Sr. Consultant</span>
                        </div>
                    </div>
                    <i class="fa fa-quote-left mb-2"></i>
                </div>
            </div>
            <div class="col-sm-4 item">
                <div class="testimonial-item1 text-center">
                    <div class="details">
                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                    </div>
                    <div class="author-info mt-2">
                        <a href="#"><img src="images/testimonial/img3.jpg" alt=""></a>
                        <div class="author-title">
                            <h4 class="m-0 theme2">Jonathan Beri</h4>
                            <span>Sales Manager</span>
                        </div>
                    </div>
                    <i class="fa fa-quote-left mb-2"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial ends -->





<!-- content-line start -->
<div class="content-line mt-0">
    <div class="content-line-inner bg-theme2 pb-6 pt-6 p-5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-between text-lg-start text-center">
                <div class="col-lg-9">
                    <h2 class="mb-0 white">
                        Looking for a dream home?
                    </h2>
                    <p class="white">We can help you realize your dream of a new home</p>
                </div>
                <div class="col-lg-3">
                    <a href="listing-leftfilter.html" class="nir-btn-black float-none float-lg-end">Fine More Properties</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-line ends -->

@endsection