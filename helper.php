<?php

if (isset($_GET['gen'])) {
    $len = $_GET['passGen'];
    $result = '';
    $ValidChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789()-_=+!@#$%^&*[]{}<>?,./';
    while (0 < $len--) {
        $result .= $ValidChar[random_int(0, strlen($ValidChar) - 1)];
    }
}

?>