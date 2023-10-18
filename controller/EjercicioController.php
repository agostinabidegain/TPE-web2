<?php
require_once "./model/EjercicioModel.php";
require_once "./view/EjercicioView.php";
require_once "./controller/ZonasCorporalesController.php";
require_once "./model/ZonaModel.php";
require_once "./controller/UserController.php";
require_once "./helpers/AuthHelper.php";

class EjercicioController {
    private $model;
    private $view;
    private $zonaModel;
    private $auth;

    function __construct() {
        $this->model = new EjercicioModel();
        $this->view = new EjercicioView();
        $this->zonaModel = new ZonaModel();
        $this->auth = new AuthHelper();
    }

    //obtengo todas las zonas
    function getZonas() {
        $zonas = $this->model->getEjercicios();
        return $zonas;
    }

    //obtengo ejercicio por id
    function getEjercicio($id) {
        $ejercicio = $this->model->getEjercicio($id);
        $listaZon = $this->zonaModel->getZonasList();
        $this->view->showEjercicio($ejercicio, $listaZon);
    }

    //agrego ejercicio
    function addEjercicio() {
        if ($this->auth->checkAdmin()) {
            $this->model->insertEjercicio($_POST['nom'], $_POST['zona'], $_POST['req'], $_POST['lug']);
            header('Location:' . BASE_URL . 'home');
        }
    }

    //edito ejercicio
    function editEjercicio($id) {
        if ($this->auth->checkAdmin()) {
            $this->model->updateEjercicio($_POST['nom'], $_POST['zona'], $_POST['req'], $_POST['lug'], $id);
            header('Location:' . BASE_URL . 'home');
        }
    }

    //elimino ejercicio
    function delEjercicio($id) {
        if ($this->auth->checkAdmin()) {
            $this->model->deleteEjercicio($id);
            header('Location:' . BASE_URL . 'home');
        }
    }
}
