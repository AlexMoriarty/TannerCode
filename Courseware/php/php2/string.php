<?php

header('content-type:text/html;charset=utf-8');


// 字符串     
//
//
// 单双引号区别
//
//			单引号不能解析变量      双引号是可以解析变量
//			
//			双引号里面不能穿插双引号  ， 双引号里面可以穿插单引号
//			单引号里面不能穿插单引号  ， 单引号里面可以穿插双引号
//
//
//			{}  为了防止变量后面的字符当做你的变量名称使用
//			
//
//			单引号中需要转义的字符是：\’
//			双引号中需要转义的字符有：\”  \n  \r  \t  \$  \\
//			
//
// 定界符    
//    <<<之后提供一个标识符     第一个字符必须是你的操作系统中定义的换行符

// 同样的标识符结束字符串;

$str=<<<S
	abcdengfh
	1234567890
	98765432
S;
echo $str;

echo '<br>';

$a = 'abcd';

echo $a;
echo '<br>';
echo "$a";
echo '$a';

$str = '<a href="#">点击</a>';
echo $str;

$b = 'hello  php';

echo "{$b}mysql";  

echo '<br>';
$str1= " i'm a  \\\\   //////////boy";   //    \n   \r 是换行  \\   

//$str1= ' i\'m a boy';  //  单引号要转义字符   \

echo $str1;







?>









