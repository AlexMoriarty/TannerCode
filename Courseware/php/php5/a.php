<?php

header("content-type:text/html;charset=utf-8");


//  匿名函数    
//			$变量名 = function(){};   分号不能少了
//    
//    $变量名();

$user = function($name){
			echo $name;
};

$user('jim');






function  abc(){
	echo '123';
}

$aaa= 'abc';
//abc();
$aaa();
echo $aaa;





?>






