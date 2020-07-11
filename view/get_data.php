<?php

$con    = mysqli_connect('localhost','root','','new_sewakantor');
$id     = $_POST['id_dokumen'];
$sql    = mysqli_query($con, "UPDATE tbl_dokumen SET status = 2 WHERE id_dokumen = '".$id."' ");

// $result = $con->query($sql);
// return $query;
?>