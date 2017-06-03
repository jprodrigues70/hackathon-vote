<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/vote.php');

    class Vote_controller extends \Controller\Base {

        public $fillneeded = ['teams_id' => 'equipe', 'grade' => 'nota', 'criterias_id' => 'critério'];
        public $actions = [];
        public $location = '../teams';

        function __construct() {
          if (session_status() != PHP_SESSION_ACTIVE) session_start();
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 50) {
            $this->actions = ['store'];
            $this->location = '../teams';
          }
          if (!empty($_SESSION['on']) && $_SESSION['level'] == 90) {
              $this->location = '../team';
          }

          parent::__construct();
        }


        public function store($location = false) {
            $_REQUEST['users_id'] = $_SESSION['id'];

            $votes = $_REQUEST;

            foreach ($votes['criterias_id'] as $key => $criteria) {
                $_REQUEST['criterias_id'] = $criteria;
                $_REQUEST['grade'] = $votes['grade'][$key];
                $obj = new $this->model($_REQUEST);
                try {
                    $obj->insert();
                    $_SESSION['msg'] = 'success"><button type="button" class="close"></button><p>Obrigado pelo seu voto! :D</p>';
                } catch (\PDOException $e) {
                    $_SESSION['msg'] = 'danger"><button type="button" class="close"></button><p>Houve um erro. Tem certeza que ainda não votou nessa equipe?</p>';
                    header('Location:'.$this->location);
                }
            }
            header('Location:'.$this->location);

        }
    }

    $vote = new Vote_controller();
