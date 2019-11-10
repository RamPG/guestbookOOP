<?php
namespace app;
class Model
{
public function __construct()
{
$this->data_get = explode("| ", file_get_contents("book.txt"));
}

public static function putContent($controller)
{
$data_put = $controller->name . " " . $controller->text . " " . $controller->date . "| ";
file_put_contents("book.txt", $data_put, FILE_APPEND);

}
}
?>