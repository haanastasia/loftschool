<?php
require("src/functions.php");

echo task1(array("test", "test2"), true);
echo task2("*", 12, 1, 22, 1);
echo task3(4, 12);

echo "<br><br>"; // разделитель

// Задание #4
echo date("d.m.Y H:i") . "<br>"; // 17.02.2021 12:59
$unixTime = strtotime("24.02.2016 00:00:00"); // unixtime время соответствующее 24.02.2016 00:00:00
echo $unixTime . "<br>";

// Задание #5
$string = "Карл у Клары украл Кораллы";
echo str_replace("К", "", $string) . "<br>";
$string = "Две бутылки лимонада";
echo preg_replace("/Две/", "Три", $string);

echo "<br><br>"; // разделитель

// Задание #6
$file = fopen("test.txt", "w"); // Если файл не существует, он создается.
fwrite($file, "Hello again!"); // Записываем в наш файл текст
fclose($file); // Закрываем

echo task6("test.txt");
