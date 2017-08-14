<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 16:52
 */
$fruits  = array( "d" => "lemon" ,  "a" => "orange" ,  "b" => "banana" ,  "c" => "apple" );
krsort ( $fruits );
foreach ( $fruits  as  $key  =>  $val ) {
    echo  " $key  =  $val \n" ;
}
