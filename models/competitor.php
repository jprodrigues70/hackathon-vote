<?php
    require_once(__DIR__ . '/../heart/model/base.php');

    class Competitor extends \Model\Base {
        public $fillable = ['name', 'teams_id'];
    }
