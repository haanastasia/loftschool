<?php
// третье задание
$age;
$age = 17;

if ($age >= 18 and $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 0 and $age < 18) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}
