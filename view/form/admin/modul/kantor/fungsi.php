<?php
//include koneksi ke database
include "koneksi.php";
session_start();
//function session
function add_session($value0,$value1,$value2,$value3) {
  $_SESSION["id"]         = $value0;
  $_SESSION["username"]   = $value1;
  $_SESSION["nama"]       = $value2;
  $_SESSION["level"]      = $value3;
}
//function tanggal indo
function tgl_indo($tgl){
      $tanggal = substr($tgl,8,2);
      $bulan = getBulan(substr($tgl,5,2));
      $tahun = substr($tgl,0,4);
      return $tanggal.' '.$bulan.' '.$tahun;
  }

//function bulan
  function getBulan($bln){
        switch ($bln){
          case 1:
            return "Januari";
            break;
          case 2:
            return "Februari";
            break;
          case 3:
            return "Maret";
            break;
          case 4:
            return "April";
            break;
          case 5:
            return "Mei";
            break;
          case 6:
            return "Juni";
            break;
          case 7:
            return "Juli";
            break;
          case 8:
            return "Agustus";
            break;
          case 9:
            return "September";
            break;
          case 10:
            return "Oktober";
            break;
          case 11:
            return "November";
            break;
          case 12:
            return "Desember";
            break;
        }
    }
    //function format rupiah
function format_rupiah($angka){
  $rupiah=number_format($angka,0,',','.');
  return 'Rp. '.$rupiah;
}
//function anti sql injection
function antiinjection($data){
  $filter_sql = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
function timer(){
  $time=1000;
  $_SESSION['timeout']=time()+$time;
}
function set_timeout(){
  $timeout=$_SESSION['timeout'];
  if(time()<$timeout){
    timer();
    return true;
  }else{
    unset($_SESSION['timeout']);
    return false;
  }
}
function get_rundom(){
  $number = substr(rand(1111111,9999999), -7);
  return $number;
}
function cek_session() {
  if(isset($_SESSION['username'])){
    $url =  header("location:view/frame.php?page=home");
  }else{
    $url = header("location:");
  }
  return $url;
}
function UploadFile($fupload_name){
  //direktori file
  $vdir_upload = "../files/file/";
  $vfile_upload = $vdir_upload . $fupload_name;
  $tipe_file   = $_FILES['fupload']['type'];
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
function UploadFoto($fupload_name){
  //direktori file
  $vdir_upload = "../files/foto/";
  $vfile_upload = $vdir_upload . $fupload_name;
  $tipe_file   = $_FILES['foto']['type'];
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);
}
function proses_upload($nama_file){
    $batas_size ='3000000';
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file = date("Y-m-d-H-i-s").'_'.$_FILES['fupload']['name'];
    $size = filesize($lokasi_file);
    $file_extension = strtolower(substr(strrchr($nama_file, "."), 1));
     if ($size > $batas_size) {
        header('location:../gagal_1');
    } else {
      switch ($file_extension) {
                case "png":$ctype = "image/png";
                break;
                case "jpeg": case "jpg": $ctype = "image/jpg";
                break;
                default:
                $ctype = "application/proses";
            }
            if ($file_extension == 'php') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');
        window.location=('../')</script>";
            } else if ($file_extension == 'exe') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.EXE');
        window.location=('../')</script>";
            } else if ($file_extension == 'doc') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.Doc');
        window.location=('../')</script>";
            } else if ($file_extension == 'docx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.Docx');
        window.location=('../')</script>";
            } else if ($file_extension == 'pdf') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PDF');
        window.location=('../')</script>";
            } else if ($file_extension == 'gif') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.GIF');
        window.location=('../')</script>";
            } else if ($file_extension == 'xls') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.XLS');
        window.location=('../')</script>";
            } else if ($file_extension == 'ppt') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PPT');
        window.location=('../')</script>";
            } else if ($file_extension == 'pptx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PPTX');
        window.location=('../')</script>";
            } else if ($file_extension == 'xlsx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.XLSX');
        window.location=('../')</script>";
            } elseif (!empty($lokasi_file)) {
              UploadFile($nama_file);
              return 1;
    }else{
       return 0;
    }
  }
}
function ProsesUploadFoto($nama_file){
    $batas_size ='3000000';
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = date("Y-m-d-H-i-s").'_'.$_FILES['foto']['name'];
    $size = filesize($lokasi_file);
    $file_extension = strtolower(substr(strrchr($nama_file, "."), 1));
     if ($size > $batas_size) {
        header('location:../gagal_1');
    } else {
      switch ($file_extension) {
                case "png":$ctype = "image/png";
                break;
                case "jpeg": case "jpg": $ctype = "image/jpg";
                break;
                default:
                $ctype = "application/proses";
            }
            if ($file_extension == 'php') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');
        window.location=('../')</script>";
            } else if ($file_extension == 'exe') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.EXE');
        window.location=('../')</script>";
            } else if ($file_extension == 'doc') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.Doc');
        window.location=('../')</script>";
            } else if ($file_extension == 'docx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.Docx');
        window.location=('../')</script>";
            } else if ($file_extension == 'pdf') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PDF');
        window.location=('../')</script>";
            } else if ($file_extension == 'gif') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.GIF');
        window.location=('../')</script>";
            } else if ($file_extension == 'xls') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.XLS');
        window.location=('../')</script>";
            } else if ($file_extension == 'ppt') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PPT');
        window.location=('../')</script>";
            } else if ($file_extension == 'pptx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PPTX');
        window.location=('../')</script>";
            } else if ($file_extension == 'xlsx') {
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.XLSX');
        window.location=('../')</script>";
            } elseif (!empty($lokasi_file)) {
              UploadFoto($nama_file);
              return 1;
    }else{
       return 0;
    }
  }
}
function cek_pass($id,$pass){
  $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT password FROM tbl_user where id ='$id'");
  $r=mysqli_fetch_array($query);
  if($r['password']==$pass){
    return 1;
  }else{
    return 0;
  }
}
function get_admin(){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tbl_user");
    return $query;
}
function cek_admin($username){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(id) as jum FROM tbl_user where username ='$username'");
    $r=mysqli_fetch_array($query);
    if($r['jum'] >= 1){
        return 1;
    }else{
        return 0;
    }
}
function select_all_where($table,$id,$value){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM $table WHERE $id LIKE '%$value%'");
    return $query;
}
function delete($table,$id){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM $table WHERE id ='$id'");
    if($query){
      return 99;
    }else{
      return 0;
    }
}
function select_arsip($table){
    $query = mysqli_query("SELECT * FROM $table");
}
function mysql_update_array($table, $data, $id_field, $id_value) {
  foreach ($data as $field=>$value) {
    $fields[] = sprintf("`%s` = '%s'", $field, $value);
  }
  $field_list = join(',', $fields);
  $query = mysqli_query($GLOBALS["___mysqli_ston"], sprintf("UPDATE `%s` SET %s WHERE `%s` = %s", $table, $field_list, $id_field, intval($id_value)));
  return $query;
}
function Insertdata($table,$field,$data){
    $field_values= implode(',',$field);
    $data_values=implode(',',$data);
    $query=mysqli_query($GLOBALS["___mysqli_ston"],"INSERT into". " ".$table." ".$field_values. "VALUES(".$data_values.")");
    return $query;
  }
  function select_all($table){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM $table");
    return $query;
}
function select_cabang(){
    $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *,concat((SELECT TIMESTAMPDIFF(MONTH,CURDATE(),periode_akhir)),' Bulan') AS sisa_sewa FROM kantor_cabang");
    return $query;
}

function select_gedung(){
  $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT
            a.nama_kantor,a.id_regional,b.nama_regional,
            a.periode_awal,a.periode_akhir,a.masa_sewa,
            a.status_kepemilikan,a.status,
            concat( ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ), ' Bulan' ) AS sisa_sewa,
            a.email_cabang,a.nama_bm,b.email_rm,b.nama_rm
        FROM
            kantor_cabang a
            join regional b on b.id = a.id_regional
        WHERE
            a.status_kepemilikan LIKE '%sewa%' AND a.status in ('0','1')
            AND ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ) <=1");
  return $query;
}


function select_email()
{
  $send_email=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT
            a.nama_kantor,a.id_regional,b.nama_regional,
            a.periode_awal,a.periode_akhir,a.masa_sewa,
            a.status_kepemilikan,a.status,
            concat( ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ), ' Bulan' ) AS sisa_sewa,
            a.email_cabang,a.nama_bm,b.email_rm,b.nama_rm
        FROM
            kantor_cabang a
            join regional b on b.id = a.id_regional
        WHERE
            a.status_kepemilikan LIKE '%sewa%' AND a.status in ('0','1')
            AND ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ) <=1");
  return $send_email;
}

// return [
//  'msg_box_title' => array(
//    'login' => array(
//      'success' => "Success",
//      'failed' => "Login Failed"
//    ),
//    'error' => array(
//      'login' => array(
//        'exception' => 'Error exception'
//      ),
//      'failed_entry' => 'Exception',
//      'error_box' => 'Perhatian...!'
//    ),
//    'confirm' => 'Apakah anda yakin ingin melanjutkan proses ini ?',
//    'confirm_data_change' => 'Data change confirmation..?'
//  ),
//     'direct_access_notice' => "Direct Access is forbidden..!",
//     'save_success' => "Data berhasil disimpan..",
//     'save_failed' => "Data gagal disimpan..",
//     'update_success' => "Data berhasil diupdate..",
//     'update_failed' => "Data gagal diupdate..",
//     'delete_success' => "Data berhasil dihapus..",
//     'delete_failed' => "Data gagal dihapus!!",
//     'unknown_err'=>'oops, terjadi kesalahan mohon untuk mencoba beberapa saat lagi..',
//     'validation_notice' => "Mohon dikoreksi kembali inputan anda..!",
//     'delete_confirm' => "Anda yakin akan menhapus data ini ?",
//     'update_confirm' => "Anda yakin akan mengubah data ini ?",
//     'password_didnt_match' => 'Password tidak sama dengan password konfirmasi...!',
//     'otor_password_didnt_match' => 'Password Otorisasi tidak sama dengan password konfirmasi...!',
//     'confirm' => 'Apakah anda yakin ingin melanjutkan proses ini ?',
//     'submit_confirm' => "Apakah yakin akan menyimpan data ini..?",
//     'incorect_submit_param' => "Terdapat anomali request post...proses dibatalkan..!",
//     'auth_pass_match' => 'Otorisasi Berhasil ...!',
//     'auth_pass_not_match' =>'Password Otorisasi tidak valid...!',
//     'pilihjenis' =>'Harus Pilih Jenis Data Terlebih Dahulu',
//     'pilihcabang' =>'Harus Pilih Cabang Terlebih Dahulu',
//     'duplicate' =>'Data Sudah Ada Sebelumnya',
//
// ];

  // function ajaxChangeStatus($id) {
  //     bootbox.confirm('', function (result) {
  //         if (result === true) {
  //             var url = $(id).attr('data');
  //             $.ajax({
  //                 url: url
  //             })
  //                     .done(function (data) {
  //                         if (data.status == 0) {
  //                             toastr.error(data.msg);
  //                             return false;
  //                         } else if (data.status == 1) {
  //                             toastr.success(data.msg);
  //                             setTimeout(function(){
  //                                 var table = $('#tbl_data').DataTable();
  //                                 table.ajax.reload();
  //                             }, 1000);
  //                         } else {
  //                             toastr.error(data.msg);
  //                             return false;
  //                         }
  //                     })
  //
  //         }
  //     });
  // }
?>
