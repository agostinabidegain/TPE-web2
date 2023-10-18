<?php
require_once './lib/smarty-3.1.39/libs/Smarty.class.php';

class ZonaCorporalView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    //muestro zonas
    function showZonasCorporales($zonas, $listaZon) {
        if (!isset($_SESSION["USERNAME"])) {
            session_start();
        }
        if (!empty($_SESSION["USERNAME"])) {
            $this->smarty->assign('nombre', 'Lista de zonas');
            $this->smarty->assign('admin', $_SESSION["ADMIN"]);
            $this->smarty->assign('user', $_SESSION['USERNAME']);
            $this->smarty->assign('zonas', $zonas);
            $this->smarty->assign('listaZon', $listaZon);
            $this->smarty->display('templates/home.tpl');
        } else {
            $this->smarty->assign('nombre', 'Lista de zonas');
            $this->smarty->assign('admin', false);
            $this->smarty->assign('user', false);
            $this->smarty->assign('zonas', $zonas);
            $this->smarty->assign('listaZon', $listaZon);
            $this->smarty->display('templates/home.tpl');
        }
    }

    //muestro zona
    function showZona($zona) {
        if (!isset($_SESSION["USERNAME"])) {
            session_start();
        }
        if (!empty($_SESSION["USERNAME"])) {
            $this->smarty->assign('nombre', 'Lista de zonas');
            $this->smarty->assign('admin', $_SESSION["ADMIN"]);
            $this->smarty->assign('user', $_SESSION['USERNAME']);
            $this->smarty->assign('zonas', $zona);
            $this->smarty->display('templates/zonaTableBody.tpl');
        }else {
            $this->smarty->assign('nombre', 'Lista de zonas');
            $this->smarty->assign('admin', false);
            $this->smarty->assign('user', false);
            $this->smarty->assign('zonas', $zona);
            $this->smarty->display('templates/zonaTableBody.tpl');
        }
    }

    //home
    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
    }

    //muestro lista zonas
    function showZonasList($zonas) {
        if (!isset($_SESSION["USERNAME"])) {
            session_start();
        }
        if (!empty($_SESSION["USERNAME"])) {
            $this->smarty->assign('nombre', 'Lista de Zonas');
            $this->smarty->assign('admin', $_SESSION["ADMIN"]);
            $this->smarty->assign('user', $_SESSION['USERNAME']);
            $this->smarty->assign('zonas', $zonas);
            $this->smarty->display('templates/zonasAllZonas.tpl');
        }else {
            $this->smarty->assign('nombre', 'Lista de Zonas');
            $this->smarty->assign('admin', false);
            $this->smarty->assign('user', false);
            $this->smarty->assign('zonas', $zonas);
            $this->smarty->display('templates/zonasAllZonas.tpl');
        }
    }
}
