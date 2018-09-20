 <?php

include_once("core/init.php");


if(isset($_POST['submit'])){

 date_default_timezone_set("Asia/Bangkok");

    $time = new DateTime();
    $tgl = $time->format('d-M-Y');
    $jam_masuk = $time->format('h:i:s');
    
    $id = $_POST['memberid'];

    if(absen($id, $tgl, $jam_masuk)){
	header('location:data-absensi.php');
    	
    }else{

	echo "<script>alert('kesalahan data');</script>";
    }
}
?>