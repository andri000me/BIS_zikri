<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

//function kirim email
function kirimemail($data){
  $id = $_GET['id'];
  // var_dump($id);die();
  // // print_r($id);
  //   $mail = new PHPMailer();
  //   $to = $data['email_rm'];
  //   $cc = $data['email_cabang'];
  //   $nama_bm = $data['nama_bm'];
  //   $status = $data['status'];

    $mail = new PHPMailer();
    $to = $data['email_cabang'];
    $cc = $data['email_rm'];
    $nama_rm = $data['nama_rm'];
    $status = $data['status'];
    // $cabang = $data['email_cabang']


    //SMTP Settings
    $mail->isSMTP();
    $mail->Host= "tls://smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "devhagprojects@gmail.com";
    $mail->Password = "hanif123";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->From = 'support.it@ksusb.co.id';
    $mail->FromName = "Kantor Operasional Pusat";
    $mail->isHTML(true);
    $mail->Subject = "Pemberitahuan Masa Sewa Kantor Cabang";
    require "../action/message.php";
    $mail->Body = $txt;
    $mail->addAddress($to);
    // $recipients = array(
    //     $cc => $nama_bm
    // );
    $recipients = array(
      // 'agus.mansyur@ksusb.co.id' => 'Agus',
      'p1@gmail.com' => 'Petinggi 1',
      'p2@gmail.com' => 'Petinggi 2',
      'p3@gmail.com' => 'Petinggi 3',
       $cc => $nama_rm
    );
    foreach ($recipients as $email =>$name) {
        $mail->AddCC($email, $name);
    }
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        if(empty($id)){
            $update_status_email = mysqli_query($GLOBALS["___mysqli_ston"],"UPDATE kantor_cabang set status = '2' where  status_kepemilikan = '2' AND status ='1'");
        }
        else
        {
         $update_status_email = mysqli_query($GLOBALS["___mysqli_ston"],"UPDATE kantor_cabang set status = '2' where status_kepemilikan = '2' AND status ='1' and id='$id'");
        }

        echo "<script>window.alert('Email Sent');
        window.location=('../view/frame.php?page=gedung')</script>";
    }
}
?>
