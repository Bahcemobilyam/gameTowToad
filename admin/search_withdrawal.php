<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 $page = isset($_GET['page'])?$_GET['page']:1;
 if($_POST['deposit_search'] != ''){
 $search = $_POST['deposit_search'];
 }else{
   $search = $_GET['search'];
   //$hash = $_GET['hash'];
 }
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=1;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql =  mysql_query("SELECT user.user_id,user.user_hash,user.user_name, btc_withdrawal.amount/pow(10,8) as amount,btc_withdrawal.btc_withdrawal_id, btc_withdrawal.creation_time,btc_withdrawal.handle_status,btc_withdrawal.is_lock 
FROM btc_withdrawal
JOIN user ON user.user_id = btc_withdrawal.user_id
where user.user_id='$search' or user.user_hash='$search'
order by btc_withdrawal.creation_time desc limit $offset,$pagesize");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
 	$arr[]=$row;
 } 
 //var_dump($arr);
 $sql2 = mysql_query("SELECT COUNT( * ) as total
FROM btc_withdrawal
JOIN user ON user.user_id = btc_withdrawal.user_id
where user.user_id='$search' or user.user_hash='$search'");
 $rows = mysql_fetch_assoc($sql2);
 $total_rows=$rows['total'];
 $url = "search_withdrawal.php";
 include 'includes/page.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url,$search);
 include 'withdrawal_search.php';
?>