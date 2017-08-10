<?php

header("content-type:text/html;charset=utf-8");
//  while(条件){
//		循环体;
//  }
//
//  do{
//		循环体;
//  }while(条件);
//
//  for(初始值;判断;初始值变化){
//		循环体;
//  }
//
//
	$i=1;	
	while($i<10){
		echo $i.'<br>';
		$i++;
	}






	$i=1;	

	while($i<10){
		echo "<li style='float:left;list-style-type:none;'><a href='#'>首页</a></li>";
		$i++;
	}







	$i=10;
	do{
		echo "<li style='float:left;list-style-type:none;'><a href='#'>首页</a></li>";
		$i++;	
	}while($i<10);

















?>















