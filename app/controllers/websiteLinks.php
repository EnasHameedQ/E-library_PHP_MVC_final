<?php

namespace coding\app\controllers;


class WebsiteLinks extends Controller{
    function list(){
        $this->viewWeb('/home');
    }
    function book(){
        $this->viewWeb('/book');
    }
    function categories(){
        $this->viewWeb('/categories');
    }
    function cart(){
        $this->viewWeb('/cart');
    }
    function stepper(){
        $this->viewWeb('/stepper');
    }
}
