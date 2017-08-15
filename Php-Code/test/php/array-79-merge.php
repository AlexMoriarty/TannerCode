<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 15:46
 */

//$arr1 = [1,3,42,12,55];
//$arr2 = [89,93,21,31];

$arr1 = ['name'=>'alex','age'=>'18','sex'=>'male'];
$arr2 = ['address'=>'shanghai','id'=>'1','sex'=>'female'];
echo '<pre>';
print_r($result = array_merge($arr1,$arr2));
echo '<pre>';
