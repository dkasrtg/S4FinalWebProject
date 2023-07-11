<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assetsLoginClient/img/favicon.ico')?>">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/slicknav.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/progressbar_barfiller.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/gijgo.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/animate.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/animated-headline.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/magnific-popup.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/fontawesome-all.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/themify-icons.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/slick.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/nice-select.css')?>">
	<link rel="stylesheet" href="<?= base_url('assetsLoginClient/css/style.css')?>">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assetsLoginClient/img/logo/loder.png')?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <main class="login-body" data-vide-bg="<?= base_url('assetsLoginClient/img/login-bg.mp4')?>">
        <!-- Login Admin -->
        <form class="form-default" action="<?= bu('CTC_Login/login')?>" method="POST">
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="index.html"><img src="<?= base_url('assetsLoginClient/img/logo/loder.png')?>" alt=""></a>
                </div>
                <h2>Login Here</h2>

                <?php if(isset($error)) : ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>

                <div class="form-input">
                    <label for="name">Email</label>
                    <input  type="email" name="email" placeholder="Email" value="johndoe@example.com">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="mdp" placeholder="Password" value="password123">
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


    <script src="<?= base_url('assetsLoginClient/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assetsLoginClient/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/bootstrap.min.js')?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assetsLoginClient/js/jquery.slicknav.min.js')?>"></script>

    <!-- Video bg -->
    <script src="<?= base_url('assetsLoginClient/js/jquery.vide.js')?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assetsLoginClient/js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/slick.min.js')?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assetsLoginClient/js/wow.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/animated.headline.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.magnific-popup.js')?>"></script>

    <!-- Date Picker -->
    <script src="<?= base_url('assetsLoginClient/js/gijgo.min.js')?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url('assetsLoginClient/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.sticky.js')?>"></script>
    <!-- Progress -->
    <script src="<?= base_url('assetsLoginClient/js/jquery.barfiller.js')?>"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url('assetsLoginClient/js/jquery.counterup.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/waypoints.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.countdown.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/hover-direction-snake.min.js')?>"></script>

    <!-- contact js -->
    <script src="<?= base_url('assetsLoginClient/js/contact.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.form.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.validate.min.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/mail-script.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/jquery.ajaxchimp.min.js')?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url('assetsLoginClient/js/plugins.js')?>"></script>
    <script src="<?= base_url('assetsLoginClient/js/main.js')?>"></script>
    
    </body>
</html>