<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/10
 * Time: 19:38
 */

echo "<table border='1' cellspacing='0' cellpadding='0' width='900' style='text-align: center'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td>$i &times $j = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";