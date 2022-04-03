<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

    function signup_page(){
        $this->viewDashboard('signup');

    } 
     function login_page(){
        $this->viewDashboard('login');

    }

    function newUser(){
        $this->viewDashboard('new_user');
    }

        public function show(){
            $this->viewDashboard('list_categories');

    }

    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
        $user->save();
        if($user->save())
        
        $this->viewDashboard('feedback',['success'=>'data inserted successful']);
        else 
        $this->viewDashboard('feedback',['danger'=>'can not add data']);

    }

    public function register(){
        $this->viewDashboard("new_user");
    }

    public function delete(){
        
    }




}
?>