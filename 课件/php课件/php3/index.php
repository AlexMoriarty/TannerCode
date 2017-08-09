<?php

header("content-type:text/html;charset=utf-8");

//  条件语句
//       1      if(条件){}
//       2      if(条件){}else{}
//       3      if(条件){}elseif(条件){}.....else{}
//       4     switch(条件){
//					case:
//						语句1;
//					break;
//					case:
//						语句2;
//					break;
//					case:
//						语句3;
//					break;
//					.....
//					default:
//					语句;   
//             }

// index.php?day=3
$day = $_GET['day'];

switch($day){
	case 1:
		echo '周一';
		break;
	case 2:
		echo '周二';
		break;
	case 3:
		echo '周三';
		break;
	case 4:
		echo '周四';
		break;
	case 5:
		echo '周五';
		break;
	default:
		echo '周末时间';
}



if($day==1){
	echo '周一';
}elseif($day==2){
	echo '周二';
}elseif($day==3){
	echo '周三';
}elseif($day==4){
	echo '周四';
}elseif($day==5){
	echo '周五';
}else{
	echo '周末时间';
}







$a=0;

if($a==1){
	echo '男';
}elseif($a==0){
	echo '女';
}else{
	echo '人妖';
}

echo '<br>';


$a =1 ;
if($a){
	echo '男';
}else{
	echo '女';
}


echo '<br>';



$a = 123;

if($a){
	echo 'hehe';
}

echo 'haha';












?>











