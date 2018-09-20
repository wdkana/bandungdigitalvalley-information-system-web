<?php

include_once("core/init.php");

$session = $_SESSION['emailLogin'];
// function logout
logout($session);

header('Location: login.php');
