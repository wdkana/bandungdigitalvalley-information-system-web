<?php
  include_once "core/init.php";
  global $link;

  // checking if the script received a post request or not
  if($_SERVER['REQUEST_METHOD']=='POST'){

   //Getting post data
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $gender = $_POST['gender'];
   $tgl_lahir = $_POST['tgl_lahir'];
   $kota = $_POST['kota'];
   $no_hp = $_POST['no_hp'];
   $profesi = $_POST['profesi'];
   $perusahaan = $_POST['perusahaan'];
   $keahlian = $_POST['keahlian'];
   $instagram = $_POST['instagram'];
   $facebook = $_POST['facebook'];
   $linkedln = $_POST['linkedln'];
   $hash = md5(rand(0,1000));
   $active = 0;
   $foto = 0;

   if(register_user($nama, $pass, $gender, $tgl_lahir, $kota, $email, $no_hp, $profesi, $perusahaan, $keahlian, $instagram, $linkedln, $facebook, $hash, $active)) {
     verifikasi_email($email, $nama, $pass, $hash);
     echo "success";
   } else {
     echo "register fail";
   }

  } else {
    echo "wrong request";
  }
?>
