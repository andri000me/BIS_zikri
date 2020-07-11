<?php
include "../config/koneksi.php";
include "../config/fungsi.php";

if($_GET['proses']=='kantor-regional'){
	if (empty($_POST['nama_regional'])) {
	    echo "<script>window.alert('Inputan Anda tidak Lengkap');
	window.location=('../view/frame.php?page=regional')</script>";
	} else {
        $queryInsert = "INSERT INTO regional(
			kode_reg,
			nama_regional,
			nama_rm,
			email_rm
			)
			VALUES(
			'$_POST[kode_reg]',
			'$_POST[nama_regional]',
			'$_POST[nama_rm]',
			'$_POST[email_rm]'
			)";
            $result = mysqli_query($GLOBALS["___mysqli_ston"], $queryInsert) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
            header("location:../view/frame.php?page=regional");
            }

}elseif($_GET['proses']=='kantor-cab'){
	if (empty($_POST['nama_kantor'])) {
	    echo "<script>window.alert('Inputan Anda tidak Lengkap');
	window.location=('../view/frame.php?page=cabang')</script>";
	} else {
        $queryInsert = "INSERT INTO kantor_cabang(
			id_regional,nama_kantor,alamat,	harga_beli,
			harga_sewa,deposit,	perjanjian_sewa,pbb_2016,
			periode_awal,periode_akhir,biaya_notaris,pajak_sewa_beli,
			status_kepemilikan,masa_sewa,biaya_renovasi,tam_daya_listrik,
			pasang_telp,jth_tempo_pbb,lain2,keterangan,email_cabang,nama_bm
			)
			VALUES(
			'$_POST[id_regional]','$_POST[nama_kantor]','$_POST[alamat]','$_POST[harga_beli]',
			'$_POST[harga_sewa]','$_POST[deposit]','$_POST[perjanjian_sewa]','$_POST[pbb_2016]',
			'$_POST[periode_awal]','$_POST[periode_akhir]','$_POST[biaya_notaris]','$_POST[pajak_sewa_beli]',
			'$_POST[status_kepemilikan]','$_POST[masa_sewa]','$_POST[biaya_renovasi]','$_POST[tam_daya_listrik]',
			'$_POST[pasang_telp]','$_POST[jth_tempo_pbb]','$_POST[lain2]','$_POST[keterangan]','$_POST[email_cabang]','$_POST[nama_bm]'
			)";
            $result = mysqli_query($GLOBALS["___mysqli_ston"], $queryInsert) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
            header("location:../view/frame.php?page=cabang");
            }

}elseif($_GET['proses']=='us'){
	if (empty($_POST['username'])) {
	    echo "<script>window.alert('Inputan Anda tidak Lengkap');
	window.location=('../view/frame.php?page=us') </script>";
	} else {
		$foto = '../files/foto/'.date("Y-m-d-H-i-s") . '_' . $_FILES['foto']['name'];
        ProsesUploadFoto($_FILES['foto']);
        $now = date("Y-m-d-H-i-s");
        $queryInsert = "INSERT INTO tbl_user (
			username,password,nama,level,last_login,
			created_at,aktif,foto,email
			)
			VALUES(
			'$_POST[username]','$_POST[password]',
			'$_POST[nama]','$_POST[level]','$now',
			'$now','1','$foto','$_POST[email]'
			)";
            $result = mysqli_query($GLOBALS["___mysqli_ston"], $queryInsert) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
            header("location:../view/frame.php?page=us");
            }
}else{
	echo 'not found';
}
?>
