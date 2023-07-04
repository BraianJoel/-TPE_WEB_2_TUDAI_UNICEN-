<?php
include_once ("./api/view/APIView.php");
include_once("./models/prendasModel.php");

class ApiControllerPrendas {
    private $model;
    private $view;
    private $data;
    public function __construct() {
        $this->model= new PrendasModel();
        $this->view=new APIView();
        $this->data=file_get_contents ('php://input'); //se usa en el formulario con endpoint PUT y POST(mandan informacion a traves de un body)
    }

    function getData(){
        return json_decode($this->data);
    }
    function getPrendas($params = null) { 
        $prendas = $this->model->getPrendasConEstaciones();
        if($prendas) {
            $this->view->response($prendas,200);
        }else {
            $this->view->response("El servidor no puede procesar la petición, error del cliente",400);
        }
       
    }  
    function getPrenda($params = null) { 
        $prendas = $this->model->getPrendaById($params[':ID']);
        if($prendas) {
            $this->view->response($prendas,200);
        }else {
            $this->view->response("El servidor no puede procesar la petición, error del cliente",400);
        }
    }  
    public function addPrenda($params= null) { 
        $body=$this->getData();

        $prenda= $body->nombre;
        $descripcion= $body->descripcion;
        $precio= $body->precio;
        $estacion= $body->estacion;
        $img= $body->imagen;

        $prenda=$this->model->insertPrenda($img, $prenda, $descripcion, $precio, $estacion );

    }
    public function orderByColumna()
    {
        if (isset($_GET['columna']) && isset($_GET['orden'])) {
            $columna = '';
            $orden = '';
            switch ($_GET['columna']) {
                case 'id_prendas':
                    $columna = 'id_prendas';
                    break;
                case 'img':
                    $columna = 'img';
                    break;
                case 'nombre':
                    $columna = 'nombre';
                    break;
                case 'descripcion':
                    $columna = 'dscripcion';
                    break;
                case 'precio':
                    $columna = 'precio';
                    break;
                case 'estaciones_id':
                    $columna = 'estaciones_id';
                    break;
                default:
                    return $this->view->response("Columna inexistente", 404); 
                    break;
            }
            switch ($_GET['orden']) {
                case 'ASC':
                    $orden = "ASC";
                    break;
                case 'DESC':
                    $orden = "DESC";
                    break;
                default:
                    return $this->view->response("Orden inexistente", 404); 
            }
            $orderByColumna = $this->model->orderByColumna($columna, $orden);
            return $this->view->response($orderByColumna, 200);
        } else {
            return $this->view->response("Parametros no seteados", 400);
        }
    }
   
    public function deletePrenda($params=[]) {
        $prenda_id=$params[':ID'];
        $prenda=$this->model->getPrendaById($prenda_id);
        if($prenda){
            $this->model->deletePrenda($prenda_id);
            $this->view->response("prenda id= $prenda_id", 200);
        }
        else {
            $this->view->response("prenda id= $prenda_id", 404);
        }

    }

}

?>