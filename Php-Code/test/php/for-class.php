<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/10
 * Time: 17:20
 */


echo "<table>";

for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < $i; $j++) {
        echo "<td>*</td>";
    }
    echo "</tr>";
}

for ($i = 10; $i > 1; $i--) {
    echo "<tr>";
    for ($j = 1; $j < $i; $j++) {
        echo "<td>*</td>";
    }
    echo "</tr>";
}

for ($i = 10; $i > 1; $i--) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        if ($j < $i) {
            echo "<td>&nbsp;</td>";
        } else {
            echo "<td>*</td>";
        }

    };
    echo "</tr>";
}

for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        if ($j < $i) {
            echo "<td>&nbsp;</td>";
        } else {
            echo "<td>*</td>";
        }

    };
    echo "</tr>";
}

for ($i = 10; $i > 1; $i--) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        if ($j < $i) {
            echo "<td>&nbsp;</td>";
        } else {
            echo "<td>*</td>";
        }

    };
    for ($j = 1; $j < $i; $j++) {
        echo "<td>*</td>";
    }
    echo "</tr>";
}

echo "</table>";