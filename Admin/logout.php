<?php
session_start();
session_destroy();
session_unset();
?>
<script>alert('logout');document.location='login.php'</script>
