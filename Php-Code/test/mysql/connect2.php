<meta http-equiv="Content-Type" content="text/html;charset=utf-8 ">
<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/8/15
 * Time: 16:13
 */
//header("content-type:text/html;charset=utf-8");

//1.定义数据库的配置信息
$db_host = "alex.com";
$db_user = "root";
$db_pwd = "alex";
$db_name = "alex";

//2.登录MySQL服务器
$link = @mysql_connect($db_host, $db_user, $db_pwd);
if (!$link) {
//    如果链接失败显示的内容
    echo "<p style='color: red'>PHP链接MySQL服务器失败!</p>";
    exit(); //中止脚本继续向下执行
}

//3.选择当前要操作的数据库
if (!mysql_select_db($db_name)) {
//    选择数据库失败的提示
    echo "<p style='color: red'>选择数据库{$db_name}失败!</p>";
    exit();
}

//4.设置请求或返回MySQL数据库的字符集
mysql_query("set names utf8");

//5.执行各种SQL预语句
$sql = "SELECT * FROM 007_news ORDER BY id DESC";
$result = mysql_query($sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻列表</title>
</head>
<body>
<table border="1" width="100%" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#efefef">
        <th>编号</th>
        <th>新闻标题</th>
        <th>作者</th>
        <th>来源</th>
        <th>排序</th>
        <th>点击率</th>
        <th>发布时间</th>
    </tr>
    <?php
        while($arr = mysql_fetch_row($result)){
    ?>
    <tr>
        <td><?php echo $arr[0]?></td>
        <td><?php echo $arr[2]?></td>
        <td><?php echo $arr[3]?></td>
        <td><?php echo $arr[4]?></td>
        <td><?php echo $arr[7]?></td>
        <td><?php echo $arr[9]?></td>
        <td><?php echo $arr[10]?></td>
    </tr>
    <?php }?>
</table>
</body>
</html>














