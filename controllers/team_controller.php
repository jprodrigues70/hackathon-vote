<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/team.php');

    class Team_controller extends \Controller\Base {
        public $actions = [];
        public $location = '../teams.php';

        function __construct() {
          if (session_status() != PHP_SESSION_ACTIVE) session_start();
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 90) {
            $this->actions = ['delete', 'store'];
            $this->location = '../team.php';    
          }
          parent::__construct();
        }
    }

    $tm = new Team_controller();
    $teams = $tm->loadAll();
    $team = $tm->one();
