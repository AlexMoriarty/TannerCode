<?php

header("content-type:text/html;charset=utf-8");	
//	数组函数

//each()：返回数组中当前的键／值对并将数组指针向前移动一步

$arr1  =  array('id'=>1,'name'=>'tom','age'=>16);

var_dump(each($arr1));
//var_dump(each($arr));
//var_dump(each($arr));

//list()：把数组中的值赋给一些变量
//list() 仅能用于数字索引的数组并假定数字索引从 0 开始。 

//$arr= array(1,2,3);
//var_dump(list($a,$b,$c)=$arr);
//echo $a.$b.$c;
$arr= each($arr1);

list($a,$b)=$arr;

echo $a.$b;



?>













