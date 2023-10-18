<?php
require_once './config.php';
class AuthModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host='.MYSQL_HOST.';' . 'dbname='.MYSQL_DB.';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    //agrego user
    function addUser($user, $pass) {
        $sentencia = $this->db->prepare("INSERT INTO users(mail, pass, is_admin) VALUES(?, ?, ?)");
        $sentencia->execute([$user, $pass, false]);
        header("Location: home");
    }

    //obtengo usuario
    function getUser($user) {
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE mail=?");
        $sentencia->execute([$user]);

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //obtengo usuario por id
    function getUserById($id) {
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $sentencia->execute([$id]);
        
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}
