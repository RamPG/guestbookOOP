<?php

namespace app;
class Model
{
    public $name;
    public $text;
    public $date;

    public function __construct($name=NULL, $text=NULL)
    {
        $this->name = $name;
        $this->text = $text;
        $this->date = $this->date = date("Y-M-D-H:i:s");
    }
}

?>