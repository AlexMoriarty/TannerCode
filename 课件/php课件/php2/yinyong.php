<?php

header('content-type:text/html;charset=utf-8');

$a  = 123;
echo $a;



$city  = '上海';
echo $city;


echo '<br>';
$address =& $city;

//代码从上到下 相同的变量会把上面的值覆盖掉
$city = '杭州';

echo  $city;
echo '<br>';
echo  $address;


?>













