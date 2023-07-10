<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assetsClient/img/favicon.ico')?>">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/slicknav.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsClient/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsClient/css/progressbar_barfiller.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsClient/css/gijgo.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsClient/css/animate.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsClient/css/animated-headline.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/magnific-popup.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/fontawesome-all.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/themify-icons.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/slick.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/nice-select.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsClient/css/styleLogin.css')?>">
</head>
<body>
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assetsClient/img/logo/loder.png')?>" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="<?= base_url('assetsClient/img/login-bg.mp4')?>">
    <!-- Login Admin -->
    <form class="form-default" action="<?= bu('CTC_Login/addClient')?>" method="POST">
        
        <div class="login-form" style="width: 40%;">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="<?= base_url('assetsClient/img/logo/loder.png')?>" alt=""></a>
            </div>
            <h2>Registration Here</h2>

            <div class="row">
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">Name</label>
                    <input  type="text" name="nom" placeholder="Name">
                </div>
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">User name</label>
                    <input  type="text" name="prenom" placeholder="User name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">Date de naissance</label>
                    <input  type="datetime-local" name="date_de_naissance" placeholder="Birth day">
                </div>
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">Email Address</label>
                    <input type="email" name="mail" placeholder="Email Address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">Password</label>
                    <input type="password" name="mot_de_passe" placeholder="Password">
                </div>
                <div class="col-md-6 col-lg-6 form-input">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="mdp" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-input">
                <label for="name">Tél</label>
                <input  type="text" name="tel" placeholder="+261 .. .. ... ..">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="Registration">
            </div>
            <!-- Forget Password -->
            <a href="<?= bu('CTC_Login')?>" class="text-center registration">Se connecter</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


    <script src="<?= base_url('assetsClient/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assetsClient/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/bootstrap.min.js')?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assetsClient/js/jquery.slicknav.min.js')?>"></script>

    <!-- Video bg -->
    <script src="<?= base_url('assetsClient/js/jquery.vide.js')?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assetsClient/js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/slick.min.js')?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assetsClient/js/wow.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/animated.headline.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.magnific-popup.js')?>"></script>

    <!-- Date Picker -->
    <script src="<?= base_url('assetsClient/js/gijgo.min.js')?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url('assetsClient/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.sticky.js')?>"></script>
    <!-- Progress -->
    <script src="<?= base_url('assetsClient/js/jquery.barfiller.js')?>"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url('assetsClient/js/jquery.counterup.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/waypoints.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.countdown.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/hover-direction-snake.min.js')?>"></script>

    <!-- contact js -->
    <script src="<?= base_url('assetsClient/js/contact.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.form.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.validate.min.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/mail-script.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/jquery.ajaxchimp.min.js')?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url('assetsClient/js/plugins.js')?>"></script>
    <script src="<?= base_url('assetsClient/js/main.js')?>"></script>
    
    </body>
</html>