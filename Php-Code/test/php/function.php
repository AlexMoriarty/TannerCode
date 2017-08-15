<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/11
 * Time: 14:23
 */


//function text(){
//    echo "hello world!";
//    return  "hello alex";
//}
//echo text();

//function nine($a)
//{
//    echo "<table border='1' cellspacing='0' cellpadding='0' width='900' style='text-align: center'>";
//    for ($i = 1; $i <= $a; $i++) {
//        echo "<tr>";
//        for ($j = 1; $j <= $i; $j++) {
//            echo "<td>$i &times $j = " . $i * $j . "</td>";
//        }
//        echo "</tr>";
//    }
//    echo "</table>";
//}
//nine(9);
//nine(4);
//nine(2);

//function test($b)
//{
//   global $b;
//   echo $b;
//}
//
//test(5);



function aaa($a)
{
    if($a>0){
        echo $a;
        aaa($a-1);
    }else{
        echo "no";
    }
}

aaa(20);
