<?php
include "../config/koneksi.php";
include "../config/fungsi.php";
include "../config/fungsi_mailer.php";
// $query = select_gedung();
$query = select_email($_GET['id']);
if($_GET['id']){
	// print_r($_GET['id']);
	$data = mysqli_fetch_assoc($query);
	// print_r($data);die();
	kirimemail($data);
}
else
{
	while ($data = mysqli_fetch_assoc($query)) {
		kirimemail($data);
	}
}
?>
