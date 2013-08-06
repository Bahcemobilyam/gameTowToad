<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=10;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql = mysql_query("select user_id,user_name,user_hash,btc_amount,stat_win_count,stat_loss_count,stat_wagered,stat_deposit_sum,stat_withdrawal_sum,login_last_time from user limit $offset,$pagesize");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
   $arr[]=$row;
 }
 //var_dump($arr);
 $sql_c = mysql_query("select count(*) as total from user");
 $rows = mysql_fetch_assoc($sql_c);
 $total_rows=$rows['total'];
 $url = "user_list.php";
 include 'includes/page_y.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url);
 $smarty->assign('arr',$arr);
 $smarty->assign('html',$html);
 $smarty->display('user_list.tpl');