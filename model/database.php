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
?>
