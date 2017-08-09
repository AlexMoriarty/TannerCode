<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/10
 * Time: 00:35
 */
header("content-type:text/html;charset=utf-8");

$arr = array("张三", "男", 23, true, '上海大学');

$str = '';
$str .= "<h3>{$arr[0]}的身份信息</h3>";
$str .= "姓名: $arr[0]";
$str .= "<br>性别: $arr[1]";
$str .= "<br>年龄: $arr[2]";
$str .= "<br>婚姻: " . ($arr[3] ? '已婚' : '未婚');
$str .= "<br>毕业院校: " . ($arr[4] ? $arr[4] : '未填写');

echo $str;