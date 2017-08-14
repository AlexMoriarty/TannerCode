<?php

header('content-type:text/html;charset=utf-8');


//   NULL     
//
//   3中情况
//			1, 初始化变量
//			2，直接赋值为 NULL	
//			3，被删除的变量     （unset()）
//	
//	unset()  销毁一个变量
//	
//	isset()  检测一个变量
//

var_dump($a);

$b= null;

var_dump($b);

$c= 123;

echo $c;
var_dump($c);

// 销毁变量
unset($c);

var_dump($c);

// 检测变量
if(isset($c)){
	echo '变量存在';
}else{
	echo  '变量不存在';
}




?>










