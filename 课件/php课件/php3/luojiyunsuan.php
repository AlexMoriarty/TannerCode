<?php


//  逻辑运算符
//
//    为假的情况  详情见  false.png   
//
//      且 &&     满足两边条件全为真   则为真    一方为假则为假     
//
//      或 ||     满足任意一方为真     则为真   
//
//      异 Xor    满足必须一个真一个假    则为真
//
//      非 ！	   去相反面    ！真  -->  假
 //

if($a=false Xor $b=10){
	echo 'zhen';
}else{
	echo 'jia';
}


$a = 1;

if(!$a){
	echo 'true';
}else{
	echo 'false';
}




//  ||   短路为题  
$a= 10;
$b=20;
//  $a为真   后面的条件 不再去做判断
//  $a为假   后面的条件  继续做判断    
if($a=false || $c=5){

	echo $c;

}else{

	echo $a;

}





echo '<br>';
//  ||

if($b='' || $c=1){
	echo $c;
}else{
	echo '||为假';
}



//   &&  
if($a=1 && $b =2){
		echo 1;
}else{

		echo 0;
}








?>











