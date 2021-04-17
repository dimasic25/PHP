<?php
$array = [];
$len = 50;
$sum = 0;
for ($i = 0; $i < $len; $i++) {
    $array[] = mt_rand(0, 100);
    $sum += $array[$i];
}

echo "Исходный массив<br>";
print_mas($array);

sort($array);
echo "<p>Сумма элементов массива: $sum</p>";
echo "<p>Минимальный элемент: $array[0]</p>";
echo "<p>Максимальный элемент: $array[49]</p>";
printf("<p>Среднее значение: %.2f</p>", $sum/$len);


function print_mas($array) {
    $j = 0;
    foreach ($array as $item) {
        echo "$j: $item<br>";
        ++$j;
    }
}
