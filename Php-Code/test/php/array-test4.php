<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/14
 * Time: 14:02
 */
header("content-type:text/html;charset=utf-8");

//$arr = [10,20,31,35,65];
//$sum = 0;
//foreach ($arr as $item) {
//    $sum += $item;
//}
//echo $sum;


$arr = [['id' => '1', 'name' => 'alex', 'age' => '18', 'address' => '上海','sex'=>'girl'],
    ['id' => '2', 'name' => 'log', 'age' => '28', 'address' => '浙江','sex'=>'boy'],
    ['id' => '3', 'name' => 'tanner', 'age' => '21', 'address' => '苏州','sex'=>'girl'],
    ['id' => '4', 'name' => 'big', 'age' => '27', 'address' => '北京','sex'=>'girl']];


echo '<table border="1" cellspacing="0" cellpadding="0" width="600">';
echo '<thead>';
foreach ($arr[1] as $key => $val) {
//    var_dump($key);
    echo "<td>".strtoupper($key)."</td>";
}
echo '</thead>';
echo '<tbody>';
foreach ($arr as $item) {
    echo "<tr>";
    foreach ($item as $val){
        echo "<td>$val</td>";
    }
    echo "</tr>";
}

echo '</tbody>';
echo '</table>';