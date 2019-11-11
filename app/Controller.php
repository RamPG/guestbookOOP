<?php
namespace app;

class Controller
{
    private $model;
    public $guestbook;
    public function __construct($model, $guestbook)
    {
        $this->model = $model;
        $this->guestbook = $guestbook;
    }
    public function putContent()
    {
        $data_put = "<p>Имя: " . $this->model->name . " " .  "Отзыв: " . $this->model->text . " " .  "Дата: " . $this->model->date . "</p>| ";
        file_put_contents("book.txt", $data_put, FILE_APPEND);
    }
}

?>
