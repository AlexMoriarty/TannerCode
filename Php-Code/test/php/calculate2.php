<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/9
 * Time: 15:40
 */
$a =10;
$c = $a++ + --$a;
$b = --$c - ++$a;
echo  $a.$b.$c;

//$x =123;
$x += 4;
echo $x;