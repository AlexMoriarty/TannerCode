<?php

header("content-type:text/html;charset=utf-8");	
//
//	输出值   找对应的下标 
//
//	   变量名[下标1][下标2]...
//
//
//
//   一维 数组
//
$arr = array(1,2,3,4,5,6,7);
//
//	二维 数组
//

$arr1= array(1,2,3,4,5,6,array("qw","er","tyu"));

$arr2= array(
		1,
		2,
		array('a','b'),
		4,
		5,
		6,
		array("qw","er","tyu")
	);


echo $arr2[2][0];
	
	
var_dump($arr2);

//
//	多维数组  
//	

$arr3 = array(
		1,
		6,
		7,
		8,
		array(
			1,
			1,
			2,
			3,
			4,
			5,
			array(
				'word'=>"qw",
				"re"
			)
		));

echo $arr3[4][6]['word'];
var_dump($arr3);


?>













