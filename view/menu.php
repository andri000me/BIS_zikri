<?php
if ($_SESSION['level']==1){ //jika session level bernilai 1
	include "menu/menu_admin.php"; // maka akan mengakses file include menu_admin.php
}else if($_SESSION['level']==2){// jika tidak maka session level akan bernilai 2
	include "menu/menu_regional.php";// maka akan mengakses file include menu_regional.php
}else if($_SESSION['level']==3){// jika tidak maka session level akan bernilai 3
	include "menu/menu_cabang.php"; // maka akan mengakses file include menu_cabang.php
}else{
	echo 'Tidak bisa diakses'; //jika tidak diantara kedua hal diatas, maka akan menampilkan ech0 dengan nama not access
}
?>
