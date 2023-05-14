<?php 

use App\Core\Request;
use App\Controller\Home;


require __DIR__. "/vendor/autoload.php";


Request::get('/', [Home::class, 'index']);

Request::run();
