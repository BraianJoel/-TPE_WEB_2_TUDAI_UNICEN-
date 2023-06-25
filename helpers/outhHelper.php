<?php


class outhHelper {
    
    public function __construct () {
       
    }

    public function login($user) {
        session_start();
        $_SESSION['ID_USER']= $user->id;
        $_SESSION['USURNAME']= $user->usurname;
      ;
    }
    public function logaout() {
        session_start();
        session_destroy();
        //header('location:'.login);

    }
    public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header('location: '. BASE_URL);
            die();
        }
    }
    public function thereisSession(){
        session_start();
        return isset($_SESSION['ID_USER']);
    }
}