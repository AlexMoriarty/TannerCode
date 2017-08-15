<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 16:01
 */

$num = range(10,100,10);
shuffle($num);
var_dump($num);

foreach ($num as $n){
    echo $n.',';
};
