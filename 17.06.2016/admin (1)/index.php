<?php

session_start();
if ($_SESSION['logined'] == true) {
    echo 'xos gelisiniz';
} else {
    header('Location:../index.php');
}
?>