<?php

namespace app;
class View
{
    private $model;
    private $controller;

    public function __construct($model, $controller)
    {
        $this->model = $model;
        $this->controller = $controller;
    }

    public function output()
    {
        include "page.php";
    }
}

?>