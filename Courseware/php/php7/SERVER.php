<?php


var_dump($_SERVER);


/*
 *'HTTP_REFERER' => string 'http://localhost/6php/php7/form.php'  
	连接到当前页面的前一页面的URL地址


 Web服务器的地址   SERVER_NAME
 Web服务器的IP地址 SERVER_ADDR
 Web服务器的端口号 SERVER_PORT
 客户端IP地址      REMOTE_ADDR


客户端发出的HTTP请求中的参数串 QUEST_STRING
Web服务器中的应用代码存放位置  DOCUMENT_ROOT

 *
 * */
echo $_SERVER['HTTP_REFERER'];


?>






