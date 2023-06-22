<?php
require_once('models/loginModel.php');
require_once('views/loginView.php');
require_once('helpers/outhAuth.php');

    class loginControl {
        private $model;
        private $view;
        private $outhHelper;

        public function __construct() {
            $this->model=new loginModel();
            $this->view=new loginView();
            $this->outhHelper= new outhHelper();
        }
        public function showLogin() {
            $this->view->showLogin();
        }
        public function verificar() {
            if(isset($_POST['username']) && isset ($_POST['password'])) {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $username= $this->model->getUsersById($username);
            }
            if(!empty($user) && password_verify($password, $username->$password)) {
                $this->outhHelper->login($user);

            }
            else {
                $this->view->showLogin();
            }
        } 
        public function logaout() {
            $this->outhHelper->logaout();
        }
    }       
        
?>