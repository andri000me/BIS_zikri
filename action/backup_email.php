<?php
include "../config/koneksi.php";
include "../config/fungsi.php";
include "../config/fungsi_mailer.php";

$query = select_gedung();

while ($data = mysqli_fetch_array($query)) {
  $no =1;
  $nama_kantor = $data['nama_kantor'];
  $tgl_awal = $data['periode_awal'];
  $tgl_akhir = $data['periode_akhir'];
  $masa_sewa = $data['masa_sewa'];

  $email_rm = $data['email_rm'];
  $email_bm = $data['email_cabang'];
  $nama_bm = $data['nama_bm'];
  $nama_rm = $data['nama_rm'];
  $nama_regional = $data['nama_regional'];

  $to     =  $data['email_rm'];

$recipients = array(
  ''.$email_bm.'' => ''.$nama_bm.'',
  'icang88@gmail.com' => 'Person Two',
);

foreach($recipients as $email => $name)
{
    $mail->AddCC($email, $name);
}

$subject = "Pemberitahuan Masa Sewa Kantor Cabang";
$fromName = "Kantor Operasional Pusat";
$mail->From = 'support.it@ksusb.co.id';
$mail->FromName= $fromName;
$mail->addAddress($to);
$mail->isHTML(true);
$mail->Subject = $subject;
include "message.php";
$mail->Body = $txt;

  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "<script>window.alert('Email Sent');
  	window.location=('../view/frame.php?page=gedung')</script>";
  }
}
?>
