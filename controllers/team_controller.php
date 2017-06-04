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

        public function getRanking($order = "DESC", $limit = null) {
            $obj = new $this->model();
            return $obj->query("SELECT `teams`.*, SUM(`votes`.`grade`) as `result` FROM `teams` INNER JOIN `votes` ON `teams`.`id` = `votes`.`teams_id` GROUP BY `votes`.`teams_id` ORDER BY `result` {$order} " . $limit);
        }

        public function getMedal($position, $reverse = false) {
            if ($reverse) {
                if ($position < 1) $position = 2;
                elseif ($position == 2) $position = 0;
            }

            switch($position + 1) {
                case 1:
                    echo 'title="Ouro!" class="gold"';
                    break;
                case 2:
                    echo 'title="Prata!" class="silver"';
                    break;
                case 3:
                    echo 'title="Bronze!" class="bronze"';
                    break;
                default:
                    echo "title=\"{$position}º\"";
                    break;
            }
        }
    }

    $tm = new Team_controller();
    $teams = $tm->loadAll();
    $team = $tm->one();
    $results = $tm->getRanking();
    $short_results = $tm->getRanking('ASC', 'Limit 3');
