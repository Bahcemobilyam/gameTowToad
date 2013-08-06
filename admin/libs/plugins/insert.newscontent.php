<?php

function smarty_insert_newscontent($result){
	mysql_connect('localhost','root','') or die("数据库连接错误");
	mysql_select_db('news') or die("数据库连接错误");
	$res = mysql_query("select content from new where id = '".$result['newsId']."'");
	$value = mysql_fetch_assoc($res);
	return $value["content"];
	
	}