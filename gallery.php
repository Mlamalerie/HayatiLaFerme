<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from preview.colorlib.com/theme/capture/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 18:33:25 GMT -->
    <head>
        <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        
         <link rel="stylesheet" href="css/navbar.css">
    </head>
    <body>
        <div id="colorlib-page">
            <?php
            require_once('navbar.php');
       
            ?>
            <div id="colorlib-main">
                <section class="ftco-section bg-light ftco-bread">
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center">
                            <div class="col-md-9 ftco-animate">
                                <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Gallery</span></p>
                                <h1 class="mb-3 bread">Galleries</h1>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ftco-section-2">
                    <div class="photograhy">
                        <div class="row no-gutters">
                           
                           <?php 
                            $dir    = 'images/gallerie';
                            $files1 = scandir($dir,1);
                        
                            for ($i = 0; $i < count($files1); $i++){
                               
                                if(is_file($dir."/".$files1[$i])) {
                            ?>
                            <div class="col-md-4 ftco-animate">
                                <a href="<?= $dir?>/<?= rawurlencode($files1[$i])?>" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(<?= $dir?>/<?= rawurlencode($files1[$i]) ?>);">
                                    <div class="overlay"></div>
                                    <div class="text text-center">
                                        <h3>Work 01</h3>
                                        <span class="tag">Model</span>
                                    </div>
                                </a>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </section>
                <footer class="ftco-footer ftco-bg-dark ftco-section">
                    <div class="container px-md-5">
                        <div class="row mb-5">
                            <div class="col-md">
                                <div class="ftco-footer-widget mb-4 ml-md-4">
                                    <h2 class="ftco-heading-2">Category</h2>
                                    <ul class="list-unstyled categories">
                                        <li><a href="#">Photography <span>(6)</span></a></li>
                                        <li><a href="#">Fashion <span>(8)</span></a></li>
                                        <li><a href="#">Technology <span>(2)</span></a></li>
                                        <li><a href="#">Travel <span>(2)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="ftco-footer-widget mb-4">
                                    <h2 class="ftco-heading-2">Archives</h2>
                                    <ul class="list-unstyled categories">
                                        <li><a href="#">November 2018 <span>(105)</span></a></li>
                                        <li><a href="#">October 2018 <span>(212)</span></a></li>
                                        <li><a href="#">September 2018 <span>(150)</span></a></li>
                                        <li><a href="#">August 2018 <span>(100)</span></a></li>
                                        <li><a href="#">July 2018 <span>(200)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="ftco-footer-widget mb-4">
                                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                                    <div class="block-23 mb-3">
                                        <ul>
                                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="224b4c444d625b4d5750464d4f434b4c0c414d4f">[email&#160;protected]</span></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.html"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>

    <!-- Mirrored from preview.colorlib.com/theme/capture/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 18:33:25 GMT -->
</html>