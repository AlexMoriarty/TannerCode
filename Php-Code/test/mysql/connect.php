<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/15
 * Time: 15:01
 */

header("content-type:text/html;charset=utf-8");

$db_host = "alex.com";
$db_user = "root";
$db_pwd = "alex";
$db_name = "alex";

$link = @mysql_connect($db_host, $db_user, $db_pwd);

if (!$link) {
    echo "php链接失败" . mysql_error();
    exit();
}

if (!mysql_select_db($db_name, $link)) {
    echo "选择数据库{$db_name}失败!" . mysql_error();
    exit();
}

mysql_query("set names utf8");

$sql = "SELECT * FROM 007_news WHERE id < 100";
$result = mysql_query($sql,$link);

$arr = mysql_fetch_row($result);


echo "<pre>";
print_r($arr);
echo "<pre>";


