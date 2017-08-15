<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/15
 * Time: 14:16
 */

$prev = $_GET["prev"];
$next = $_GET["next"];
$account = $_GET["account"];

//echo $prev;
//echo $next;
//echo $account;


switch ($account) {
    case "jia":
        echo "$prev + $next = ".round(($prev + $next),2);
        break;
    case "jian":
        echo "$prev - $next = ".round(($prev - $next),2);
        break;
    case "chen":
        echo "$prev * $next = ".round(($prev * $next),2);
        break;
    case "chu":
        echo "$prev / $next = ".round(($prev / $next),2);
        break;
    case "yu":
         "$prev % $next = ".round(($prev & $next),2);
        break;
}