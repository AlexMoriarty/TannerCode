<?php

header("content-type:text/html;charset=utf-8");


//    函数参数 
//
//   function   名称(形参1,形参2,.....){
//			函数体
//   }
//
//   名称(实参1,实参2,.....)

function table1($rows=7,$cols=7,$ys='yellow',$width=600){
	
$color="$ys";
$colore='pink';
echo "<table border='1' width=$width cellspacing='0' cellpadding='0'>";
	for($i=1;$i<=$rows;$i++){

		if($i%2==0){
		echo "<tr bgcolor='$colore'>";
		}else{
		echo "<tr bgcolor='$color'>";
		}
			for($d=1;$d<=$cols;$d++){
				echo '<td>'.$i.'</td>';
			}
		echo '</tr>';
	}
echo '</table>';
}

table1();
table1(3,9);
//table1('blue',3,9);  会出现问题   实参值要和形参值一一对应，否则会出现问题
table(7,4,'#abcdef',800);










function table($rows,$cols,$ys,$width){
	
	
$color="$ys";
$colore='pink';

echo "<table border='1' width=$width cellspacing='0' cellpadding='0'>";
	for($i=1;$i<=$rows;$i++){

		if($i%2==0){
		echo "<tr bgcolor='$colore'>";
		}else{
		echo "<tr bgcolor='$color'>";
		}

			for($d=1;$d<=$cols;$d++){
				echo '<td>'.$i.'</td>';
			}
		echo '</tr>';
	}
echo '</table>';

}

table(6,9,'red',600);
table(9,6,'black',800);


?>






