<?php

//一个变量的变量名可以动态的设置和使用。

$a  = 'hello';

  $$a = 'world';
//$hello = 'world';
echo $a;  //  hello

echo $$a;  //  world

echo $hello // world





?>













