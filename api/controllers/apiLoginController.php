<?php
require_once('models/loginModel.php');
require_once('api/view/APIView.php');
require_once ('herlpers/AuthHelper.php');

class UserController {


    private $userModel;
    private $view;
    private $data;

    public function __construct()
    {
        $this->data = file_get_contents("php://input");
        $this->view = new apiView();
        try {
            $this->userModel = new loginModel();
        } catch (Exception $e) {
            $this->view->response("Hubo un error en el servidor al intentar conectar con la base de datos", 500);
            die();
        }
    }
    private function getData(){
        $datos = json_decode($this->data);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->view->response("Error en el formato JSON de los datos.", 400);
            return;
        }
        return $datos;
    }

    public function login(){
        
        $datos = $this->getData(); 
        $username = $datos->username;
        $password = $datos->password;

        if (empty($username) || empty($password)) {
            $this->view->response("Debe indicar el nombre de usuario y la contraseña.", 400);
            return;
        }
        $usuario = $this->userModel->getUsersById($username);
        if ($usuario) {
            $aut= new AuthHelper();
            $token=$aut->getToken($usuario);
            $aut = new AuthHelper(); 
            $token = $aut->getToken($usuario);
            $this->view->response($token, 200);
        } else {
            $this->view->response("Usuario o contraseña incorrecta.", 400);
        }
    }
}
?>