<?php

class csSession {

    public function __construct() {
        session_start();
    }

    // Session Yaramaq üçün
    public function setSession($name, $value) {
        $_SESSION[$name] = $value;
    }

    // Session dəyərini əldə etmək üçün
    public function getSession($name) {
        return $_SESSION[$name];
    }

    public function deleteSession($name, $all=FALSE) {
        if ($all == true) {
            session_destroy();
        }
        if (isset($name)) {
            unset($_SESSION[$name]);
        }
    }

    // Session olub olmadığını yoxlamaq üçün
    public function checkSession($name) {
        if ($_SESSION[$name]) {
            return true;
        } else {
            return false;
        }
    }

    // Session harda yadda saxladığını tapmaq üçün
    public function getSessionPath() {
        return session_save_path();
    }

}
