<?php

include_once "core/init.php";

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable

    $search = mysqli_query($link, "SELECT email, hash, active FROM tb_user WHERE email = '$email' AND 
                            hash = '$hash' AND active = '0'") or die(mysqli_error($link));
    $match  = mysqli_num_rows($search);

    if($match > 0){
        // We have a match, activate the account
        mysqli_query($link, "UPDATE tb_user SET active ='1' WHERE email='$email' AND hash='$hash' ") or die(mysql_error());
        echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
        header('Location: regis_succ.php');
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }

} else {
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
