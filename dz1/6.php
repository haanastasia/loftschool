<?php
// шестое задание
$rows = 10;
$cols = 10;

?>
<table border="1" align="center">
    <?php
    for ($tr = 1; $tr <= $rows; $tr++) {

        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++) {
            if ($tr % 2 == 0 and $td % 2 == 0) {
                echo "<td>(" . $tr * $td . ")</td>";
            } elseif ($tr % 2 != 0 and $td % 2 != 0) {
                echo "<td>[" . $tr * $td . "]</td>";
            } else {
                echo "<td>" . $tr * $td . "</td>";
            }

        }

        echo "</tr>";
    }

    ?>
</table>
<style>
    * {
        font-family: arial;
    }

    table tr:first-child td {
        background: #ffd4d4;
    }

    table td:first-child {
        background: #ffd4d4;
    }

    table td {
        padding: 15px;
    }

    table {
        border-collapse: collapse;
        border-spacing: 1px;
    }
</style>
