<?php

class Login {

    private $username;
    private $password;
    private $session;

    public function __construct() {
        include 'class/session.php';
        $this->session = new csSession();
        $this->username = $usernameG;
        $this->password = $passwordG;
    }

    public function check($usernameG, $passwordG) {
        if ($this->username == 'admin' && $this->password == 'admin') {
            $this->session->setSession('logined', true);
            header('Location:admin/index.php');
        } else {
            $this->session->setSession('wrongPost', 'Username or password is incorrect!');
            header('Location:index.php');
        }
    }

    public function loginedCheck() {
        if ($this->session->checkSession('logined') == true) {
            header('Location:admin/index.php');
        } else {
            header('Location:index.php');
        }
    }

    public function logout() {
        if ($this->session->checkSession('logined') == true) {
            $this->session->deleteSession('logined');
            header('Location:index.php');
        } else {
            header('Location:index.php');
        }
    }

}

$username = $_POST['username'];
$password = $_POST['pass'];
$login = new Login();
$loginRt = $login->check($username, $password);



//var_dump();
//session_start();
//if ($_SESSION['logined'] == true) {
//    header('Location:admin/index.php');
//}
//if (isset($_POST['username']) && isset($_POST['pass'])) {
//    $username = $_POST['username'];
//    $password = $_POST['pass'];
//
//    if (!empty($username) && !empty($password)) {
//        if ($username == 'admin' && $password == 'admin') {
//            $_SESSION['logined'] = true;
//            header('Location:admin/index.php');
//        } else {
//            $_SESSION['wrongPost'] = 'Username or password is incorrect!';
//            header('Location:index.php');
//        }
//    } else {
//        $_SESSION['emptyPost'] = 'Boşluq buraxmayın!';
//        header('Location:index.php');
//    }
//} else {
//    header('Location:index.php');
//}
?>