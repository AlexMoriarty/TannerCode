<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/9
 * Time: 12:48
 */


header("content-type:text/html;charset=utf-8");

/*$num = 8;

if ($num>=90){
    echo '优秀';
}else if($num>=80){
    echo '良好';
}else if($num>=70){
    echo '中等';
}else if($num>=60){
    echo '及格';
}else{
    echo '不及格';
}*/


for ($year=2000;$year<=3000;$year++){
    if ($year%4 == 0 && $year%100 != 0 || $year%400 == 0){
        echo $year.'<br>';
    }
}
