<?php
    require_once('models/prendasModel.php');
    require_once('views/prendasView.php');
    require_once('helpers/outhHelper.php');
    


    Class prendasController {
        private $model;
        private $view;
       
        public function __construct() {
            $this->model=new prendasModel();
            $this->view=new prendasView();
            
        
        }
        //obtener prenda (realizado)
        public function showAll() {
            $prendas=$this->model->getPrendasConEstaciones();
            $this->view->showPrendas($prendas);
        }
       
        public function obtener($id) {
            $prenda=$this->model->getPrendaById($id);
            if(!empty($prenda)) {
                $this->view->showGetPrendabyId($prenda);
               
            }
        }
        
        //insertar prenda
        public function showInsert(){
            $this->view->showinsertPrenda();
        }
           
        
        public function Insertar(){
            if(!empty ($_POST["imagen"]) && !empty($_POST['nombre'])&& !empty($_POST['descripcion']) 
            && !empty($_POST['precio']) && 
            !empty($_POST['estacion']) && !empty($_POST['imagen'])) 
                $img=$_POST['imagen'];
                $prenda=$_POST['nombre'];
                $descripcion=$_POST['descripcion'];
                $precio=$_POST['precio'];
                $estacion=$_POST['estacion'];
                $insert=$this->model->insertPrenda($img, $prenda, $descripcion, $precio, $estacion); //para modifica e insertar se usa esta misma instancia 
            if($insert) {
                $this->view->showinsertPrenda();
                //header("location: ". BASE_URL ."header");
            }
        }
        //actualizar prenda (realizado)
        public function showModificar($id){
            $prenda=$this->model-> getPrendaById($id);
            $this->view->showModificarPrenda($prenda);
        }
        
        public function Modificar($id){
            
            if(isset ($_POST["imagen"]) && isset($_POST['nombre'])&& isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['estacion']) && isset($_POST['imagen'])) {
                $img=$_POST['imagen'];
                $prenda=$_POST['nombre'];
                $descripcion=$_POST['descripcion'];
                $precio=$_POST['precio'];
                $estacion=$_POST['estacion'];
                $insert=$this->model->insertPrenda($img, $prenda, $descripcion, $precio, $estacion, $id );
                if($insert) { // me va a devolver true o folse por rowCount() del modelo en la funcion
                    $this->obtener($id);
                    
                }
            }
            
            
        }
       
        /*public function showDelete() {
            $prendas=$this->model->getPrendasConEstaciones();
            $this->view->showPrendas($prendas);
        }*/

         //eliminar prenda
        public function showDelete($id){
            $prenda=$this->model->deletePrenda($id);
            if(!empty($prenda)) {
                $this->view->showEliminarPrenda();
            }
        }
        
    }
          
        
?>