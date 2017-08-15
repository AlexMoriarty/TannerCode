<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 16:59
 */

$search_array  = array( 'first'  =>  null ,  'second'  =>  4 );

// returns false
echo isset( $search_array [ 'second' ]);

// returns true
echo array_key_exists ( 'second' ,  $search_array );
