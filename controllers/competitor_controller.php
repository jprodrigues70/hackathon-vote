<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/competitor.php');

    class Competitor_controller extends \Controller\Base {
        public $fillneeded = [];
        public $actions = [];
    }

    $cmp = new Competitor_controller();
    $competitors = $cmp->loadAll();
    $competitor = $cmp->one();
