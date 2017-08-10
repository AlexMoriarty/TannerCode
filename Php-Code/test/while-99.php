<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 22:13
 */

//$str = '<table border="1" width="700" style="text-align: center;border-collapse: collapse">';
//$i = 1;
//while ($i<=9){
//    $str .= '<tr>';
//    $j=1;
//    while($j<=$i){
//        $str .= "<td>$j&times$i=".$j*$i.'</td>';
//        $j++;
//    }
//    $str .= '</tr>';
//    $i++;
//}
//
//$str .= '</table>';
//echo $str;


$str = '';
$str .= "<table border='1' style='text-align: center;border-collapse: collapse;width: 800px'>";
$i = 1;
while ($i<=9){
    $str .= "<tr>";
    $j = 1;
    while ($j<=$i){
        $str .= "<td>$j&times$i=".$j*$i."</td>";
        $j++;
    }
    $str .= "</tr>";
    $i++;
}
$str .= "</table>";
echo $str;