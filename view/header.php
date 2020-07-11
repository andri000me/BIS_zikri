<?php

    $conn = mysqli_connect('localhost','root','','new_sewakantor');


        //insert::dokumen    
        if (isset($_POST["submit"])) {

            $kdc    = $_SESSION['username'];
            $kdr    = $_POST["kode_regional"];
            $nc     = $_SESSION['nama'];

               $doc_1  = $_FILES["doc_1"]["tmp_name"];
               $nfa_1  = $_FILES["doc_1"];
                $nf_1  = $_FILES["doc_1"]["name"]; 
                $uk_1  = $_FILES["doc_1"]["size"];
               $doc_2  = $_FILES["doc_2"]["tmp_name"];
                $nf_2  = $_FILES["doc_2"]["name"]; 
                $uk_2  = $_FILES["doc_2"]["size"];
               $doc_3  = $_FILES["doc_3"]["tmp_name"];
                $nf_3  = $_FILES["doc_3"]["name"];
                $uk_3  = $_FILES["doc_3"]["size"];
               $doc_4  = $_FILES["doc_4"]["tmp_name"];
                $nf_4  = $_FILES["doc_4"]["name"];
                $uk_4  = $_FILES["doc_4"]["size"];
               $doc_5  = $_FILES["doc_5"]["tmp_name"];
                $nf_5  = $_FILES["doc_5"]["name"];
                $uk_5  = $_FILES["doc_5"]["size"];
               $doc_6  = $_FILES["doc_6"]["tmp_name"];
                $nf_6  = $_FILES["doc_6"]["name"];
                $uk_6  = $_FILES["doc_6"]["size"];
               $doc_7  = $_FILES["doc_7"]["tmp_name"];
                $nf_7  = $_FILES["doc_7"]["name"];
                $uk_7  = $_FILES["doc_7"]["size"];
               $doc_8  = $_FILES["doc_8"]["tmp_name"];
                $nf_8  = $_FILES["doc_8"]["name"];
                $uk_8  = $_FILES["doc_8"]["size"];
            $doc_9  = $_POST["doc_9"] ;
            $doc_10 = $_POST["doc_10"];
            $status = '1';


        // $newname1   = uniqid();
        // $newname1  .= '.';
        // $newname1  .= $nf_1;
        //     $newname2   = uniqid();
        //     $newname2  .= '.';
        //     $newname2  .= $nf_2;
        // $newname3   = uniqid();
        // $newname3  .= '.';
        // $newname3  .= $nf_3;
        //     $newname4   = uniqid();
        //     $newname4  .= '.';
        //     $newname4  .= $nf_4;
        // $newname5   = uniqid();
        // $newname5  .= '.';
        // $newname5  .= $nf_5;
        //     $newname6   = uniqid();
        //     $newname6  .= '.';
        //     $newname6  .= $nf_6;
        // $newname7   = uniqid();
        // $newname7  .= '.';
        // $newname7  .= $nf_7;
        //     $newname8   = uniqid();
        //     $newname8  .= '.';
        //     $newname8  .= $nf_8;

        //upload::ke::folder::dokumen
         $upload1 = move_uploaded_file($doc_1, '../dokumen/1-shm-shgb/' .$nf_1);    
         $upload2 = move_uploaded_file($doc_2, '../dokumen/2-ktp/' .$nf_2);    
         $upload3 = move_uploaded_file($doc_3, '../dokumen/3-kk/' .$nf_3);    
         $upload4 = move_uploaded_file($doc_4, '../dokumen/4-akta/' .$nf_4);    
         $upload5 = move_uploaded_file($doc_5, '../dokumen/5-imb/' .$nf_5);    
         $upload6 = move_uploaded_file($doc_6, '../dokumen/6-pbb/' .$nf_6);    
         $upload7 = move_uploaded_file($doc_7, '../dokumen/7-tagihan/' .$nf_7);    
         $upload8 = move_uploaded_file($doc_8, '../dokumen/8-foto-gedung/' .$nf_8);   


         $ekstensiDokumen  = ['pdf'];
         $ekstensiGambar   = ['png','jpg','jpeg','pdf'];

         $ekstensiDoc1  = explode('.', $nf_1); $ekstensiDoc5  = explode('.', $nf_5); 
         $ekstensiDoc2  = explode('.', $nf_2); $ekstensiDoc6  = explode('.', $nf_6);
         $ekstensiDoc3  = explode('.', $nf_3); $ekstensiDoc7  = explode('.', $nf_7);
         $ekstensiDoc4  = explode('.', $nf_4); $ekstensiDoc8  = explode('.', $nf_8);

          //seleksi::ekstensi::dokumen
         $ekstensiDoc1  = strtolower(end($ekstensiDoc1));
         if ( !in_array($ekstensiDoc1, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC Lengkap Sertifikat (SHM/SHGB) dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc2  = strtolower(end($ekstensiDoc2));
         if ( !in_array($ekstensiDoc2, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC KTP pemilik (suami & istri) dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc3  = strtolower(end($ekstensiDoc3));
         if ( !in_array($ekstensiDoc3, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC Kartu Keluarga (KK) pemilik dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc4  = strtolower(end($ekstensiDoc4));
         if ( !in_array($ekstensiDoc1, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC Akta Nikah Pemilik dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc5  = strtolower(end($ekstensiDoc5));
         if ( !in_array($ekstensiDoc5, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC Izin Mendirikan Bangunan (IMB) dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc6  = strtolower(end($ekstensiDoc6));
         if ( !in_array($ekstensiDoc6, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC PBB Terakhir dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc7  = strtolower(end($ekstensiDoc7));
         if ( !in_array($ekstensiDoc7, $ekstensiDokumen)) {
            echo '<script> alert("Mohon lampirkan FC Tagihan Terakhir (Listrik,Tlp,Internet,PDAM) dalam bentuk PDF") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }
         $ekstensiDoc8  = strtolower(end($ekstensiDoc8));
         if ( !in_array($ekstensiDoc8, $ekstensiGambar)) {
            echo '<script> alert("Mohon lampirkan Foto Gedung dan kondisi sekitar") </script>';
            echo "<meta http-equiv='refresh' content='0; url=?page=dokumen'>";
            return false;
         }

         //cek::ukuran::dokumen
          if ($uk_1 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (1)") </script>';
            return false;
         }if ($uk_2 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (2)") </script>';
            return false;
         }if ($uk_3 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (3)") </script>';
            return false;
         }if ($uk_4 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (4)") </script>';
            return false;
         }if ($uk_5 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (5)") </script>';
            return false;
         }if ($uk_6 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (6)") </script>';
            return false;
         }if ($uk_7 > 2097152) {
             echo '<script> alert("ukuran terlalu besar !!! (7)") </script>';
            return false;
         }if ($uk_8 > 10485760) {
             echo '<script> alert("ukuran terlalu besar !!! (8)") </script>';
            return false;
         } 

         if  ( !$upload1 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload2 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload3 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload4 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload5 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload6 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload7 ) {
            header("location:../view/frame.php?page=dokumen");
         }if ( !$upload8 ) {
            header("location:../view/frame.php?page=dokumen");
         }else{

            //Query::insert::ke::database
            $query = "INSERT INTO tbl_dokumen 
                        VALUES ('','$kdc','$nc','$nf_1','$nf_2','$nf_3','$nf_4','$nf_5',
                                '$nf_6','$nf_7','$nf_8','$doc_9','$doc_10','$status','$kdr') ";

         $succes = mysqli_query($conn, $query);   
         if ($succes) {
             echo '<script>
                    alert("berhasil")
                   </script>'; 
         }else{
            echo '<script>
                    alert("gagal")
                   </script>'; 
         }

        }
    }

        
?>

<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            B I S | Dashboard
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

          function loadDoc() {
           setInterval(function(){

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
              document.getElementById("noti_number").innerHTML = this.responseText;
             }//
            };
            xhttp.open("GET", "data.php", true);
            xhttp.send();
           },1000);

          }
          loadDoc();

//============================================================================================

          function loadDoc2() {
           setInterval(function(){

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
              document.getElementById("noti_number2").innerHTML = this.responseText;
             }//
            };
            xhttp.open("GET", "data2.php", true);
            xhttp.send();
           },1000);

          }
          loadDoc2();

          // document.getElementById("jumlah_notifikasi");
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <!-- <link rel="stylesheet" href="../assets/assets/vendors/base/form.css"> -->
        <link href="../assets/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../assets/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

        <link href="../assets/components/datatables/dx/css/dx.common.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/components/datatables/dx/css/dx.greenmist.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/components/datatables/dx/css/dx.light.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/components/datatables/dx/css/dx.spa.css" rel="stylesheet" type="text/css"/>
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="../assets/assets/demo/default/media/img/logo/favicon.png" />

    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="../" class="m-brand__logo-wrapper">
                                        <img style="width: 110px;" alt="" src="../assets/assets/demo/default/media/img/logo/bis.png"/>
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
            <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                        <a  href="../web" class="m-menu__link">
                                            <i class="m-menu__link-icon flaticon-imac"></i>
                                            <span class="m-menu__link-text">
                                                Building Information System
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END: Horizontal Menu -->                               <!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <?php if ($_SESSION['level']==1) : ?>
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                       <span style="color:green;" class="" id="jumlah_notifikasi"></span>&nbsp;Notifikasi
                                      <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                         <a href="../view/frame.php?page=gedung" class="m-nav__link m-dropdown__toggle">
                                             <span class="m-topbar__userpic">
                                                 <img src="../assets/assets/app/media/img/users/mail.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                             </span>
                                         </a>
                                         <div class="m-dropdown__wrapper">
                                             <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="color: #4caf50"></span>
                                             <div class="m-dropdown__inner" style="background-color:#4caf50;color:black; font-size:14px; border-radius:6px;">
                                               <ul style="list-style:none" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">                 
                                                <!-- <a href="../view/frame.php?page=gedung" class="m-list-timeline__text"> -->
                                                    <a href="../view/frame.php?page=gedung" 
                                                        class="dropdown-item waves-effect waves-light">Sewa Gedung 
                                                        <span class="badge badge-danger ml-2" id="noti_number" style="font-weight: normal;"></span></a>
                                                    <a href="../view/frame.php?page=verifikasi_pbb" 
                                                        class="dropdown-item waves-effect waves-light">Status PBB 
                                                        <span class="badge badge-danger ml-2" id="noti_number2" style="font-weight: normal;"></span></a>
                                               </ul>
                                               
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php elseif ($_SESSION['level']==3) : ?>
                                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link">
                                            <!-- <i class="m-menu__link-icon flaticon-imac"></i> -->
                                            <span class="m-menu__link-text">
                                                Kantor Cabang <?php echo $_SESSION['nama']; ?>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                                    <?php else : ?>
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link">
                                            <!-- <i class="m-menu__link-icon flaticon-imac"></i> -->
                                            <span class="m-menu__link-text">
                                                Kantor <?php echo $_SESSION['nama']; ?>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                                        
                            <!-- akhir dari if -->
                                <?php endif ?>
                             </div>
                         </div>
                         <!-- END: Topbar -->
                     </div>
                 </div>
             </div>
         </header>
