<meta charset="utf-8">
<style>
    * {
        padding: 0;
        margin: 0;
    }
</style>

<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/10
 * Time: 16:32
 */
//header("content-type:text/html;charset=utf-8");

$day = 1;
$num = 1;
$x = 36;
echo '<table border="1" width="600" cellpadding="0" cellspacing="0" style="text-align:center">';
echo "<thead><tr><td colspan='7'><h3>2017年</h3></td></tr></thead>";
echo '<tbody>';
for ($i = 1; $i < 13; $i++) {
    echo "<tr bgcolor='#5f9ea0'><td colspan='7'>{$i}月</td></tr>";
    echo "<tr bgcolor='#ccc'><td>周日</td><td>周一</td><td>周二</td><td>周三</td><td>周四</td><td>周五</td><td>周六</td><tr>";
    for ($j = 1; $j < $x;) {
        echo "<tr>";
            for($k=0;$k<7;$k++){
                echo  "<td>";
                getDay($i);
                echo  "</td>";
            }
        echo "</tr>";
    }
}
echo '</tbody>';
echo '</table>';


function getDay($month){
    global $j;

    if($month<=7){
        if($month == 2){
            if($j>29){
                echo "-";
            }else{
                echo $j;
            }
        }else{
            if($month%2==0){
                if($j>30){
                    echo "-";
                }else{
                    echo $j;
                }
            }else{
                if($j>31){
                    echo "-";
                }else{
                    echo  $j;
                }
            }
        }
    }else{
        if($month%2==0){
            if($j>31){
                echo "-";
            }else{
                echo $j;
            }
        }else{
            if($j>30){
                echo "-";
            }else{
                echo  $j;
            }
        }
    }
    $j++;
}