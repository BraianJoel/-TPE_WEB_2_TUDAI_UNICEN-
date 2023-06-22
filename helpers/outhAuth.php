<?php


class outhHelper {
    
    public function __construct () {
       
    }

    public function login($user) {
        session_start();
        $__SESSION['ID_USER']= $user->id;
        $__SESSION['USURNAME']= $user->usurname;

    }
    public function logaout() {
        session_start();
        session_destroy();
        //header('location:'.login);

    }
    public function checkLoggedIn(){
        session_start();
        if(!isset($__SESSION['ID_USER'])){
            header('location: login');
            die();
        }
    }
    public function thereisSession(){
        session_start();
        return isset($_SESSION['ID_USER']);
    }
}