<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Oxhen - Responsive HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap v5.1.3 Landing Page Template" />
    <meta name="keywords" content="bootstrap v5.1.3, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <!-- fevicon -->
    <link rel="shortcut icon" href="{{asset('template')}}/images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('template')}}/css/bootstrap.min.css" type="text/css" />

    <!-- animation -->
    <link rel="stylesheet" href="{{asset('template')}}/css/aos.css" />

    <!-- slider -->
    <link rel="stylesheet" href="{{asset('template')}}/css/swiper-bundle.min.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('template')}}/css/materialdesignicons.min.css" type="text/css" />

    <!-- css -->
    <link rel="stylesheet" href="{{asset('template')}}/css/style.min.css" type="text/css" />


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand text-uppercase" href="index-1.html">
                <img class="logo-light" src="{{asset('template')}}/images/logo-light.png" alt="" height="50">
                <img class="logo-dark" src="{{asset('template')}}/images/logo-dark.png" alt="" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Why-us">Why Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Type-Rumah">Type Rumah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-3 mb-lg-0" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary nav-btn" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                    Booking Sekarang
                </button>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <h4 class="modal-title" id="exampleModalLongTitle">Masukan data diri</h4>
                    </div>
                    <div class="d-grid gap-3">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Masukan nama" autofocus>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Nomor whatsapp">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Nomor whatsapp">
                            </div>

                        </form>
                        <button type="button" class="btn btn-primary btn-lg">Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <div class="overflow-hidden-x">

        <!-- Start Home -->
        @yield('content')

        <!-- START FOOTER -->
        <footer class="section footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-10 text-center">
                        <a href="javascript:void(0)"><img src="images/logo-light.png" height="24" alt=""></a>
                        <p class="mx-auto mt-sm-4">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Home</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">About us</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Order</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Member</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </footer>
        <!-- END FOOTER -->


        <!-- FOOTER-ALT -->
        <div class="footer-alt pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-white fs-15">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Oxhen. Design by
                                <i class="mdi mdi-heart text-danger"></i> Themesdesign
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER-ALT -->
    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!--Custom js-->
    <script src="{{asset('template')}}/js/counter.js"></script>

    <!--Bootstrap Js-->
    <script src="{{asset('template')}}/js/bootstrap.bundle.min.js"></script>

    <!-- animation -->
    <script src="{{asset('template')}}/js/aos.js"></script>

    <script src="{{asset('template')}}/js/swiper-bundle.min.js"></script>

    <!-- contact -->
    <script src="{{asset('template')}}/js/contact.js"></script>

    <!-- Team particles-->
    <script src="{{asset('template')}}/js/particles.min.js"></script>

    <!-- App Js -->
    <script src="{{asset('template')}}/js/app.js"></script>

</body>

</html>