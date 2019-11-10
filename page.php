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
foreach ($this->content["data_get"] as $item) {
    if (mb_strlen($item) > 2) {
        $text = explode(" ", $item);
        echo "</p>" . "Имя: ", $text[0], " Отзыв: ", $text[1], " Дата: ", $text[2] . "</p>";
    }
}
?>
</body>

</html>