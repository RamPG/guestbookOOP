<?php
namespace app;
class View
{
    public $content;

    public function __construct($model)
    {
        $this->content = (array)$model;
    }

    public function output()
    {
        include "page.php";
    }
}
?>