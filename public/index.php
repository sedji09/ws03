<?php 
session_start();

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;


//Initiate Router
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

//Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$router ->route($uri);


?>