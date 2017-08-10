<?php

header("content-type:text/html;charset=utf-8");

//  for(初始值;判断;初始值变化){
//		循环体;
//  }
//
//


	for($i=1;$i<10;$i++){
		echo $i.'<br>';
	}


echo "<table border='1' width='600' cellspacing='0' cellpadding='0'>";
for($i=1;$i<10;$i++){
		echo "<tr bgcolor='#ccc'>";
		for($d=1;$d<5;$d++){
			echo '<td>'.$i.'</td>';
		}
		echo '</tr>';
	}
echo '</table>';


echo '<br><br><br><br>';

$color='yellow';
$colore='pink';

echo "<table border='1' width='600' cellspacing='0' cellpadding='0'>";
for($i=1;$i<10;$i++){

		if($i%2==0){
		echo "<tr bgcolor='$colore'>";
		}else{
		echo "<tr bgcolor='$color'>";
		
		}
		
		for($d=1;$d<5;$d++){
			echo '<td>'.$i.'</td>';
		}
		echo '</tr>';
	}
echo '</table>';












?>















