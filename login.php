<?php
session_start(); //session dimulai
if(isset($_SESSION['username'])){ // jika session  mengandung username , maka
    header("location:view/frame.php?page=home"); //akan mengakses url view/frame.php?page=home
}
?>
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            B I S - LOGIN
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="assets/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/assets/style-login.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/assets/demo/default/media/img/logo/favicon.png" />
        <style>
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form
        {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 300px;
            height: 340px;
            padding: 40px 40px;
            box-sizing: border-box;
            background: #f0ede5;
            opacity: 0.95;
            border-radius: 12px;            
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;                    
            outline: none;
            height: 25px;            
            font-size: 14px;
        }        
    </style>

    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content" style="background-image: url(assets/assets/app/media/img//bg/bg-4.jpg)">
                    <div class="contact-form">
                        <div class="m-login__signin">
                            <!-- <img src="assets/assets/app/media/img/logos/logo-login.png" style="width: 200px;" class="avatar"> -->
                            <div class="m-login__head">
                                <h3 class="m-login__title" style="text-align: center;">
                                        Sign In 
                                </h3>
                            </div><br><br>
                            <form class="m-login__form m-form" action="action/cek_login.php" method="post">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                </div><br><br>
                                <div class="m-login__form-action" style="text-align: center;">
                                    <button type="submit" class="btn btn-secondary btn-block m-btn m-btn--pill m-btn--custom m-btn--air"
                                    style="color: #ffffff;">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div>   
            </div>       
                <!-- <div class="footer-copyright">
                    <div class="container">
                    &copy; <?php date('Y')?> BIS by <a href="http://ksusb.co.id/" target="_blank" style="color: inherit;"><strong>KSP</strong>SB</a>
                    </div>
                </div> -->
        </div>
        
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="assets/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="assets/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->
        <!--begin::Page Snippets -->
        <script src="assets/assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>
