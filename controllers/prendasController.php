<?php
    require_once('models/prendasModel.php');
    require_once('views/prendasView.php');
    require_once('helpers/outhAuth.php');


    Class prendasController {
        private $model;
        private $view;
       
        public function __construct() {
            $this->model=new prendasModel();
            $this->view=new prendasView();
            
        
        }
        public function showAll() {
            $prendas=$this->model->getPrendasConPartes();
            $this->view->showPrendas($prendas);
        }
        public function showObtener(){
            $this->view->showGetPrendabyId();
        }
        public function obtener(){
            $id=$_POST['obtener'];
            $obtener=$this->model->getPrendasById($id);
            if(!empty($obtener)) {
                $this->view->showGetPrendabyId($obtener);
                header("location: ". BASE_URL ."header");
            }
        }
        public function ShowInsertar(){
            $this->view->showInsertPrenda();
        }
        public function Insertar(){
            $prenda=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $precio=$_POST['precio'];
            $img = $_POST["imagen"];
            $insert=$this->model->insertPrenda($img, $prenda, $descripcion, $precio);
            if(!empty($insert)) {
                $this->view->showInsertPrenda($insert);
                header("location: ". BASE_URL ."header");
            }
        }
        public function showModificar(){
            $this->view->showModificarPrenda();
        }
        
        public function Modificar(){
            $img=$_POST["imagen"];
            $prenda=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $precio=$_POST['precio'];
            $modificar=$this->model->updatePrenda($img, $prenda, $descripcion, $precio);
            if(!empty($modificar)) {
                $this->view->showModificarPrenda($modificar);
                header("location: ". BASE_URL ."header");
            }
        }
        public function showDelete(){
            $this->view->showEliminarPrenda();
        }
        public function delete(){
            $id=$_POST['eliminar'];
            $eliminar=$this->model->deletePrenda($id);
            if(!empty($eliminar)) {
                $this->view->showEliminarPrenda($eliminar);
                header("location: ". BASE_URL ."header");
            }
        }
    }
         
        
    
        
?>