<?php
const SECONDS_IN_DAY = 86400;

echo <<< _END
<html><head><title>PHP-форма для загрузки количества дней</title></head><body>
<form method='get' action='getDays.php'>
Введите количество дней: <input type='text' name='days'>
<input type='submit' value='Загрузить'>
</form>
_END;

if ($_GET['days']) {
    if (is_numeric($_GET['days'])) {
        $days = $_GET['days'];
        $seconds = $days * SECONDS_IN_DAY;
        echo "Количество дней: $days -  количество секунд: $seconds";
    } else echo "Введено не число!";
} else echo "Данные не были введены!";

echo "</body></html>";
