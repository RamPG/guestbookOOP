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
<?php foreach (explode("| ", $this->controller->guestbook) as $item) echo $item; ?>
</body>

</html>