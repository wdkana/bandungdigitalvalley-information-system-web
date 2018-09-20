<?php
error_reporting(0);
session_start();
if($_SESSION['email']=="" || $_SESSION['pass']==""){
?>
<script>document.location='login.php'</script>
<?php } ?>