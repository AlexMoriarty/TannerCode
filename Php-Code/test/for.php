<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 23:17
 */

$str='';
for($i=0;$i<=100;$i++){
    if($i%2==0){
        $str .= "$i ";
    }
}

echo $str;
