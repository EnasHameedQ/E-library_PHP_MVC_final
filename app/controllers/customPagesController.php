<?php

namespace coding\app\controllers;

class CustomPagesController extends Controller{

    public function notFound (){
        $this->viewDashboard('404');

    }

    public function notAuthroized(){
        
    }
}
?>