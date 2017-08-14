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

$arr1=array(
	"id"=>1,
	"name"=>'tom',
	"sex"=>'男',
	"age"=>20,
	"city"=>'英国'
);

echo "<table border=1>";
echo "<tr><th>ID</th><th>NAME</th><th>SEX</th><th>AGE</th><th>CITY</th></tr>";
echo "<tr>";
foreach($arr1 as $val){

	echo "<td>$val</td>";
}
echo "</tr>";
echo "</table>";


$arr2 = array(
		
		array(
			"id"=>1,
			"name"=>'tom',
			"sex"=>'男',
			"age"=>24,
			"city"=>'法国'
		),
		array(
			"id"=>1,
			"name"=>'jim',
			"sex"=>'男',
			"age"=>21,
			"city"=>'英国'
		),
		array(
			"id"=>1,
			"name"=>'lily',
			"sex"=>'女',
			"age"=>22,
			"city"=>'美国'
		),
		array(
			"id"=>1,
			"name"=>'lucy',
			"sex"=>'女',
			"age"=>22,
			"city"=>'美国'
		)
);

var_dump($arr2);

echo "<table border=1 width=600>";
echo "<tr><th>ID</th><th>NAME</th><th>SEX</th><th>AGE</th><th>CITY</th></tr>";
foreach($arr2 as  $val){
	echo "<tr>";
	foreach($val as $v){
		echo "<td>$v</td>";
	}
	echo "</tr>";
}

echo "</table>";

echo "<table border=1 width=600>";
echo "<tr><th>ID</th><th>NAME</th><th>SEX</th><th>AGE</th><th>CITY</th></tr>";
foreach($arr2 as  $val){
	echo "<tr>";
		echo "<td>{$val['id']}</td>";
		echo "<td>{$val['name']}</td>";
		echo "<td>{$val['sex']}</td>";
		echo "<td>{$val['age']}</td>";
		echo "<td>{$val['city']}</td>";
	echo "</tr>";
}

echo "</table>";







?>













