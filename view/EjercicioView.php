<?php
require_once './lib/smarty-3.1.39/libs/Smarty.class.php';

class EjercicioView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    //muestro ejercicios
    function showEjercicios($ejercicios) {
        $this->smarty->assign('nombre', 'Lista de ejercicios');
        $this->smarty->assign('ejercicios', $ejercicios);
    }

    //muestro zonas con sus respectivos ejercicios
    function showEjerciciosZona($ejercicios) {
        $this->smarty->assign('nombre', 'Lista de ejercicios');
        $this->smarty->assign('ejercicios', $ejercicios);
    }

    //muestro ejercicio
    function showEjercicio($ejercicio, $listaZon) {
        $this->smarty->assign('nombre', $ejercicio[0]->nombre);
        $this->smarty->assign('ejercicio', $ejercicio);
        session_start();
        if (!empty($_SESSION["USERNAME"])){
            $this->smarty->assign('user', $_SESSION["USERNAME"]);
            $this->smarty->assign('listaZon',$listaZon);
            $this->smarty->assign('admin',$_SESSION["ADMIN"]);
        }else {
            $this->smarty->assign('admin',false);
            $this->smarty->assign('user',false);
        }
        $this->smarty->display('templates/ejercicioDetail.tpl');
    }

    //home
    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
    }
}
