<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 17:17
 */

$arr = ['name'=>'alex','age'=>'19','address'=>'shanghai'];

reset($arr);
while (list($k,$v)=each($arr)){
echo "$k => $v \n";
}