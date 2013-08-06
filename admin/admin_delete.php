<?php
session_start();
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 $id = $_GET['id'];
 $delete_name = $_SESSION['user'];
 $sql = mysql_query("select is_delete from admin where admin_id=$id");
 $res = mysql_fetch_assoc($sql);
 if($res['is_delete'] == 1){
   echo "该用户已经删除";
   header("Refresh:3; url='admin_list.php'");
 }else{
 $sql = mysql_query("update admin set is_delete=1,delete_name='$delete_name' where admin_id=$id");
 if(mysql_affected_rows()>0){
    echo "删除管理员成功";
	header("Refresh:3; url='admin_list.php'");
 }else{
    echo "删除失败";
	header("Refresh:3; url='admin_list.php'");
 }
}