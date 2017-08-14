<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 13:43
 */


$arr = array(1,
    2,
    3,
    '7'=>array(
        'alex',
        'tom',
        'log'
    ),
    5,
    6,
    'age'=>array(
        13,
        12,
        10
    ),
    8);

var_dump($arr);

function dump($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '<pre>';

}
dump($arr);