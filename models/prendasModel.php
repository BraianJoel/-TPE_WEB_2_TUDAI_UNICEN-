<?php
class prendasModel{
    private $db;

    public function __construct() {
         $this->db = new PDO ('mysql:host=localhost;'
         .'dbname=db_prendas;charset=utf8'
         , 'root', '');
    }
    public function getPrendasConPartes() {
        $sentencia=$this->db->prepare("SELECT * FROM `prendas` INNER JOIN `partes` on prendas.prendas_ID=partes.ID_prendas");
        $sentencia->execute();

        $prendas= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $prendas;
    }
    //obtener dato por ID
    public function getPrendasById($id){
        $sentencia=$this->db->prepare("SELECT*FROM prendas WHERE (id)=?");
        $sentencia->execute([$id]);

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    //insertar datos
    public function insertPrenda($img, $prenda, $descripcion, $precio ){
        $sentencia=$this->db->prepare("INSERT INTO `prendas` (img, prenda, descripcion, precio) VALUES(?,?,?,?)");
        $sentencia->execute(array($img, $prenda, $descripcion, $precio));
        
    }
        //modificar datos
    public function updatePrenda($img, $prenda, $descripcion, $precio){
        $sentencia=$this->db->prepare("UPDATE prendas SET img=? prenda=? descripcion=? precio=? WHERE=?");
        $sentencia->execute([ $img, $prenda, $descripcion, $precio]);
    }
    //eliminar datos
    public function deletePrenda($id){
        $sentencia=$this->db->prepare("DELETE FROM prendas WHERE (id)=?");
        $sentencia->execute([$id]);
    }
    
    
  
}
?>



