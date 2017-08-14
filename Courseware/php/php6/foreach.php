<?php

header("content-type:text/html;charset=utf-8");	
//	循环遍历
//
//	foreach(变量名  as   $key  =>  $value ){
//
//		遍历体;
//	
//	}
//	
//	foreach(变量名  as  $value){
//
//		遍历体;
//	
//	}
//
//
//

$arr = array(1,2,3,4,5,6,7);
var_dump($arr);
foreach($arr as $k => $v){
//	var_dump($k);
//	var_dump($v);
	echo $k.'=>'.$v.'<br>';
}

$arr1=array('id','name','sex','age','city');

foreach($arr1 as $val){
	echo "<li>$val</li>";
}


?>













