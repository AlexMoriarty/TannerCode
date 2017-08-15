<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 00:42
 */

header("content-type:text/html;charset= utf-8");

/*$link =@ mysql_connect('localhost','root','123qwe');

var_dump($link);    //  resource  资源*/


define('USER','大二');
echo USER;
define('URL','http://www.jd.com');
echo '<a href="http://www.jd.com">点我</a>';

?>