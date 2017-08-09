<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/8/9
 * Time: 21:31
 */

header("content-type:text/html;charset=utf-8");


$status = $_GET['status'];

switch ($status) {
    case 1:
        echo '登录成功!';
        break;
    case 2:
        echo '登录过期!';
        break;
    case 3:
        echo '密码错误!';
        break;
    case 4:
        echo '验证码错误!';
        break;
    default:
        echo '登录失败!';
}