<?php

header("content-type:text/html;charset=utf-8");	
//
//	输出值   找对应的下标 
//
//	删除数组的值  
//
//	  unset(数组变量名[key]);
//
$arr = array(1,2,3,4,5,6,7);

unset($arr[4]);

var_dump($arr);




?>













