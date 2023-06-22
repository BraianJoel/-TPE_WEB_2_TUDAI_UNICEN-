<?php
    class loginModel{
        private $db;

        public function __construct() {
            $this->db = new PDO ('mysql:host=localhost;'
            .'dbname=db_prendas;charset=utf8'
            , 'root', '');
        }
        public function getUsersById($username) {
            $sentencia=$this->db->prepare ("SELECT * FROM 'users' WHERE (usurname)=?");
            $sentencia->execute(Array($username));

            $username=$sentencia->fetch(PDO::FETCH_OBJ);
        }
}