<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 15:33
 */

header("content-type:text/html;charset=utf-8");
function dump($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
}
$arr = [['id' => '1', 'name' => 'alex', 'age' => '18', 'address' => '上海','sex'=>'girl'],
    ['id' => '2', 'name' => 'log', 'age' => '28', 'address' => '浙江','sex'=>'boy'],
    ['id' => '3', 'name' => 'tanner', 'age' => '21', 'address' => '苏州','sex'=>'girl'],
    ['id' => '4', 'name' => 'big', 'age' => '27', 'address' => '北京','sex'=>'girl']];


dump(array_column($arr,'name'));

dump(array_column($arr,'address','name'));
