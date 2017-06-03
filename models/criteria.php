<?php
    require_once(__DIR__ . '/../heart/model/base.php');

    class Criteria extends \Model\Base {
        public $fillable = ['title', 'description', 'weight'];
    }
