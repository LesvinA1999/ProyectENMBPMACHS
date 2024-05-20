<?php

    class Home extends Controller {
        function index(){
            $this -> views -> getView($this, "index");
        }
    }

?>