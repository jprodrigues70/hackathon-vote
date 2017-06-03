<?php
    require_once(__DIR__ . '/../heart/model/base.php');

    class Vote extends \Model\Base {
        public $fillable = ['grade', 'users_id', 'criterias_id', 'teams_id'];
    }
