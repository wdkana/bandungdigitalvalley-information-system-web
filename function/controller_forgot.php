<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
include_once("core/init.php");
global $link;

if(isset($_POST['submit'])){
  $email = $_POST['emailForgot'];
  if( !empty(trim($email)) ){
    $random = random_pass();
  global $link;
  $hash = ambil_data_hash($email);
  $mail = new PHPMailer; // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = 'info@bandungdigitalvalley.com';
  $mail->Password = 'Pass@w0rd26';
  $mail->SetFrom('info@bandungdigitalvalley.com', 'Reset Password');
  $mail->AddAddress($email);

  $mail->Subject = trim("Your new password");
  $blank = ' ';
  $host = gethostname(); // may output device name
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
            <h4> Hey, your new password is ' .$random. ' </h4>
            <p> Please use this password to login, and change your password immediately on your profile page. </p> <br>
            <a class="tombol" href="http://riset.bandungdigitalvalley.com/login.php"> Go To Login </a>
        </tr>
        <tr>
          <td style=" height:50; text-align:center"> <a style="text-decoration:none; color:#2ca8e0;" href="http://bandungdigitalvalley.com/"> www.bandungdigitalvalley.com </a> </td>
        </tr>
      </table> </center>
</body>
    </html>'; // Our message above including the link
    $pass = password_hash($random, PASSWORD_DEFAULT);
    // $id_user = ambil_data_idUser($email);
    $search = mysqli_query($link, "SELECT pass FROM tb_user WHERE email='".$email."'") or die(mysqli_error($link));
    $match  = mysqli_num_rows($search);
    if($match > 0){
        // We have a match, activate the account
        mysqli_query($link, "UPDATE tb_user SET pass='$pass' WHERE email='".$email."'") or die(mysql_error());
    }
    $mail->MsgHTML($message);
     // Send our email
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    	header('location: check_email2.php');
    }
  } else{
    echo "<script>alert('Tidak boleh kosong')</script>";
  }
}
 ?>
