<?php
    require_once(__DIR__ . '/../heart/model/base.php');

    class User extends \Model\Base {
        public $fillable = ['username', 'name'];

        /**
         * Verify credentials for system access
         *
         * @return object [Informations about the correspondent user.]
         */
        public function login() {
            $connect = self::connect();
            $stm = $connect->prepare('SELECT * FROM `'.self::entity(false).'` WHERE username = :username LIMIT 1');
            $stm->BindValue(':username',$this->username, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }
    }
