<?php
require_once './view/UserView.php';
//Check si es admin
class AuthHelper {
    //private $view;

    //function __construct() {
    //    $this->$view = new UserView();
    //}

    //public function checkAdmin() {
    //    if(isset($_SESSION['ADMIN'])&&($_SESSION['ADMIN'])) {
    //        return true;
    //    }else {
    //        this->view->showError();
    //        return false;
    //    }
    //}

    public function checkAdmin() {
        return true;
    }
}