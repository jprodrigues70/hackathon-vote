<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/criteria.php');

    class Criteria_controller extends \Controller\Base {
        public $fillneeded = [];
        public $actions = ['store'];
    }

    $crt = new Criteria_controller();
    $criterias = $crt->loadAll();
    $criteria = $crt->one();
