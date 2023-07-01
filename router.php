<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    include_once('controllers/prendasController.php');
    include_once('controllers/loginController.php');

    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = 'prendas'; // acción 
    }
    
    $params = explode('/', $action); // variable accion

    switch ($params[0]) {
        case 'login':
            $controller=new loginControl();
            $controller->showLogin();
            break;
        case 'verificar':
            $controller= new loginControl();
            $controller->verify();
            break;
        case 'prendas':
            $controller=new prendasController();
            $controller->showAll();
            break;
        case 'obtener':
             $controller=new prendasController();
             if(isset($params[1])) {
                $controller->obtener($params[1]);
             }
             break;
        case 'insertar':
                $controller=new prendasController();
                $controller->Insertar();
                break;
        case 'mostrar';
                $controller=new prendasController();
                $controller->showinsert();
            break;
        case 'modificar';
            $controller=new prendasController();
            if(isset($params[2])){
                $controller->Modificar($params[2]);
                break;
            }
            if(isset($params[1])){
                $controller->showModificar($params[1]);
            }
            break;
        case 'eliminar':
            $controller=new prendasController();
            if(isset($params[1])) {
                $controller->showDelete($params[1]);
                $controller->showAll();
            }
           
            break;
        /*case 'deletePrenda':
            $controller=new prendasController();
            $controller->delete();
            break;
        //default 
            //$controller->showAll();
          // break;*/
    }


?>