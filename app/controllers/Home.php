<?php
namespace app\controllers;

class Home extends \app\core\Controller {

    function index(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Location: /nextPage');
        }
        $this->view('home');
    }

    function nextPage(){
        $this->view('nextPage');
    }

}