<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/9
 * Time: 12:37
 */

//$a = '91';
//$b = 12.23;
//$c = 5.12;
//
//$num = $a - $b - $c; //17.4
//echo $num;

$i = 10; $j = $i++; echo ($i . "," . $j);   //11 10
$i = 10; $j = ++$i; echo ($i .","  . $j);   //11 11
$i = 10; $j = $i++;$i=$j++; echo ($i .","  . $j);  //10 11
$i = 10; $j = ++$i; $i=++$j; echo ($i . "," . $j); //12 12

?>