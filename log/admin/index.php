<?php

session_start();
if ($_SESSION['logined'] == true) {
    header('Location:../../index.php');
} else {
    header('Location:../index.php');
}
?>