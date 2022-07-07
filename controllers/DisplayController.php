<?php
include_once('controllers/BaseController.php');

class DisplayController extends BaseController{

    function index() {
        $repositories = new Repositories();
        $data = $repositories->getAll();         
        $this->render('main',$data);
    }

    function detail($id) {
        $repositories = new Repositories();
        $data = $repositories->getById($id);
        $this->render('detail',$data);
    }

}