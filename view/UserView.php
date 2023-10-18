<?php
require_once './lib/smarty-3.1.39/libs/Smarty.class.php';

class AuthView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    function showUsers($users)
    {
        if (!isset($_SESSION["USERNAME"])) {
            session_start();
        }
        if (!empty($_SESSION["USERNAME"])) {
            $this->smarty->assign('admin', $_SESSION["ADMIN"]);
            $this->smarty->assign('user', $_SESSION['USERNAME']);
            $this->smarty->assign('titulo', 'Lista de usuarios');
            $this->smarty->assign('users', $users);
        } else {
            $this->smarty->assign('titulo', 'Lista de usuarios');
            $this->smarty->assign('users', $users);
            $this->smarty->assign('admin', false);
            $this->smarty->assign('user', false);
        }
    }

    function showError() {
        $this->smarty->display('templates/error.tpl');
    }
}
