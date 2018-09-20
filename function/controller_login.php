<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
$mac = ambil_data_mac();
*/
include_once("core/init.php");

global $link;
$now = Date('Y-m-d');


// validasi register
if(isset($_POST['login']) ){
    $email = $_POST['emailLogin'];
    $pass = $_POST['passLogin'];
    $id = ambil_data_idUser($email);
    $nama = ambil_data_nama($id);
    if(!empty($_POST['remember'])) {
          setcookie ("member_login",$_POST['emailLogin'],time()+ (10 * 365 * 24 * 60 * 60));
          setcookie ("member_password",$_POST['passLogin'],time()+ (10 * 365 * 24 * 60 * 60));
    } else {
          if(isset($_COOKIE["member_login"])) {
                 setcookie ("member_login","");
          }
          if(isset($_COOKIE["member_password"])) {
                 setcookie ("member_password","");
          }
    }
    // trim - remove spasi
    if( !empty(trim($email)) && !empty(trim($pass)) ){
        if ( $email == 'admin@a' and $pass == 'admin'){
          header('Location: Admin/index.php');
        }
        elseif( login_cek_email($email) ){
              if( cek_data($email, $pass)){
                if ( cek_verifikasi($email)) {
                  $_SESSION['emailLogin'] = $email;
                header('Location: index.php');
              }
            }
        }
      }
    }
                  /*
                  if ( cek_mac_address($mac)){
                    $_SESSION['emailLogin'] = $email;
                    header('Location: index.php');
                  }

                   else {
                    $query = "INSERT INTO tb_mac_address(id_user, mac_address) VALUES ('$id','$mac')";
                    mysqli_query($link, $query);
                    $_SESSION['emailLogin'] = $email;
                    $hash = ambil_data_hash($email);
      $mail = new PHPMailer;
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            //Set the hostname of the mail server
            $mail->Host = 'tls://smtp.gmail.com:587';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "info@bandungdigitalvalley.com";
            //Password to use for SMTP authentication
            $mail->Password = "Pass@w0rd26";
            //Set who the message is to be sent from
            $mail->setFrom('info@bandungdigital.com', 'Device Verification');

            //Set who the message is to be sent to
            $mail->addAddress($email, 'BDV');
            //Set the subject line
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = trim("Login | Device Verification");
            $blank = ' ';
            $message = '<html>
<head>
<style>
.tombol {
    padding: 10px;
    background: #2ca8e0;
    border-radius: 5px;
    text-decoration:none;
    color:white;
}
table {
    border-top: 1px solid #2ca8e0;
border-bottom: 1px solid #2ca8e0;
border-left: 1px solid #2ca8e0;
border-right: 1px solid #2ca8e0;
padding: 10px;
}

</style>
</head>
<body style="font-family:calibri">
      <center> <table width="400">
        <tr>
          <td style="text-align:right"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw9mvNpXW3bhoWauYmDj7bGMFYJgUwQe-cBl5k0nbgCdtKclIh" height="80"> </td>
        </tr>
        <tr>
            <td style="padding-bottom:20px;">
            <h4> Thank You, This is your device: ' .$nama. ' </h4>
            <p> Please confirm your device by clicking the link below.</p> <br>
            <a class="tombol" href="http://riset.bandungdigitalvalley.com/konfirm_ulang.php?email=' .$email. '&hash=' .$hash. '"> Confirm This Device </a>
        </tr>
        <tr> 
          <td style=" height:50; text-align:center"> <a style="text-decoration:none; color:#2ca8e0;" href="http://bandungdigitalvalley.com/"> www.bandungdigitalvalley.com </a> </td>
        </tr>
      </table> </center>
</body>
    </html>'; // Our message above including the link
            $mail->MsgHTML($message);
             // Send our email
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header('Location: check_email1.php');
    }
                    header('Location: index.php');
                  }

                  */
                    
?>
