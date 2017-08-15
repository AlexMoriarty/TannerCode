<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/10
 * Time: 9:23
 */


$arr = [10,[56,25,20],[21,32,90],43];

var_dump($arr[1][2]);
echo count($arr[2]);
var_dump($arr[2]);
unset($arr[2][1]);
var_dump($arr[2]);

echo count($arr[2]);