<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/team.php');

    class Team_controller extends \Controller\Base {
        public $actions = ['store'];
    }

    $tm = new Team_controller();
    $teams = $tm->loadAll();
    $team = $tm->one();
