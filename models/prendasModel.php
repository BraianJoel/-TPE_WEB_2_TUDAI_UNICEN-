<?php
class PrendasModel{
    private $db;

    public function __construct() {
         $this->db = new PDO ('mysql:host=localhost;'
         .'dbname=db_prendas;charset=utf8'
         , 'root', '');
    }
    public function getPrendasConEstaciones() {
        $sentencia=$this->db->prepare("SELECT prendas.*, estaciones.nombre AS estaciones FROM `prendas` INNER JOIN `estaciones` on prendas.estaciones_id=estaciones.id");
        $sentencia->execute();

        $prendas= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $prendas;
    }
    //obtener dato por ID
    public function getPrendaById($id){
        $sentencia=$this->db->prepare("SELECT * FROM `prendas` INNER JOIN `estaciones` on prendas.estaciones_id=estaciones.id WHERE prendas.id=?");
        $sentencia->execute([$id]);

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    public function orderByColumna($columna, $orden){
        $sentencia=$this->db->prepare("SELECT prendas.*, estaciones.nombre AS estaciones FROM `prendas` INNER JOIN `estaciones` on prendas.estaciones_id=estaciones.id ORDER BY $columna $orden ");
        $sentencia->execute();

        $orderByColum= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $orderByColum;
    }
    //insertar datos
    public function insertPrenda($img, $prenda, $descripcion, $precio, $estacion ){
        $sentencia=$this->db->prepare("INSERT INTO `prendas` (img, nombre, descripcion, precio, estaciones_id)
         VALUES(?,?,?,?,?)");
        $sentencia->execute(array($img, $prenda, $descripcion, $precio, $estacion));

        return $this->db->lastInsertId(); 
        
    }
        //modificar datos
    public function updatePrenda($img, $nombre, $descripcion, $precio, $estacion, $id){
        $sentencia=$this->db->prepare("UPDATE prendas SET img=?, nombre=?, descripcion=?, precio=?, estaciones_id=? WHERE id= ?");
        $sentencia->execute([ $img, $nombre, $descripcion, $precio, $estacion, $id]);

        return $sentencia->rowCount()>0; // me va a contar las filas que fueron modificadas en la BBDD 
    }
    //eliminar datos
    public function deletePrenda($id){
        $sentencia=$this->db->prepare("DELETE FROM prendas WHERE (id)=?");
        $sentencia->execute([$id]);
    }
    
    
  
}
?>



