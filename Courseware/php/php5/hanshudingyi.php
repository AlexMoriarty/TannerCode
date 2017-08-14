<?php

header("content-type:text/html;charset=utf-8");


//   函数定义
//	
//	 function    名称(){
//			函数体;
//			return 值;
//	}
//	
//	 名称规范
//	 1,  必须以字母或下划线开头，后面可以跟任意的字母、数字或下划线
//	 2,  不能以关键字作为函数名称
//   3,  函数名不区分大小写
//   4,  自定义函数名不能与PHP内置函数同名
//
//
//    调用函数     函数名()
//
//		return  返回出来的值要想看到   需要打印出来
//
////    return  返回之后的    后面的代码不会再执行了。


function  ABC(){
	echo 'ABC';
} 

  abc();
echo '<br>';

function test(){

	echo 'select';
		
	return 'delete';

//	return 'update';
	//echo 'insert';
}

 echo  test();


function    Person(){
	$arr=array('程黎鸣','范帅','段杨坤','谈浩');
	
	return  $arr; 
}


var_dump(Person());















