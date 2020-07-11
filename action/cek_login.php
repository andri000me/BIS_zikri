<?php
include "../config/koneksi.php";
include "../config/fungsi.php";

$username = antiinjection($_POST['username']);
$pass     = antiinjection($_POST['password']);

    $login = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tbl_user WHERE username='$username' AND password='$pass' AND aktif='1'");
    $r = mysqli_fetch_array($login);
// Apabila username dan password ditemukan
    if ($r > 0) {
        set_timeout();
        add_session(
            $r['id'],
            $r['username'],
            $r['nama'],
            $r['level']
            );
        header("location:../view/frame.php?page=home");
    } else {
        header("location:../");
    }
?>