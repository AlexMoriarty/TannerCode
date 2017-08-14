<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 14:46
 */

function getSum($num)
{
    if ($num == 1) {
        return 1;
    }
    $temp = getSum($num - 1);
    echo 'a';
    return $num + $temp;
}

echo getSum(4);