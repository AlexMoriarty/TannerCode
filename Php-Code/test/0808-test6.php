<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 01:02
 */

//var_dump($a);
echo '<br>';

$b = 'aaa';
var_dump($b);
echo '<br>';


//unset($b);
var_dump($b);
echo '<br>';

$c = '';
var_dump($c);


if (isset($b)){
    echo 'true';
}else{
    echo 'false';
}
