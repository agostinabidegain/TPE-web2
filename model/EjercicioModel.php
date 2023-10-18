<?php
require_once './config.php';
class EjercicioModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host='.MYSQL_HOST.';' . 'dbname='.MYSQL_DB.';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    function connect() {
        return new PDO('mysql:host=localhost;' . 'dbname='.MYSQL_DB.';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    //obtengo todos los ejercicios
    function getEjercicios() {
        $sentencia = $this->db->prepare("SELECT * from ejercicios");
        $sentencia->execute();
        $ejercicios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $ejercicios;
    }

    //obtengo ejercicio por id
    function getEjercicio($id) {
        $sentencia = $this->db->prepare("SELECT * FROM ejercicios WHERE ejercicio_id=?");
        $sentencia->execute([$id]);
        $ejercicio = $sentencia->fetchAll(PDO::FETCH_OBJ);

        $sentencia2 = $this->db->prepare("SELECT * FROM zonas WHERE zona_id=?");
        $sentencia2->execute([$ejercicio[0]->nombre]);
        $zon = $sentencia2->fetchAll(PDO::FETCH_OBJ);

        return $ejercicio;
    }

    //agrego ejercicio
    function insertEjercicio($nombre, $zona, $requerimientos, $lugar) {
        $sentencia = $this->db->prepare("INSERT INTO ejercicios(nombre, zona, requerimientos, lugar) VALUES(?, ?, ?, ?)");
        $sentencia->execute([$nombre, $zona, $requerimientos, $lugar]);
    }

    //modifico ejercicio
    function updateEjercicio($ejercicio_id, $nombre, $zona, $requerimientos, $lugar) {
        $db = $this->connect();
        $sentencia = $this->db->prepare("UPDATE ejercicios SET nombre = ?, zona = ?, requerimientos = ?, lugar=? WHERE ejercicio_id=?");
        $sentencia->execute([$nombre, $zona, $requerimientos, $lugar, $ejercicio_id]);
    }

    //elimino ejercicio
    function deleteEjercicio($ejercicio_id) {
        $db = $this->connect();
        $sentencia = $this->db->prepare("DELETE FROM ejercicios WHERE ejercicio_id = ?");
        $sentencia->execute([$ejercicio_id]);
    }
}
