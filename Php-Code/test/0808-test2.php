<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/8
 * Time: 23:54
 */

header("content-type:text/html;charset=utf-8");

$name ="张三";
$age= 28;
$edu = "大学";

$str = "<h3>{$name}的基本信息</h3>";
$str .='$name';
$str .='<br>$age';
$str .='<br>$edu';


echo $str;


?>