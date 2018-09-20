<?php


function register_user($nama, $pass, $gender, $tgl_lahir, $kota, $email, $no_hp, $profesi, $perusahaan, $bagian, $keahlian, $instagram, $linkedln, $facebook, $hash, $active, $foto, $join_date){
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);
    $gender = mysqli_real_escape_string($link, $gender);
    $tgl_lahir = mysqli_real_escape_string($link, $tgl_lahir);
    $kota = mysqli_real_escape_string($link, $kota);
    $email = mysqli_real_escape_string($link, $email);
    $no_hp = mysqli_real_escape_string($link, $no_hp);
    $profesi = mysqli_real_escape_string($link, $profesi);
    $perusahaan = mysqli_real_escape_string($link, $perusahaan);
    $bagian = mysqli_real_escape_string($link, $bagian);
    $keahlian = mysqli_real_escape_string($link, $keahlian);
    $instagram = mysqli_real_escape_string($link, $instagram);
    $linkedln = mysqli_real_escape_string($link, $linkedln);
    $facebook = mysqli_real_escape_string($link, $facebook);
    $hash = mysqli_real_escape_string($link, $hash);
    $active = mysqli_real_escape_string($link, $active);
    $join_date = mysqli_real_escape_string($link, $join_date);
    $foto = mysqli_real_escape_string($link, $foto);

    // Encrypt password

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO tb_user(nama, pass, gender, tgl_lahir, kota, email, no_hp, profesi, perusahaan, bagian, keahlian, instagram, linkedln, facebook, hash, active, foto, join_date) VALUES ('$nama', '$pass', '$gender', '$tgl_lahir', '$kota', '$email', '$no_hp', '$profesi', '$perusahaan', '$bagian','$keahlian', '$instagram', '$linkedln', '$facebook', '$hash', '$active', '', '$join_date')";

    if( mysqli_query($link, $query) ) return true;
    else return false;
}


function register_user_adm($username, $email, $password, $nama, $role){
    global $link;
    // mencegah sql injection
    $username = mysqli_real_escape_string($link, $username);
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);
    $pass = md5($password);
    $nama = mysqli_real_escape_string($link, $nama);
    $role = mysqli_real_escape_string($link, $role);
    // Encrypt password


    $query = "INSERT INTO `tb_adm` (`id`, `username`, `email`, `password`, `nama`, `role`) VALUES (NULL, '$username', '$email', '$pass', '$nama', '$role')";

    if( mysqli_query($link, $query) ) return true;
    else return false;
}

function absen($id, $tgl, $jam_masuk){
    global $link;
    $id = mysqli_real_escape_string($link, $id);
    $tgl = mysqli_real_escape_string($link, $tgl);
    $jam_masuk = mysqli_real_escape_string($link, $jam_masuk);
    
    $query = "INSERT INTO `tb_absensi` (`no`, `id`, `tgl`, `jam_masuk`, `jam_keluar`) VALUES (NULL, '$id', '$tgl', '$jam_masuk', NULL)";
    if( mysqli_query($link, $query) ) return true;
    else return false;

}

// cegah duplikasi username
function register_cek_email($email){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);

    $query = "SELECT * FROM tb_user where email = '$email'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) == 0) return true;
        else return false;
    }
}

function wifi(){
    global $link;

    $query = "SELECT * FROM tbl_wifi";

    if($result = mysqli_query($link, $query)){
        return $result;
    }
}

function register_cek_email_adm($email){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);

    $query = "SELECT * FROM tb_adm where email = '$email'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) == 0) return true;
        else return false;
    }
}

function verifikasi_emailadm($email, $nama, $password, $hash) {



  //Create a new PHPMailer instance

}

// cek verifikasi email
function verifikasi_email($email, $nama, $password, $hash) {

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'info@bandungdigitalvalley.com';
    $mail->Password = 'Pass@w0rd26';

    $mail->SetFrom('info@bandungdigital.com', 'Email Verification');
    $mail->AddAddress($email);

    $mail->Subject = trim("Signup | Verification");
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
            <h4> Thank You ' .$nama. ' ! </h4>
            <p> Please confirm your email address by clicking the link below. </p>
            <p> We may need to send you critical information about our service and it is important
            that we have an accurate email address. </p> <br>

            <a class="tombol" href="http://192.168.43.69/konfirm.php?email=' .$email. '&hash=' .$hash. '"> Activate Email </a>

            </td>
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
        echo 'Message has been sent';
    }
}

function verifikasi_mac($email, $mac) {
  $hash = ambil_data_hash($email);
  $mail = new PHPMailer(); // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = 'info@bandungdigitalvalley.com';
  $mail->Password = 'Pass@w0rd26';
  $mail->SetFrom('info@bandungdigitalvalley.com', 'Device Verification');
  $mail->AddAddress($email);

  $mail->Subject = trim("Device Verification");
  $blank = ' ';
  $mac = $mac;
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
            <h4> Thank You, your device name is ' .$host. '! </h4>
            <p> Please confirm your device to use connection in BDV by clicking the link below.</p> <br>
            <a class="tombol" href="http://riset.bandungdigitalvalley.com/konfirm_ulang.php?email=' .$email. '&hash=' .$hash. '"> Activate Device </a>
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
        echo 'Message has been sent';
    }
}

function forgot_password($email) {
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
    }
}

function random_pass(){
  $characters = 'QWERTYUIOPASDFGHJKLZXCVBNMabcdefghijklmnopqrstuvwxyz0123456789';
  $random_string_length = 10;
  $string = '';
  $max = strlen($characters) - 1;
  for ($i = 0; $i < $random_string_length; $i++) {
      $string .= $characters[mt_rand(0, $max)];
    }
  return $string;
}
// cek nama terdaftar / belum
function login_cek_email($email){
    global $link;

    $nama = mysqli_real_escape_string($link, $email);

    $query = "SELECT * FROM tb_user where email = '$email'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

// cek password Login
function cek_data($email, $pass){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);
    $pass = mysqli_real_escape_string($link, $pass);

    $query = "SELECT pass FROM tb_user WHERE email = '$email'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);
    $hash = $hash['pass'];
    if( password_verify($pass, $hash) ) return true;
    else return false;
}

function cek_verifikasi($email){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);

    $query = "SELECT active FROM tb_user WHERE email = '$email'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);
    $hash = $hash['active'];
    if( $hash == 1 ) return true;
    else return false;
}

function cek_verifikasi_mac($mac){
    global $link;
    // mencegah sql injection
    $mac = mysqli_real_escape_string($link, $mac);

    $query = "SELECT active FROM tb_mac_address WHERE mac_address = '$mac'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);
    $hash = $hash['active'];
    if( $hash == 1 ) return true;
    else return false;
}

function cek_mac_address($mac){
    global $link;
    // mencegah sql injection
    $mac = mysqli_real_escape_string($link, $mac);

    $query = "SELECT mac_address FROM tb_mac_address WHERE mac_address = '$mac'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

function cek_mac_address_logs($mac){
    global $link;
    // mencegah sql injection
    $mac = mysqli_real_escape_string($link, $mac);

    $query = "SELECT mac_address FROM tb_logs WHERE mac_address = '$mac'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

function cek_tgl($mac, $date){
    global $link;
    // mencegah sql injection
    $mac = mysqli_real_escape_string($link, $mac);

    $query = "SELECT tgl_akses FROM tb_logs WHERE mac_address = '$mac' AND tgl_akses = '$date'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) > 0) return false;
        else return true;
    }
}

function ambil_data_mac(){
  	$_IP_SERVER = $_SERVER['SERVER_ADDR'];
    $_IP_ADDRESS = $_SERVER['REMOTE_ADDR'];
    if($_IP_ADDRESS == $_IP_SERVER)
    {
        ob_start();
        system('ipconfig /all');
        $_PERINTAH  = ob_get_contents();
        ob_clean();
        $_PECAH = strpos($_PERINTAH, "Physical");
        $_HASIL = substr($_PERINTAH,($_PECAH+36),17);
        return $_HASIL;
    } else {
        $_PERINTAH = "arp -a $_IP_ADDRESS";
        ob_start();
        system($_PERINTAH);
        $_HASIL = ob_get_contents();
        ob_clean();
        $_PECAH = strstr($_HASIL, $_IP_ADDRESS);
        $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));
        $_HASIL = substr($_PECAH_STRING[1], 0, 17);
        return $_HASIL;
    }
}

function ambil_data_idUser($email){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);

    $query = "SELECT id_user FROM tb_user WHERE email = '$email'";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['id_user'];
}

function ambil_data_hash($email){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $email);

    $query = "SELECT hash FROM tb_user WHERE email = '$email'";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['hash'];

}

function ambil_data_email($id){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $id);

    $query = "SELECT email FROM tb_user WHERE id_user = '$id'";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['email'];

}

function ambil_data_nama($id){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $id);

    $query = "SELECT nama FROM tb_user WHERE id_user = '$id'";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['nama'];

}

function ambil_data_idUser_mac($mac){
    global $link;
    // mencegah sql injection
    $email = mysqli_real_escape_string($link, $mac);

    $query = "SELECT id_user FROM tb_mac_address WHERE mac_address = '$mac'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);
    $hash = $hash['id_user'];
    return $hash;
}

// clear all session
function logout($session){
    unset($session);
    session_destroy();
}
