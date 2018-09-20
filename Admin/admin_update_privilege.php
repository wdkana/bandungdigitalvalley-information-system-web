<?php
error_reporting(0);
include("koneksi.php");

    $username = $_POST['username'];
	$password = $_POST['password'];
	$safepass = md5($password);
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$role = $_POST['role'];
	$id = $_POST['id'];

            $query = mysql_query("UPDATE tb_adm SET
                username         = '$username',
				email			 = '$email',
				password		 = '$safepass',
				nama			 = '$nama',
				role			 = '$role'
				where id = '$id'   
			   ")
         
?>
<?php if($query){ ?>
<script>
	alert('Update user berhasil');
	document.location='lihat-data-adm.php?email=<?php echo $email?>';
</script>
<?php }else{  ?>
<script>
	alert('GAGAL');
	document.location='edit-data-adm.php?email=<?php echo $email?>';
</script>
<?php } ?>
