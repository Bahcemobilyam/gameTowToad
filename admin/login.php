<?php
session_start();
$_SESSION['user'] = $_POST['username'];
//echo $_SESSION['user'];
$username=$_POST['username'];
$password=$_POST['password'];
$logon_ip = $_SERVER['REMOTE_ADDR'];
$_SESSION['admin_name']=$_POST['username'];
$sf = $_POST['sf'];
include 'includes/connect.php';
$sql = mysql_query("select * from admin where admin_name='$username' and password='$password' and is_delete = '0'");
if(mysql_affected_rows()>0){
	//echo "登陆成功";
	if(trim(strtolower($_POST['validate'])) == strtolower($_SESSION["ckcode"])){
		$_SESSION['is_login'] = 1;
        header('Location:index.php');	
	}
	else{
		echo "验证码输入错误";
		header("Refresh:3; url='logon.html'");
		}
}else{
echo "用户名或密码错误";
header("Refresh:3; url='logon.html'");
}
