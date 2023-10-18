<?php
require_once "./model/ZonaModel.php";
require_once "./view/ZonaCorporalView.php";
require_once "./helpers/AuthHelper.php";

class ZonasCorporalesController {
    private $model;
    private $view;
    private $auth;

    function __construct() {
        $this->model = new ZonaModel();
        $this->view = new ZonaCorporalView();
        $this->auth = new AuthHelper();
    }

    //obtengo zonas con sus respectivos ejercicios
    function getEjerciciosConZonas() {
        $ejerciciosConZonas = $this->model->getEjerciciosConZonas();
        $listaZonas = $this->model->getZonasList();
        $this->view->showZonasCorporales($ejerciciosConZonas, $listaZonas);
    }

    //obtengo zona por id
    function getZona($idZona) {
        $ejercicios = $this->model->getZona($idZona);
        $this->view->showZona($ejercicios);
    }

    //todas las zonas
    function viewAllZonas() {
        $zonas = $this->model->getZonasList();
        $this->view->showZonasList($zonas);
    }

    //agrego zona
    function addZona() {
        if ($this->auth->checkAdmin()) {
            $this->model->addZona($_POST['zona'], $_POST['ubicacion'], $_POST['descripcion'], $_POST['huesos']);
            header('Location:' . BASE_URL . 'viewAllZonas');
        }
    }

    //elimino zona
    function delZona($id) {
        if ($this->auth->checkAdmin()) {
            $this->model->delZona($id);
            header('Location:' . BASE_URL . 'viewAllZonas');
        }
    }

    //edito zona
    function editZona($id) {
        if ($this->auth->checkAdmin()) {
            $this->model->editZona($_POST['zona'], $_POST['ubicacion'], $_POST['descripcion'], $_POST['huesos'], $id);
            header('Location:' . BASE_URL . 'viewAllZonas');
        }
    }
}