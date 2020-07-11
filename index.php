<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:view/frame.php?page=home"); //akan mengakses file dengan lokasi view/frame.php
}else{
	 header("location:login.php");
}
?>
