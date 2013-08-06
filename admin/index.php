<?php
session_start();
//初始化act参数
if($_SESSION['is_login'] == 1){
$_GET['act'] = isset($_GET['act'])?$_GET['act']:'';
if($_GET['act'] == 'top'){
   include "templates/top.php";
}elseif($_GET['act'] == 'menu'){
	include "templates/menu.php";
}elseif($_GET['act'] == 'drag'){
	include "templates/drag.php";
}elseif($_GET['act'] == 'main'){
	$unsend_order_number = 15;
	include 'templates/main.php';
}else{
	include 'templates/index.php';
}
}else{
	header("Content-Type:text/html; charset=utf-8");
	echo "请先登陆,三秒后返回";
	header("Refresh:3; url='logon.html'");
}