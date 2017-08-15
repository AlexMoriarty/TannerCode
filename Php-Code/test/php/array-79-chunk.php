<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 15:24
 */
function dump($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
}


$test = [1, 3, 53, 43, 65, 21, 63];
dump(array_chunk($test,4,false));



