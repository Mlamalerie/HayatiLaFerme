<?php
$okindex = false;
$okabout = false;
$okproduct = false;
$okgallery = false;
$okblog = false;
$okcontact = false;
/*
$page = basename($_SERVER['PHP_SELF']);
    switch ($page) {
        case "about.php":
            $okabout = true;
            break;
        case "product.php":
            $okproduct = true;
            break; 
        case "gallery.php":
            $okgallery = true;
            break;

        case "blog.php":
            $okblog = true;
            break;
        case "contact.php":
            $okcontact = true;
            break; 
         case "index.php":
            $okindex = true;
            break; 
        

    }
*/
?>



<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center ">
    <div class="my-0">
        <a href="index.html"><img id="hayati-logo" src="images/logo.png" class="rounded mx-auto d-block" width="95%"></a>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li <?php if($okindex) { ?> class="colorlib-active" <?php } ?>><a href="index.php">Accueil</a></li>


                <li <?php if($okabout) { ?> class="colorlib-active" <?php } ?>><a href="about.html">Qui somme-nous ?</a></li>
                

                <li <?php if($okproduct) { ?> class="colorlib-active" <?php } ?>><a href="contact.html">Produits</a></li> 
                <li <?php if($okgallery) { ?> class="colorlib-active" <?php } ?>><a href="gallery.php">Gallerie</a></li>
                <li <?php if($okblog) { ?> class="colorlib-active" <?php } ?>><a href="blog.html">Actualités</a></li>
                <li <?php if($okcontact) { ?> class="colorlib-active" <?php } ?>><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

    </div>

    <div class="colorlib-footer">
        <h3>Soutenez les producteurs !</h3>
        <div class="d-flex justify-content-center">
            <ul class="d-flex align-items-center">
                <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>

                <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-youtube"></i></a></li>
                <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
                <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</aside> 