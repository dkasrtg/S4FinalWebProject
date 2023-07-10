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


<main class="login-body" data-vide-bg="<?= base_url('assetsClient/img/login-bg.mp4')?>">
    <!-- Login Admin -->
    <form class="form-default" action="<?= bu('CTC_Login/login')?>" method="POST">
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="<?= base_url('assetsClient/img/logo/loder.png')?>" alt=""></a>
            </div>
            <h2>Login Here</h2>

            <?php if(isset($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <div class="form-input">
                <label for="name">Email</label>
                <input  type="email" name="email" placeholder="Email">
            </div>
            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="mdp" placeholder="Password">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="login">
            </div>
            
            <!-- Forget Password -->
            <a href="#" class="forget">Forget Password</a>
            <!-- Forget Password -->
            <a href="<?= bu('CTC_Login/Register')?>" class="registration">Registration</a>
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