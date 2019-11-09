<?php
error_reporting(-1);
header("Content-type: text/html; charset=utf-8");

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

class View
{
    public $content;

    public function __construct($model)
    {
        $this->content = $model;
    }

    public function output()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Guest Book</title>
            <meta charset="utf-8">
        </head>

        <body>
        <form method="post">
            <p>Ваше имя:</p>
            <input type="text" name="name">

            <p>Ваш отзыв:</p>
            <textarea name="text" rows="7" cols="30"></textarea>

            <br>
            <input type="Submit" value="Отправить">
            <br>
        </form>
        <?php
        foreach ($this->content as $item) {
            foreach ($item as $key) {
                if ($key) {
                    $text = explode(" ", $key);
                    echo "</p>" . "Имя: ", $text[0], " Отзыв: ", $text[1], " Дата: ", $text[2] . "</p>";
                }
            }
        }
        ?>
        </body>

        </html>
        <?php
    }
}

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