<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/10
 * Time: 16:32
 */
$mon =1;
$num = 1;
echo '<table border="1" width="600" cellpadding="0" cellspacing="0" style="text-align: center">';
for ($i=1;$i<20;$i++){
    echo '<tr>';

        switch ($mon){
            case 1:
                for ($j=1;$j<8;$j++){
//                    if($i%2==0){
//                        echo "<td style='background-color: #ccc'>$num</td>";
//                    }else{
//                        echo "<td>$num</td>";
//                    }
                    echo "<td style='background-color: #ccc'>$num</td>";
                    if($num>30){
                        $num=1;
                        $mon = 2;
                    }else{
                        $num++;
                    }
                }

                break;
            case 2:
                for ($j=1;$j<8;$j++){
//                    if($i%2==0){
//                        echo "<td style='background-color: #ccc'>$num</td>";
//                    }else{
//                        echo "<td>$num</td>";
//                    }
                    echo "<td style='background-color: #369'>$num</td>";
                    if($num>29){
                        $num=1;
                        $mon =1;
                    }else{
                        $num++;
                    }
                }

                break;

        }

    echo '</tr>';
}
echo '</table>';