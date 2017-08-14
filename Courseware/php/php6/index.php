<?php

header("content-type:text/html;charset=utf-8");	
//	数组函数

/*
	count()统计数组的元素个数
	
	array_unique()：用于移除数组中的重复元素
 
	array_search()：搜索数组中元素，返回该元素对应的键名,若不存在搜索值，返回false

	

array_merge()：合并一个或者多个数组

array_chunk():将一个数组分割成多个

array_combine()：创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值

in_array()：检查数组中是否存在某个值

array_key_exists()：检查给定的键名或索引是否存在于数组中

array_keys():返回数组中部分的或所有的键名

array_values():返回数组中所有的值



 */

$arr = array(2,3,4,9,3,'id','name'=>'tom');

var_dump($arr);
var_dump(array_keys($arr));//(0,1,2,3,4,5,'name')
var_dump(array_values($arr));  //(2,3,4,9,3,'id','tom')

//var_dump(array_search('tmd',$arr));   // false 

//var_dump(array_unique($arr));

//echo count($arr);   //  7




?>













