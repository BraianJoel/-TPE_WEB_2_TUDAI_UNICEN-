<?php
    require_once('./libs/Smarty.class.php');
   
    Class loginView  {
         private $smarty;
 
         public function __construct() {
             $this->smarty = new Smarty(); // inicializo Smarty
         }
         function showlogin(/*$error= null*/){
            $this->smarty->assign('titulo', "Iniciar Sesión"); 
            //$this->smarty->assign('error', $error);

            $this->smarty->display('Templates/Login.tpl');  
        }  
    }