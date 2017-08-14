<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 16:47
 */
$fruits  = array( "lemon" ,  "orange" ,  "banana" ,  "apple" );
rsort ( $fruits );
foreach ( $fruits  as  $key  =>  $val ) {
    echo  " $key  =  $val \n" ;
}
