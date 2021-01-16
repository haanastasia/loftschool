<?php
function task1(array $strings, $unite = false)
{
    foreach ($strings as $string) {
        echo "<p>" . $string . "</p>";
    }

    if ($unite) {
        return '<p>' . implode(',', $strings) . '</p>';
    }
}

function task2()
{
    return 'SOMETHING';
}

function task3()
{
    return 'SOMETHING';
}
