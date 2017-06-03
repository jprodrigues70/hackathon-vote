<?php
    require_once(__DIR__ . '/../heart/controller/base.php');
    require_once(__DIR__ . '/../models/vote.php');

    class Vote_controller extends \Controller\Base {

        public $fillneeded = ['users_id' => 'eleitor', 'teams_id' => 'equipe', 'value' => 'nota', 'criterias_id' => 'critério'];

        public $actions = ['login', 'logout'];
    }

    $vot = new User_controller();
    $votes = $vot->loadAll();
    $vote = $vot->one();
