<?php
    class loginModel{
        private $db;

        public function __construct() {
            $this->db = new PDO ('mysql:host=localhost;'
            .'dbname=db_prendas;charset=utf8'
            , 'root', '');
        }
        public function getUsersById($username) {
            $query = $this->db->prepare('SELECT * FROM users WHERE username = :username');
            $query->execute(array(':username' => $username));
            return $query->fetch(PDO::FETCH_ASSOC);
        }
}