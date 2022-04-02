<?php

namespace coding\app\controllers;

use coding\app\models\User;
use coding\app\system\AppSystem;


class UsersController extends Controller
{
    function newUser()
    {
        $this->view('new_user');
    }

   function view($viewName,$params=[]){
       AppSystem::$appSystem->router->view($viewName,$params);
   }
public function register(){
$this->view('new_user');
}
    public function  show_home(){
        // examples
        // first ex
        //$users=array('ahmed','mohameed','ali');
         // $this->view('home', $users);
        // second ex
        // $users = array(array('name'=>'ahmed','major'=>'web fullstack','social'=> 'https://facebook.com/'),
        //     array('name' => 'mohameed', 'major' => 'ERP', 'social' => 'https://github.com/'),
        //     array('name' => 'ali', 'major' => 'Network', 'social' => 'https://github.com/798u8768'));


       // $this->view('home', $users);

        // real data from database
        $users= new User();
//   $allusers=$users->select()->where()-> orderBy()-> get();//get()  build in builder quiry

        // $this->view('home', $allusers);
    }

}
