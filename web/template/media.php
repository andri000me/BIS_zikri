<?php
if(empty($_GET['page'])){
    $_GET['page'] ='';
}
if  ($_GET['page']=='profil')
{
	include "form/profil.php";
}
else if  ($_GET['page']=='ketentuan')
{
	include "form/ketentuan.php";
}
else if  ($_GET['page']=='jadwal')
{
    include "form/jadwal.php";
}
else if  ($_GET['page']=='denah')
{
    include "form/denah.php";
}
else if  ($_GET['page']=='kontak')
{
    include "form/kontak.php";
}
else if  ($_GET['page']=='cari')
{
    include "form/cari.php";
}
else if  ($_GET['page']=='detail-alat')
{
    include "form/detail-alat.php";
}
else if  ($_GET['page']=='detail-bahan')
{
    include "form/detail-bahan.php";
}
else if  ($_GET['page']=='pengembalian')
{
    include "form/pengembalian.php";
}
else if  ($_GET['page']=='bukti-pinjam')
{
    include "form/bukti-pinjam.php";
}
else if  ($_GET['page']=='info-kembali')
{
    include "form/konfirm-kembali.php";
}
else if  ($_GET['page']=='cek-peminjaman')
{
    include "form/cek-peminjaman.php";
}
else
{
	include "form/home.php";
}?>