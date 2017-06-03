<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/criteria.php');

    class Criteria_controller extends \Controller\Base {

        public $fillneeded = ['username' => 'username'];

        public $actions = ['login', 'logout'];
    }

    $obj = new User_controller();
    $users = $obj->loadAll();
    $user = $obj->one();
