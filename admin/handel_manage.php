<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 //echo "hlo";
 $id = $_POST['wid'];
 
 $sql = mysql_query("update btc_withdrawal set is_lock = 2 where btc_withdrawal_id = $id");
 if(mysql_affected_rows()>0){
   echo "锁定成功";
 }else{
   echo "锁定失败";
 }