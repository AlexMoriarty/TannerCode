<?php

header("content-type:text/html;charset=utf-8");

//http://localhost/6php/php7/action.php?time=2017-07-20&user=123456&pwd=123qwe&sex=0&na%5B%5D=run&na%5B%5D=music&city=%E8%8B%8F%E5%B7%9E&file=&message=12345
//
//     在URL上面显示     form默认提交方式   get
//
//     method 用什么提交方式  就要用
//     get  --->  $_GET
//     post --->  $_POST  
//     来接收

//		
//		复选框     name 名字要么不一样    要么一样加[]    name[]


//     textarea   标签之间没有空格    有空格会当做默认值
//
//
//var_dump($_GET);

//var_dump($_POST);


//var_dump($_REQUEST);

//echo "<img src='{$_POST['file']}' />";
//var_dump($_FILES);      //  form   表单注意添加    enctype 属性


//var_dump($_SERVER);

//echo $_SERVER['HTTP_REFERER'];

$user=123;  //全局变量
$abc='abc';
function test(){
	//	global $a;
	//
echo $GLOBALS['a']=123;
	//$a= 123;    // $a 局部变量
	
}

 test();

var_dump($GLOBALS);



?>





