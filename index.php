<?php
require_once __DIR__ . '/../E-library_PHP_MVC_final/vendor/autoload.php';


use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__)); //createImmutable(__DIR__);
$dotenv->load();

$config = array(
  'servername' => $_ENV['DB_SERVER_NAME'],
  'dbname' => $_ENV['DB_NAME'],
  'dbpass' => $_ENV['DB_PASSWORD'],
  'username' => $_ENV['DB_USERNAME']

);
$system = new AppSystem($config);

Router::get('/users',[UsersController::class,'show']);


Router::get('/books',function(){
  echo "books route path";
});

Router::get('/new_user', [UsersController::class, 'register']);
Router::get('/home', [UsersController::class, 'show_home']);
Router::get('/login', [UsersController::class, 'login']);
Router::post('/users',[UsersController::class,'show']);
$system->start();

