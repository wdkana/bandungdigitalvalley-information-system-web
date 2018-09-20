 <?php

//user pass = telkom147
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'absen_bdv';

$link   = mysqli_connect($host,$user,$pass,$db);

// check koneksi
if(!$link){
    die("Connection Failed: ".mysqli_connect_error());
}

// Turn off all error reporting
// error_reporting(0);

$member_id = $_GET['member_id'];

if(isset($_GET['keluar']) && isset($_GET['member_id'])){


 date_default_timezone_set("Asia/Bangkok");

    $time = new DateTime();
    $tgl = $time->format('Y-m-d');
    $jam_keluar = $time->format('h:i:s');

$sql = "UPDATE `tb_absensi` SET jam_keluar = '$jam_keluar' WHERE id = '$member_id' AND tgl = '$tgl'";
$query = mysql_query($sql);

if($query){
	header('location:data-absensi.php');
}else{
	echo "<script>alert('kesalahan data');</script>";
}

}
?>