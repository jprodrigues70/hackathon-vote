<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/user.php');
    require_once(__DIR__ . '/../heart/lAtrium.php');

    use \Heart\lAtrium as lAtrium;

    class User_controller extends \Controller\Base {

        public $fillneeded = ['username' => 'username'];

        public $actions = ['login', 'logout'];

        function __construct() {
          if (session_status() != PHP_SESSION_ACTIVE) session_start();
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 90) {
            $this->actions = ['login', 'logout', 'delete', 'store'];
            $this->location = '../users';
          }
          parent::__construct();
        }
    }

    $usr = new User_controller();
    $users = $usr->loadAll();
    $user = $usr->one();
