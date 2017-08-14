<?php

header("content-type:text/html;charset=utf-8");


//    函数参数 
//
//   function   名称(形参1,形参2,.....){
//			函数体
//   }
//
//   名称(实参1,实参2,.....)


$a =10;
$b= &$a;

$a=20;

echo $a.$b;


$c= 5;
function test(&$b){
	$b=30;
	echo $b;
}

test($c);
echo $c;





?>






