<?php

include_once "core/init.php";

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable
    $id_user = ambil_data_idUser($email);
    $search = mysqli_query($link, "SELECT id_user FROM tb_mac_address WHERE id_user='$id_user' AND active='0'") or die(mysqli_error($link));
    $match  = mysqli_num_rows($search);

    if($match > 0){
        // We have a match, activate the account
        mysqli_query($link, "UPDATE tb_mac_address SET active='1' WHERE id_user='".$id_user."' ") or die(mysql_error());
        echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
        header('Location: index.php');
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }
} else {
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
