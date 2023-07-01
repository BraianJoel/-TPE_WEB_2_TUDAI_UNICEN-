<?php
require_once('models/loginModel.php');
require_once('views/loginView.php');

class AuthHelper {
    
    public function __construct () {
       
    }
public static function start(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function setUser($user){
        AuthHelper::start();
        $_SESSION['time'] = time();
        $_SESSION['ID'] = $user['id'];
        $_SESSION['username'] = $user['username'];
    }
    public static function checkTime(){
        AuthHelper::start();
        if(!isset($_SESSION['time'])){
            $_SESSION['time'] = time();
        }
        else {
            if(time() - $_SESSION['time'] > 300){//5 minutos
                AuthHelper::logout();
                header("Location:". BASE_URL . "login");
                die();
            }
        }
    }
    public static function logout() {
        AuthHelper::start();
        session_destroy();
    }
    public static function checkLoggedIn() {
        AuthHelper::start();
        AuthHelper::checkTime();
        if (!isset($_SESSION['username'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }
    public static function getLoggedUserName() {
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        } else {
            return null;
        }
    }
    
    public static function login($user) {
        session_start();
        $_SESSION['ID_USER']= $user['ID'];
        $_SESSION['USURNAME']= $user['usurname'];
      
    }
    public static function logaout() {
        session_start();
        session_destroy();
        //header('location:'.login);

    }

    
    /*public static function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header('location: '. BASE_URL. 'login');
            die();
        }
    }
    public static function thereisSession(){
        session_start();
        return isset($_SESSION['ID_USER']);
    }*/
}