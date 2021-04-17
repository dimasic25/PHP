<?php
echo <<< _END
<html><head><title>PHP-форма для отзеркаливания</title></head><body>
<form method='get' action='mirror.php'>
Введите строку(латиница): <input type='text' name='string'>
<input type='submit' value='Загрузить'>
</form>
_END;

if ($_GET['string']) {
    $str = $_GET['string'];
    echo "<p>Исходная строка: $str</p>";
    echo "<p>Перевёрнутая строка: " . reverse($str) . "</p>";
} else echo "Данные не были введены!";

echo "</body></html>";

function reverse(string $str): string {
    $reverse_str = "";
    for ($i = strlen($str) - 1, $j = 0; $i >= 0; $i--, $j++) {
        $reverse_str[$j] = $str[$i];
    }
    return $reverse_str;
}