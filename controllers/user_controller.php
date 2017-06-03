<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/user.php');
    require_once(__DIR__ . '/../heart/lAtrium.php');

    use \Heart\lAtrium as lAtrium;

    class User_controller extends \Controller\Base {

        public $fillneeded = ['username' => 'username'];

        public $actions = ['login', 'logout'];
    }

    $usr = new User_controller();
    $users = $usr->loadAll();
    $user = $usr->one();
