<?php
 header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=2;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql = mysql_query("SELECT user.user_id,user.user_name, btc_deposit.amount/pow(10,8) as amount, btc_deposit.creation_time 
FROM btc_deposit
JOIN user ON user.user_id = btc_deposit.user_id
order by user.user_id desc,btc_deposit.creation_time desc
limit $offset,$pagesize
");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
 	$arr[]=$row;
 }
 //var_dump($arr);
 $sql2 = mysql_query("SELECT COUNT( * ) as total
FROM btc_deposit
JOIN user ON user.user_id = btc_deposit.user_id");
 $rows = mysql_fetch_assoc($sql2);
 $total_rows=$rows['total'];
 $url = "deposit_list.php";
 include 'includes/page_y.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url);
$smarty->assign("array",$arr);
$smarty->assign('html',$html);
$smarty->display("deposit_list.tpl");
?>