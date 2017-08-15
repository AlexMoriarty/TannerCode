<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 16:43
 */

$fruits  = array( "lemon" ,  "orange" ,  "banana" ,  "apple" );
sort ( $fruits );
foreach ( $fruits  as  $key  =>  $val ) {
    echo  "fruits["  .  $key  .  "] = "  .  $val  .  "\n" ;
}

echo '<br>';

$fruits  = array(
    "Orange1" ,  "orange2" ,  "Orange3" ,  "orange20"
);
sort ( $fruits ,  SORT_NATURAL  |  SORT_FLAG_CASE );
foreach ( $fruits  as  $key  =>  $val ) {
    echo  "fruits["  .  $key  .  "] = "  .  $val  .  "\n" ;
}

