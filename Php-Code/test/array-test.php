<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/9
 * Time: 14:00
 */

header("content-type:text/html;charset=utf-8");

/*$score1 = array(90,23,100,56,78);
$score2 = [90,82,76,65,34];
var_dump($score1);
print_r($score2);
echo '<br>';
echo $score1[3];
echo '<br>';
print_r($score2[1]);

$scoreA = array('牛二'=>78,'张三'=>90,'李四'=>23,'王五'=>100,'赵六'=>56);
$scoreB = ['牛二'=>98,'张三'=>80,'李四'=>63,'王五'=>40,'赵六'=>36];
var_dump($scoreA);
print_r($scoreB);
echo '<br>';
echo $scoreA['张三'];
echo '<br>';
print_r($scoreB['赵六']);*/


$store = array(
    'apple'=>array(
        'money'=>20,
        'num'=>30,
        'from'=>'南汇'
    ),'pear'=>array(
        'money'=>70,
        'num'=>10,
        'from'=>'温州'
    ),'orange'=>array(
        'money'=>10,
        'num'=>70,
        'from'=>'新疆'
    )
);

print_r($store);
var_dump($store);
echo '<br>';
print_r($store['pear']);
echo '<br>';


//foreach ()




?>