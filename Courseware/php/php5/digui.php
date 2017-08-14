<?php

header("content-type:text/html;charset=utf-8");


//  递归函数
//
//			自己调用自己
//




function pd($a){
if($a>0){
	echo $a;
	pd($a-1);
}else{
	echo '你已经不能在继续下去了';
}
}

pd(10);



$a=5;
if($a>0){
	echo $a;//5
	$a--;
		if($a>0){
			echo $a;//4
			$a--;
				if($a>0){
					echo $a;//3
					$a--;
					  if($a>0){
						echo $a;//2
						$a--;
							if($a>0){
								echo $a;//1
								$a--;
								if($a>0){
									echo $a;
									$a--;
								}else{
									echo '你已经不能在继续下去了';
								}
							}else{
									echo '你已经不能在继续下去了';
								}
					  }else{
						echo '你已经不能在继续下去了';
						}
				}else{
					echo '你已经不能在继续下去了';
				}
		}else{
			echo '你已经不能在继续下去了';
		}

}else{
	echo '你已经不能在继续下去了';
}














?>






