<?php
// error_reporting(0);

include_once "core/init.php";

global $link;

if(isset($_POST['edit_pass'])){
	$email = $_SESSION['emailLogin'];
	$recent_pass = $_POST['pass'];
	$new_pass = $_POST['newpass'];
	$new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

	//mengecek recent_pass dengan password yang ada dalam database
	$query = "SELECT pass FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);
    $hash = $hash['pass'];

	$recent_pass = password_verify($recent_pass, $hash);
	if(!$recent_pass){
		echo "<script>
			alert('Recent password tidak benar');
			document.location='changepassword.php';
		</script>";
	//jika recent_pass sesuai dengan database, menjalankan query update
	}else{
		$sql	= 'UPDATE tb_user SET pass="'.$new_pass.'" WHERE email="'.$email.'"';
		$query	= mysqli_query($link,$sql);
		if($query){
			echo "<script>
				alert('Password berhasil diubah');
				document.location='changepassword.php';
			</script>";

		}
		else{
			echo "<script>
				alert('Gagal');
				document.location='editprofile.php';
			</script>";
		}
	}
}
?>