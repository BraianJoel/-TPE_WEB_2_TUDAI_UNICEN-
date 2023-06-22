<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once('controllers/prendasController.php');
    require_once('controllers/loginController.php');

    
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
            $controller->verificar();
            break;
        case 'prendas':
            $controller=new prendasController();
            $controller->showAll();
            break;
        case 'obtener':
             $controller=new prendasController();
             $controller-> showObtener();
             break;
        case 'getPrenda':
            $controller=new prendasController();
            $controller->obtener();
            break;
        case 'insertar':
            $controller=new prendasController();
            $controller->showInsertar();
            break;
        case 'addPrenda':
            $controller=new prendasController();
            $controller-> Insertar();
            break;
        case 'modificar': 
            $controller=new prendasController();
            $controller->showModificar();
            break;
        case 'updatePrenda': 
            $controller=new prendasController();
            $controller->Modificar();
            break;

        case 'eliminar':
            $controller=new prendasController();
            $controller->showDelete();
            break;
        case 'deletePrenda':
            $controller=new prendasController();
            $controller->delete();
            break;
        //default 
            //$controller->showAll();
          // break;
    }


?>