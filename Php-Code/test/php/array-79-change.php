<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 15:13
 */
$arr = array('name'=>'alex','sEX'=>'male','aGe'=>12,'address'=>'Shanghai');
print_r(array_change_key_case($arr,CASE_LOWER));
echo '</br>';
print_r(array_change_key_case($arr,CASE_UPPER));