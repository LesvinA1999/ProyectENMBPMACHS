<?php

    class UsersModel extends Querry {
        public function __construct() {
            parent::__construct();
        }
        public function getUser(string $user, string $passwd){
            $sql = "SELECT * FROM users WHERE UserName = '$user' AND UserPass = '$passwd'";
            $data = $this->select($sql);
            return $data;
        }
    }
?>