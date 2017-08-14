<?php

header("content-type:text/html;charset=utf-8");


//    函数参数 
//
//   function   名称(形参1,形参2,.....){
//			函数体
//   }
//
//   名称(实参1,实参2,.....)

function test($b=5){
			
	global	$b;     //   global  关键字  可以把局部变量变成全局变量
	$b=30;
	var_dump($b);

}
test();
echo $b;


		//  static    静态局部变量 

function  num(){
	$i=0;
	$i++;
	echo $i;
}

num();//1
num();//1
num();//1
num();//1
echo '<br>';
function  num1(){
	static	$i=0;
	$i++;
	echo $i;
}


num1();//1
num1();//2
num1();//3
num1();//4
?>






