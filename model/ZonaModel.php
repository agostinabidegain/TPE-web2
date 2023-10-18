<?php
require_once './config.php';
class ZonaModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host='.MYSQL_HOST.';' . 'dbname='.MYSQL_DB.';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    function getEjerciciosConZonas() {
        $sentencia = $this->db->prepare("SELECT zonas.nombre AS nombre_zona, ejercicios.ejercicio_id, ejercicios.nombre, ejercicios.requerimientos, ejercicios.lugar, zonas.zona_id
        FROM ejercicios INNER JOIN zonas ON ejercicios.zona = zonas.zona_id");
        $sentencia->execute([]);
        $arr = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $arr;
    } 

    function getZona($idZona) {
        if ($idZona == 0) {
            return $this->getEjerciciosConZonas();
        }

        $sentencia = $this->db->prepare("SELECT zonas.nombre AS nombre_zona, ejercicios.ejercicio_id, ejercicios.nombre, ejercicios.requerimientos, ejercicios.lugar, zonas.zona_id
        FROM ejercicios INNER JOIN zonas ON ejercicios.zona = zonas.zona_id WHERE ejercicios.zona=?");
        $sentencia->execute([$idZona]);
        $arr = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $arr;
    }

    function getZonasList() {
        $sentencia = $this->db->prepare("SELECT * FROM zonas");
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function addZona($nombre, $ubicacion, $descripcion, $huesosInvolucrados) {
        $sentencia = $this->db->prepare("INSERT INTO zonas(nombre, ubicacion, descripcion, huesosInvolucrados) VALUES(?, ?, ?, ?)");
        $sentencia->execute([$nombre, $ubicacion, $descripcion, $huesosInvolucrados]);
    }

    function editZona($zona_id, $nombre, $ubicacion, $descripcion, $huesosInvolucrados) {
        $sentencia = $this->db->prepare("UPDATE zonas SET nombre = ?, ubicacion = ?, descripcion = ?, huesosInvolucrados = ? WHERE zona_id=?");
        $sentencia->execute([$zona_id, $nombre, $ubicacion, $descripcion, $huesosInvolucrados]);
    }

    function delZona($zona_id) {
        $sentencia = $this->db->prepare("DELETE FROM zonas WHERE zona_id=?");
        $sentencia->execute([$zona_id]);
    }
}