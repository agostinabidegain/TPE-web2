<?php
require_once "controller/EjercicioController.php";
require_once "controller/ZonasCorporalesController.php";
require_once "controller/UserController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else {
    $action = 'home';
}

$params = explode('/', $action);

$ejercicioController = new EjercicioController();
$zonasCorporalesController = new ZonasCorporalesController();
$authController = new UserController();

//cases
switch ($params[0]) {
    case 'home':
    case 'admin':
        $zonasCorporalesController->getEjerciciosConZonas();
        break;
    case 'auth':
        $authController->auth();
        break;
    case 'ViewDetail':
        $ejercicioController->getEjercicio($params[1]);
        break;
    case 'filter':
        $zonasCorporalesController->getZona($params[1]);
        break;
    case 'addEjercicio':
        $ejercicioController->addEjercicio();
        break;
    case 'editEjercicio':
        $ejercicioController->editEjercicio($params[1]);
        break;
    case 'delEjercicio':
        $ejercicioController->delEjercicio($params[1]);
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'viewAllZonas':
        $zonasCorporalesController->viewAllZonas();
        break;
    case 'addZona':
        $zonasCorporalesController->addZona();
        break;
    case 'delZona':
        $zonasCorporalesController->delZona($params[1]);
        break;
    default:
        break;
}
