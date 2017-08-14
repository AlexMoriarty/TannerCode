<?php

header("content-type:text/html;charset=utf-8");


//    函数参数 
//
//   function   名称(形参1,形参2,.....){
//			函数体
//   }
//
//   名称(实参1,实参2,.....)



function test($a){	
		echo $a;
	}
test(1);


echo '<br>';


$b=1;   //  全局变量  在任何地方都可以去调用


function  a($b){
//  函数内部定义的变量是局部变量   不会影响外面的变量
	$b=10;
	echo  $b;
}


a(5);

echo '<br>';
echo $b;




?>

	<h1><?php  echo $b; ?></h1>







