<?php

use app\Controller;
use app\View;
use app\Model;

error_reporting(-1);
header("Content-type: text/html; charset=utf-8");

require_once __DIR__ . '/vendor/autoload.php';

if (!empty($_POST)) {
    $model = new Model($_POST["name"], $_POST["text"]);
    $controller = new Controller($model, file_get_contents("book.txt"));
    $controller->putContent();
    $view = new View($model, $controller);
    header("Location: {$_SERVER['PHP_SELF']}");
} else {
    $model = new Model();
    $controller = new Controller($model, file_get_contents("book.txt"));
    $view = new View($model, $controller);
    $view->output();
}