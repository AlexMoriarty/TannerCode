<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 15:55
 */

function dump($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
}

$arr1 = ['name','age','sex'];
$arr2 = ['alex','12','female'];

$arr3 = array_combine($arr1,$arr2);

dump($arr3);