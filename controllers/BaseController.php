<?php

class BaseController{

    function render($view,$data) {
        require_once('views/base.php');
    }

}