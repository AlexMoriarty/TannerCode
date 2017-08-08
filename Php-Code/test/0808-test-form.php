<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 01:46
 */
header("content-type:text/html;charset=utf-8");
if (isset($_POST['ac']) && $_POST['ac'] == 'login'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    echo "用户名: {$username},密码: {$pwd}";


}

?>
<hr>
<form action="" method="post" name="form1">
    用户名:<input type="text" name="username" value="">
    <br>
    密码:<input type="password" name="pwd" value="">
    <br>
    <input type="hidden" name="ac" value="login">
    <input type="submit" value="提交">
</form>

