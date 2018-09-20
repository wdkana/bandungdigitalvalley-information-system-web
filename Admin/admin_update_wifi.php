<?php
error_reporting(0);
include("koneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$id = $_POST['id'];

            $query = mysql_query("UPDATE tbl_wifi SET
                username         = '$username',
				password         = '$password'
				where id = '$id'   
			   ")
         
?>
<?php if($query){ ?>
<script>
	alert('Update user berhasil');
	document.location='data-wifi.php';
</script>
<?php }else{  ?>
<script>
	alert('GAGAL');
	document.location='edit-data-wifi.php?id=<?php echo $id?>';
</script>
<?php } ?>
