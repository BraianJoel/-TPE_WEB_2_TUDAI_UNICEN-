<?php
include_once ("./api/APIView.php");
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
            $this->view->response("No se encontraron prendas",200);
        }
       
    }  
    function getPrenda($params = null) { 
        $prendas = $this->model->getPrendaById($params[':ID']);
        if($prendas) {
            $this->view->response($prendas,200);
        }else {
            $this->view->response("No se encontraron prendas",200);
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
    public function modificarPrenda($params=[]) {
        $prenda_id= $params[':ID'];
        $prenda=$this->model->getPrendaById($prenda_id);
        if($prenda) {
            $body=$this->getData();
            $prenda= $body->nombre;
            $descripcion= $body->descripcion;
            $precio= $body->precio;
            $estacion= $body->titulo;
            $img=$body->imagen;
            $prenda=$this->model->insertPrenda($prenda_id, $img, $prenda, $descripcion, $precio, $estacion );
            $this->view->response("prenda id= $prenda_id", 200);
        }
        else{
            $this->view->response("prenda id= $prenda_id", 404);
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