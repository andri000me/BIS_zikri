<?php
include "../config/koneksi.php"; //menyisipkan file koneksi.php di dalam folder config
include "../config/fungsi.php"; //menyisipkan file fungsi.php di dalam folder config
if  (isset($_SESSION['username'])){ //jika session dengan  username , maka akan menginclude file yang dibawah
	include "header.php"; //menyisipkan file header.php
	include "menu.php"; //menyisipkan file menu.php
	include "media.php"; //menyisipkan file media.php
	include "footer.php"; //menyisipkan file footer.php
}else{
	header("location:../");	//jika tidak,maka akan dikembalikan ke lokasi index.php
}?>
