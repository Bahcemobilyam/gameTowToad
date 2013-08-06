<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 if($_POST['deposit_search'] != ''){
 $search = $_POST['deposit_search'];
 //echo $search;
 //die();
 //$hash = $_POST['deposit_hash'];
 }else{
   $search = $_GET['search'];
   //$hash = $_GET['hash'];
 }
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=1;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql =  mysql_query("SELECT user.user_id,user.user_hash,user.user_name, btc_deposit.amount/pow(10,8) as amount, btc_deposit.creation_time 
FROM btc_deposit
JOIN user ON user.user_id = btc_deposit.user_id
where user.user_id='$search' or user.user_hash='$search'
order by btc_deposit.creation_time desc limit $offset,$pagesize");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
 	$arr[]=$row;
 } 
 //var_dump($arr);
 $sql2 = mysql_query("SELECT COUNT( * ) as total
FROM btc_deposit
JOIN user ON user.user_id = btc_deposit.user_id
where user.user_id='$search' or user.user_hash='$search'");
 $rows = mysql_fetch_assoc($sql2);
 $total_rows=$rows['total'];
 $url = "search_deposit.php";
 include 'includes/page.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url,$search);
 include 'deposit_search.php';
?>