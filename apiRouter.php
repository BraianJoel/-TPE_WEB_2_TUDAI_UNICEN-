<?php
require_once ('libs/Router.php');
require_once ('api/controllers/apiControllerPrendas.php');

//constante para ruteo
define('BASE_URL', 'http: //'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$router = new Router();

$router->addRoute('/prendas', 'GET','ApiControllerPrendas','getPrendas');
$router->addRoute('/prendas', 'POST','ApiControllerPrendas','addPrenda');
$router->addRoute('/prendas/:ID', 'GET','ApiControllerPrendas','getPrenda');
$router->addRoute('/prendas/:ID', 'DELETE','ApiControllerPrendas','deletePrenda');
$router->addRoute('/prendas/:ID', 'PUT','ApiControllerPrendas','modificarPrenda');
$router->addRoute('/prendasOrdenadas', 'GET','ApiControllerPrendas','orderByColumna');

$router->route($_GET['resource'],$_SERVER['REQUEST_METHOD']);

?>