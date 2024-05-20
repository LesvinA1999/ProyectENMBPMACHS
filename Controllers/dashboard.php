<?php

    class Dashboard extends Controller {
        function index(){
            $this -> views -> getView($this, "dashboard");
        }
    }

?>