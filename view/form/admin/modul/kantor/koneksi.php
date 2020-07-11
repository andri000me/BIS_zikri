<?php
//by hardiyansyah
//local
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "sewakantor_update";

// Koneksi dan memilih database di server
($GLOBALS["___mysqli_ston"] = mysqli_connect($server, $username, $password)) or die("Koneksi gagal");
mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die("Database tidak bisa dibuka");
?>
