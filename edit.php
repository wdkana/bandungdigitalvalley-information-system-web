<?php
error_reporting(0);

include_once "core/init.php";

if(isset($_POST['tedit'])){
	$email	= $_POST['email'];
	$profesi = $_POST['profesi'];
	$perusahaan = $_POST['perusahaan'];
	$bagian = $_POST['bagian'];
	//$keahlian = $_POST['keahlian'];
	$other = $_POST['other'];
    if( !empty(trim($other))) {
        $keahlian = $_POST['other'];
    } else {
        $keahlian = $_POST['keahlian'];
    }
	$kota = $_POST['kota'];
	$nohp = $_POST['no_hp'];
	$instagram = $_POST['instagram'];
	$linkedin = $_POST['linkedln'];
	$facebook = $_POST['facebook'];
	//$foto = $_POST['foto'];
	$foto = $_FILES['foto'];

$image   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
     $image_name = addslashes($_FILES['foto']['name']);
     	$image_size = getimagesize($_FILES['foto']['tmp_name']);

	    if($image_size == 0) {
	     	$sql	= 'update tb_user set profesi="'.$profesi.'", perusahaan="'.$perusahaan.'", bagian="'.$bagian.'", keahlian="'.$keahlian.'" ,kota="'.$kota.'" ,no_hp="'.$nohp.'" ,instagram="'.$instagram.'" ,linkedln="'.$linkedin.'" ,facebook="'.$facebook.'" where email="'.$email.'"';
	    }else{
		    $sql	= 'update tb_user set profesi="'.$profesi.'", perusahaan="'.$perusahaan.'" , bagian="'.$bagian.'" , keahlian="'.$keahlian.'" ,kota="'.$kota.'" ,no_hp="'.$nohp.'" ,instagram="'.$instagram.'" ,linkedln="'.$linkedin.'" ,facebook="'.$facebook.'" , foto="'.$image.'" where email="'.$email.'"';

	    }
    $query	= mysqli_query($link,$sql);

	if($query){
		header('location: index.php');
	}
	else{
		echo "<script>
			alert('File foto terlalu besar, maksimal size 300kb');
			document.location='editprofile.php';
		</script>";
	}

}
?>
