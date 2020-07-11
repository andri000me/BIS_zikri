<?php
include "../config/koneksi.php";
include "../config/fungsi.php";

if($_GET['get']=='update'){
    mysql_update_array($_GET['tbl'], $_POST, 'id', $_GET['id']);
}elseif($_GET['get']=='delete'){
    delete($_GET['tbl'],$_GET['id']);
}else{
return '';
}
?>