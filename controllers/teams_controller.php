<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/team.php');

    class Team_controller extends \Controller\Base {
        public $actions = ['read'];
    }

    $obj = new User_controller();
    $users = $obj->loadAll();
    $user = $obj->one();
