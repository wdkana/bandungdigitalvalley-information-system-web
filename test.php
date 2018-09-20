<?php

$_IP_ADDRESS = $_SERVER['REMOTE_ADDR'];

$_PERINTAH = system('arp -a $_IP_ADDRESS');
        ob_start();
        $_HASIL = ob_get_contents();
        ob_clean();
        $_PECAH = strstr($_HASIL, $_IP_ADDRESS);
        $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));
        $_HASIL = substr($_PECAH_STRING[1],3, 17);
        echo $_HASIL;

        ?>