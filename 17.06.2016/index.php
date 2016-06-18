<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'class/session.php';
$session = new csSession();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="loginBox">
            <h1>Login</h1>
            <form id="loginForm" method="post" action="check.php">
                <div class="emptyError">Boşluq buraxmayın!</div>
                <?php
                if (@$session->checkSession('wrongPost') == true) {
                    echo ' <div class="postErrors">' . $session->getSession('wrongPost') . '</div>';
                    $session->deleteSession('wrongPost');
                }
                ?>
                <div class="form_input"> 
                    <label>Username:</label>
                    <input type="text" name="username">
                </div>
                <div class="form_input">
                    <label>Password:</label>
                    <input type="password" name="pass">
                </div>
                <input type="submit" value="Login!">
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.4.js" ></script>
        <script src="js/main.js"></script>
    </body>
</html>
