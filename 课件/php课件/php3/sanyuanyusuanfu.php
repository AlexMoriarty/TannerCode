<?php

// 三元运算符
//
//          条件? 真语句 : 假语句 ;


if($a=1){
	echo 'zhen';
}else{
	echo 'jia';
}

echo $a=1? 'zhen' : 'jia';



//echo $num;
echo @$num;

$link = @mysql_connect('localhost','root','123qwe');

var_dump($link);




?>











