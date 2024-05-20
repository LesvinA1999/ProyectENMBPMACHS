<?php

    class Users extends Controller{

        public function __construct(){
            session_start();
            parent::__construct();
        } 

        public function index(){
            $this->views->getView($this, "index");
        }

        public function validate(){
            if (empty($_POST['user']) || empty($_POST['userpass'])) {
                $msg = "Empty fields";
            }else{
                $user = $_POST['user'];
                $passwd = $_POST['userpass'];
                $data = $this->model->getUser($user, $passwd);
                if ($data) {
                    $_SESSION['UserId'] = $data['UserId'];
                    $_SESSION['UserName'] = $data['UserName'];
                    $msg = "Ok";
                }else {
                    $msg = "User or password is invalid";
                }
            }
            echo json_encode($msg);
            die();
        }
    }
?>