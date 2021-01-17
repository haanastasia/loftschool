<?php
// четвертое задание
$day = 'thursday';

switch ($day) {
    case 'monday':
    case 'tuesday':
    case 'wednesday':
    case 'thursday':
    case 'friday':
        echo 'Это рабочий день';
        break;
    case 'saturday':
    case 'sunday':
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
