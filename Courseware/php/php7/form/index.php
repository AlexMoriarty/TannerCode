<?php
echo "<meta charset=utf-8>";


//var_dump($_POST);
$post = $_POST;

foreach($post as $val){
	echo $val.'<br>';
}




$user = $_POST['user'];
$pwd  = $_POST['pwd'];

echo "用户名是：".$user.'<br>';
echo "密码是 ：".$pwd;









?>














