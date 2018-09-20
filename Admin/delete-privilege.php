<?php
include("koneksi.php");
session_start();
$role_session = $_SESSION['role'];
if($_SESSION['role']!="superuser"){
	?>
<script>document.location='index.php'</script>
<?php } ?>

<?php

$id = $_GET['id'];

if($_GET['id']==$id){
	$sql = "delete from tb_adm where id='$id'";
	$query = mysql_query($sql);
	header('location:http://riset.bandungdigitalvalley.com/Admin/data-privilege.php');
 }
	

?>