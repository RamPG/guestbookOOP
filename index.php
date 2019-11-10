<?php
use app\Controller;
use app\View;
use app\Model;

error_reporting(-1);
header("Content-type: text/html; charset=utf-8");

require_once __DIR__ . '/vendor/autoload.php';

if (!empty($_POST)) {
    $controller = new Controller($_POST["name"], $_POST["text"]);
    $model = new Model();
    Model::putContent($controller);
    $view = new View($model);
    header("Location: {$_SERVER['PHP_SELF']}");
} else {
    $model = new Model();
    $view = new View($model);
    $view->output();
}