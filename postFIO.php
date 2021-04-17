<?php
echo <<< _END
<html><head><title>PHP-форма для загрузки ФИО</title></head><body>
<form method='post' action='postFIO.php'>
<p>Введите ваше имя: <input type='text' name='first_name'></p>
<p>Введите вашу фамилию: <input type='text' name='last_name'></p>
<p>Введите ваше отчество: <input type='text' name='patronymic'></p>
<input type='submit' value='Загрузить'>
</form>
_END;

if ($_POST['first_name'] && $_POST['last_name'] && $_POST['patronymic']) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $patronymic = $_POST['patronymic'];
    $FIO = $last_name . ' ' . $first_name . ' ' . $patronymic;
    echo "Ваше ФИО: $FIO";
} else echo "Данные не были введены!";

echo "</body></html>";