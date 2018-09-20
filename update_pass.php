<?php
include_once "core/init.php";

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable
    $pass = password_hash($_GET['random'], PASSWORD_DEFAULT);
    // $id_user = ambil_data_idUser($email);
    $search = mysqli_query($link, "SELECT pass FROM tb_user WHERE email='".$email."") or die(mysqli_error($link));
    $match  = mysqli_num_rows($search);

    if($match > 0){
        // We have a match, activate the account
        mysqli_query($link, "UPDATE tb_user SET pass=".$pass." WHERE email='".$email."") or die(mysql_error());
        echo '<div class="statusmsg">Your password has been changed.</div>';
        header('Location: index.php');
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }
} else {
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
 ?>
