<?php

header('content-type:text/html;charset=utf-8');

/*
数据类型 

	4个标量   整型(int)、浮点型(float)、字符串(string)、布尔型(bool))

	2复合     数组(array)、对象(object)

	2特殊	  资源(resource)、空(null)


	echo   打印字符值

	var_dump()	 打印值和类型
 */

$a=1234;

echo $a;
var_dump($a);    //  int 整型

var_dump(1.6);   //  float 浮点

var_dump(false);  //  bool  布尔 false

var_dump(true);   //  bool  布尔 true


$china= '中国';

var_dump($china);  // string  字符串
var_dump('abcd');
var_dump("123abcd");



$arr =  array(1,2,3,4,5,6);   // array   数组 
var_dump($arr);



class Person{			// object 对象
}
$user = new  Person;
 
var_dump($user);


$link =@ mysql_connect('localhost','root','123qwe');   

var_dump($link);    //  resource  资源

?>










