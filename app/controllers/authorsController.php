<?php
namespace coding\app\controllers;

use coding\app\models\Author;

class AuthorsController extends Controller{

    // public function createAuthor(){
    //     $author=new AUthor();
    //     $author->name="ali";
    //     $author->phone="77878788";
    //     $author->bio="fafdasdfasdfas";
    //     $author->email="auth@gmail.com";
    //     $author->created_by=1;
    //     $author->is_active=1;
    //     $author->save();
    // }

    function view_page($parameters=null){
        $authors=new Author();
        // $allauthors=array();
        $allauthors=$authors->getAll();
 

        // print_r($allcat);
        $this->viewDashboard('main',$allauthors);

    }

        function view_details_page($parameters=null){
        $authors=new Author();
        $allauthors=$authors->getAll();

        $this->viewDashboard('details',$allauthors);

    }

    function listAll($parameters=null){

        // $parameters['status'];
        $authors=new Author();
        $allauthors=$authors->getAll();
        //print_r($allauthors);

        $this->viewDashboard('list_authors',$allauthors);

    }

 
}
?>