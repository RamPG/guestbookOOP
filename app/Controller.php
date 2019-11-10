<?php
namespace app;
class Controller
{
    public $text;
    public $name;
    public $date;

    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
        $this->date = date("Y-M-D-H:i:s");
    }
}
?>
