<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\system\Request;
use coding\app\system\Router;

class Controller{

   function viewDashboard($viewName,$params=[]){
       AppSystem::$appSystem->router->viewDashboard($viewName,$params);
   }
    function viewWeb($viewName, $params = [])
    {
        AppSystem::$appSystem->router->viewWeb($viewName, $params);
    }
  
}
?>