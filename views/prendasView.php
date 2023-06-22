<?php
    require_once('./libs/Smarty.class.php');
   


    Class prendasView  {
        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty(); // inicializo Smarty
        }
    
        function showPrendas($prendas) {
            // asigno variables al tpl smarty
            $this->smarty->assign('titulo', "Tienda de ropa vintaje - unisex"); 
            $this->smarty->assign('prendas', $prendas);
            // mostrar el tpl
            $this->smarty->display('Templates/tablaPrendas.tpl');
        }
        function showGetPrendabyId() { 
            $this->smarty->assign('titulo', 'Obtener prenda');
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/getPrenda.tpl');
        }
        function showInsertPrenda(){
            $this->smarty->assign('titulo', 'Insertar prenda');
            $this->smarty->display('Templates/addPrenda.tpl');
        }
        function showModificarPrenda(){
            $this->smarty->assign('titulo', 'Actualizar prenda');
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/updatePrenda.tpl');
        }
        function showEliminarPrenda(){
            $this->smarty->assign('titulo', 'Eliminar Prenda');
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/deletePrenda.tpl');
        }
    }
         

    
    
    
?>
