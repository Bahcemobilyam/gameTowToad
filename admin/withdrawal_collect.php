<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=2;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 //创建视图
 $sql_view = mysql_query("create view sum_withdrawal as SELECT SUM( btc_withdrawal.amount)/pow(10,8) as total,date(btc_withdrawal.creation_time) as time
FROM btc_withdrawal
JOIN user ON user.user_id = btc_withdrawal.user_id
where btc_withdrawal.handle_status=1000
GROUP BY date(btc_withdrawal.creation_time)
ORDER BY date(btc_withdrawal.creation_time) asc
");

$sql = mysql_query("select * from sum_withdrawal limit $offset,$pagesize");
$arr = array();
while($row = mysql_fetch_assoc($sql)){
  $arr[] = $row;
}

$sql_c = mysql_query("SELECT count(*) as total FROM sum_withdrawal");
$rows = mysql_fetch_assoc($sql_c);
 $total_rows=$rows['total'];
 $url = "withdrawal_collect.php";
 include 'includes/page_y.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url);
$smarty->assign('arr',$arr);
$smarty->assign('html',$html);
$smarty->display('withdrawal_collect.tpl');