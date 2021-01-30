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
                                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Gallerie</span></p>
                                <h1 class="mb-3 bread">Quelques photos</h1>
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
                                        <h3><?=  explode(".", $files1[$i])[0]?></h3>
                                        <span class="tag">2020</span>
                                    </div>
                                </a>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </section>
                  <?php
            require_once('footer.php');
       
            ?>
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