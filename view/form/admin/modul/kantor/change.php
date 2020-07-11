<?php
include "koneksi.php";

  $query= mysqli_query($conn,"UPDATE kantor_cabang SET status='".$_POST['val']."' WHERE id='".$_POST['id']."'");

  if($query)
  {
    $q = mysqli_query($conn,"SELECT * FROM kantor_cabang  WHERE id='".$_POST['id']."'");
    $data = mysqli_fetch_assoc($query);
    echo $data['$status'];
  }
 ?>
