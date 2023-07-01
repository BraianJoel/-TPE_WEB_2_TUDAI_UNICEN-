<?php
require_once('models/loginModel.php');
require_once('views/loginView.php');
require_once('helpers/AuthHelper.php');


    class loginControl {
        private $model;
        private $view;
        private $AuthHelper;

        public function __construct() {
            $this->model=new loginModel();
            $this->view=new loginView();
            $this->AuthHelper= new AuthHelper();
        }
        public function showlogin() {
            $this->view->showlogin();
        }
        /*public function verificar() {
                $username=$_POST['user'];
                $password=$_POST['pass'];
                $user= $this->model->getUsersById($username);
            
            var_dump($username, $password, $user);
            if(!empty($user) && password_verify($password, $user['password'])) {
                AuthHelper::login($user);
                header('location: ' .BASE_URL. 'prendas');
            }
            else {
                //$this->view->showlogin();
            }
        } 
        public function logaout() {
            $this->AuthHelper->logaout();
        }*/
     
    
        public function verify() {
            $username = $_POST['user'];//es el username del template del imput que le asigne, en mi caso le puse "user"
            $password = $_POST['pass']; // es el password del template del imput que le asigne, en mi caso le puse "pass"
            $user = $this->model->getUsersById($username);
            if (isset($user)&&!empty($user)&&isset($username)&&!empty($username) 
            && isset($password)&&!empty($password)
            && password_verify($password, $user['password'])) {
                AuthHelper::start();
                AuthHelper::setUser($user);
                header("Location: " . BASE_URL . 'prendas');
            } else {
                $this->view->showloginCorrect('login correcto');
            }
        }
}
?>