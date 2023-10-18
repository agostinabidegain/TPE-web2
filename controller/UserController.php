<?php
require_once './view/UserView.php';
require_once './model/UserModel.php';
require_once "./helpers/AuthHelper.php";

class UserController {
    private $model;
    private $view;
    private $auth;

    function __construct() {
        $this->model = new AuthModel();
        $this->view = new AuthView();
        $this->auth = new AuthHelper();
    }

    //autenticación
    function auth() {
        $user = $_POST['userID'];
        $pass = $_POST['passID'];

        if (isset($_POST['register'])) {
            $userDB = $this->register($user, $pass);
        }else {
            $userDB = $this->model->getUser($user);

            if ($userDB) {
                if (!password_verify($pass, $userDB->pass)) {
                    $this->view->showError();
                }
            }else {
                $this->view->showError();
            }
        }

        if ($userDB) {
            if (password_verify($pass, $userDB->pass)) {
                session_start();
                $_SESSION['ID_USER'] = $userDB->id;
                $_SESSION['USERNAME'] = $userDB->mail;

                if ($userDB->is_admin) {
                    $_SESSION['ADMIN'] = true;
                }else {
                    $_SESSION['ADMIN'] = false;
                }
            }
            header('Location: home');
        }
    }

    //registración
    function register($user, $pass) {
        if ((!empty($user)) && (!empty($pass))) {
            $userDB = $this->model->getUser($user);
            if ($userDB == null) {
                $hash = password_hash($pass, PASSWORD_BCRYPT);
                $this->model->addUser($user, $hash);
                return $this->model->getUser($user);
            }else {
                $this->view->showError();
            }
        }else {
            $this->view->showError();
        }
    }

    //desloguearse
    function logout() {
        session_start();
        if (isset($_SESSION['ID_USER'])) {
            session_destroy();
            header('Location: home');
        }
    }
}
