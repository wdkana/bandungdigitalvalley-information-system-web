<?php
include("koneksi.php");
session_start();
$role_session = $_SESSION['role'];
if($_SESSION['role']!="superuser"){
	?>
<script>document.location='index.php'</script>
<?php } ?>

<?php


if($_GET['mailid'] && $_GET['permission']){
	$mail = $_GET['mailid'];
	$sql = "delete from tb_oldmember where email='$mail'";
	$query = mysql_query($sql);
	header('location:http://riset.bandungdigitalvalley.com/Admin/');
 }
	

?>