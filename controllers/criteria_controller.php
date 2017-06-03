<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/criteria.php');

    class Criteria_controller extends \Controller\Base {
        public $fillneeded = [];
        public $location = '../teams';
        public $actions = [];

        function __construct() {
          if (session_status() != PHP_SESSION_ACTIVE) session_start();
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 90) {
            $this->actions = ['delete', 'store'];
            $this->location = '../criterias';
          }
          parent::__construct();
        }
    }

    $crt = new Criteria_controller();
    $criterias = $crt->loadAll();
    $criteria = $crt->one();
    $criteria_size = sizeof($criterias);
