<?php

declare(strict_types=1);

use Alura\Mvc\Controller\DeleteVideoController;
use Alura\Mvc\Controller\EditVideoController;
use Alura\Mvc\Controller\VideoListController;
use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Controller\NewVideoController;
use Alura\Mvc\Controller\Controller;
use Alura\Mvc\Controller\Error404Controller;
use Alura\Mvc\Controller\VideoFormController;

require_once __DIR__ . '/../vendor/autoload.php';

$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videoRepository = new VideoRepository($pdo);
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];
$routes = require_once __DIR__ .'/../config/routes.php';

$key = "$httpMethod|$pathInfo";
if(array_key_exists($key, $routes)){
$controllerClass = $routes["$httpMethod|$pathInfo"];

$controller = new $controllerClass($videoRepository);
} else {
    $controller = new Error404Controller();
}


$controller->processaRequisicao();
