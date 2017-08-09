<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 23:13
 */
header("content-type:text/html;charset=utf-8");
$money =100000;
$n = 0;
while ($money >= 5000) {
    if ($money > 50000) {
        $money *= 0.95;
    } else if ($money < 50000) {
        $money -= 5000;
    }
    $n++;
}
echo "可以{$n}次";