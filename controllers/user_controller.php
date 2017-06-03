<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/user.php');
    require_once(__DIR__ . '/../heart/lAtrium.php');

    use \Heart\lAtrium as lAtrium;

    class User_controller extends \Controller\Base {

        public $fillneeded = ['username' => 'username'];

        public $actions = ['login', 'logout'];

        /**
         * Controls what happens on system when an user login have success or failure
         *
         * @return void
         */
        public function login() {
            $blood = lAtrium::getArterialBlood();
            if (isset($_POST)) {
                $obj = new $this->model($_REQUEST);
                $got = $obj->login();
                if ($got) {
                    (session_status() == PHP_SESSION_ACTIVE)?: session_start();
                    $_SESSION['id'] = $got->id;
                    $_SESSION['name'] = $got->name;
                    $_SESSION['on'] = true;
                    $got = null;
                    header('Location: ' . $blood['homePage']);
                } else {
                    $_SESSION['msg'] = 'fail">Houve um erro. Por favor, tente novamente.';
                    header('Location: ' . $blood['rootPage']);
                }
            }
        }
    }

    $obj = new User_controller();
    $users = $obj->loadAll();
    $user = $obj->one();