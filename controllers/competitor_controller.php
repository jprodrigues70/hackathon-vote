<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/competitor.php');

    class Competitor_controller extends \Controller\Base {
        public $fillneeded = [];
        public $actions = [];

        function __construct() {
          if (session_status() != PHP_SESSION_ACTIVE) session_start();
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 90) {
            $this->actions = ['delete', 'store'];
          }
          parent::__construct();
        }
    }

    $cmp = new Competitor_controller();
    $competitors = $cmp->loadAll();
    $competitor = $cmp->one();
