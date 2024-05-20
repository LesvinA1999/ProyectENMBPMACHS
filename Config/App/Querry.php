<?php

    class Querry extends Connection{
        private $pdo, $con, $sql;
        public function __construct(){

            $this->pdo = new Connection();
            $this->con = $this->pdo->conect();

        }
        public function select(string $sql){
            $this->sql = $sql;
            $result = $this->con->prepare($this->sql);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;

        }
    }

?>