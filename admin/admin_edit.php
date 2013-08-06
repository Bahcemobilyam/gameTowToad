<?php
session_start();
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
 $id = $_GET['id'];
 $res_pw  = $_POST['res_pw'];
 $name = $_POST['admin_name'];
 $password = $_POST['password'];
 if(!empty($_GET['id'])){
$sql = mysql_query("select admin_name from admin where admin_id='$id'");
$res = mysql_fetch_assoc($sql);
if($res['admin_name'] == $_SESSION['user']){
  //echo "heh";
  $sql = mysql_query("select * from admin where admin_id = $id");
  $arr = mysql_fetch_assoc($sql);  
  $smarty->assign('arr',$arr);
   $smarty->display('admin_edit.tpl');
}else{
  echo "只能编辑自己的信息";
  header("Refresh:3; url='admin_list.php'");
}
}else{
 $id = $_POST['admin_id'];
 if($password  == $res_pw){
 
 //echo $id.$name.$password;
 $sql = mysql_query("update admin set admin_name='$name',password='$password' where admin_id=$id ");
 if(mysql_affected_rows()>0){
	 echo "修改成功,请重新登录";
	 $_SESSION['is_login'] = 0;
	 header("Refresh:3; url='admin_list.php'");
 }/*else{
     echo "修改失败";
	 header("Refresh:3; url='admin_edit.php'");
 }*/
}else{
  echo "两次输入的密码不一致";
   header("Refresh:3; url='admin_edit.php?id=$id'");
}
}