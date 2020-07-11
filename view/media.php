<?php
if  ($_GET['page']=='home') // jika variabel GET page bernilai home
{
	include "form/dashboard.php"; //maka akan mengakses file dashboard.php
}
//modul kantor
else if  ($_GET['page']=='regional') // jika variabel GET page bernilai regional
{
    include "form/admin/modul/kantor/regional.php"; //maka akan mengakses file regional.php
}
else if  ($_GET['page']=='cabang') // jika variabel GET page bernilai cabang
{
    include "form/admin/modul/kantor/cabang.php"; // maka akan mengakses file cabang.php
}
else if  ($_GET['page']=='arsip') // jika variabel GET page bernilai dokumen
{
    include "form/admin/modul/kantor/arsip.php"; //maka akan mengakses file regional.php
}
else if  ($_GET['page']=='verifikasi') // jika variabel GET page bernilai dokumen
{
    include "form/admin/modul/kantor/verifikasi.php"; //maka akan mengakses file regional.php
}
else if  ($_GET['page']=='verifikasi_pbb') // jika variabel GET page bernilai dokumen
{
    include "form/admin/modul/kantor/verifikasi_pbb.php"; //maka akan mengakses file regional.php
}
else if  ($_GET['page']=='dokumen') // jika variabel GET page bernilai dokumen
{
    include "form/admin/modul/kantor/dokumen.php"; //maka akan mengakses file regional.php
}
else if  ($_GET['page']=='gedung') // jika variabel GET page bernilai gedung
{
    include "form/admin/modul/kantor/gedung.php"; // maka akan mengakses file gedung.php
}
//user setting
else if  ($_GET['page']=='us') //jika variabel GET page bernilai us
{
    include "form/admin/modul/user-settings/us.php"; // maka akan mengakses file us.php
}
else
{
	include "form/404.php"; // jika tidak makan akan mengakses file 404.php
}?>
