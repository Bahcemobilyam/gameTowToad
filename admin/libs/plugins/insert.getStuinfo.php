<?php
function smarty_insert_getStuinfo($p){
	//return $p["stuId"];
	mysql_connect('localhost','root','');
	mysql_select_db('xsxx');
	$result = mysql_query("select score from stu where id='".$p["stuId"]."'");
	$value = mysql_fetch_assoc($result);
	return $value["score"];
	}