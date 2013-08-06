<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 $name = $_POST['name'];
 $pw = $_POST['pw'];
 $res_pw = $_POST['res_pw'];
 $isdelete = $_POST['isdelete'];
 $add = $_POST['add_name'];
 if($_GET['act'] == 'name'){
 $sql = mysql_query("select * from admin where admin_name = '$name'");
 if(mysql_affected_rows()>0){
	 echo "用户名已有";
 }else{
	 echo '用户名可用';
	 }
}else if($_GET['act'] == 'pw'){	
  if($pw != $res_pw){
   echo  "两次密码不一致";
}
}else if($_GET['act'] == 'in'){
	 $sql = mysql_query("insert into admin(admin_name,password,is_delete,add_user) 
 values('$name','$pw','$isdelete','$add')");
 if(mysql_affected_rows()>0){
	 echo "添加成功";
	 //header('Refresh:3; url=admin_list.php');
 }else{
     echo "添加失败";
	 //header('Refresh:3; url=admin_add.php');
 }
}
  

 



