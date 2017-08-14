<?php

header("content-type:text/html;charset=utf-8");	
//	数组定义
//
//		第一种	array(key1=>值1,key2=>值2,key3=>值3,.....)  
//		第二种  $arr=[]
//   
//
//     操作符  ' =>	 '      key（键值）=> value (值)
//	
//	数组分类
//		
//		
//			索引数组	默认从0开始 有序自增       
//			关联数组	指定的key键值，对应着value值
//
//		混合型数组   既包含索引数组又包含关联数组
//
//
//		echo   是输出简单的数据类型   int  float bool string
//
//		var_dump   打印出 值和数据类型
//		
//		print_r()  打印数组的值
//
//
//		输出数组中指定的值     数组的变量名[key];
//
//
$arr =[1,2,3,4,5,'id'=>10,'name'=>'tom'];
var_dump($arr);

echo $arr[4];

$arr1 = array(1,7,5,6,7,'name','age');
var_dump($arr1);


$arr2 =array(
	'id'=>1,
	'name'=>'谈浩',
	'city'=>'上海',
	'email'=>'tanhao@163.com'
);


echo  $arr2['city'];



var_dump($arr2);

$user = array('tom','jim','xiaoming');
print_r($user);
var_dump($user);


?>













