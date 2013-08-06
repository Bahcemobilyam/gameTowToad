<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=3;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql = mysql_query("select user.user_id,user.user_name,user.user_hash,btc_withdrawal.btc_withdrawal_id,btc_withdrawal.amount/pow(10,8) as amount,btc_withdrawal.handle_status,btc_withdrawal.creation_time,btc_withdrawal.is_lock from btc_withdrawal join user on user.user_id=btc_withdrawal.user_id order by user.user_id desc,btc_withdrawal.creation_time desc limit $offset,$pagesize");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
   $arr[]=$row;
 }
 //var_dump($arr);
 //die();
 $sql_c = mysql_query("select count(*) as total from btc_withdrawal join user on user.user_id=btc_withdrawal.user_id");
 $rows = mysql_fetch_assoc($sql_c);
 $total_rows=$rows['total'];
 $url = "withdrawal_list.php";
 include 'includes/page_y.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url);
 include "demo/templates/withdrawal_list.php";