<?php
header("Content-Type:text/html; charset=utf-8");
 require_once 'includes/connect.php';
 include 'libs/Smarty.class.php';
 include 'includes/connect_smarty.php';
  //分页
 $page = isset($_GET['page'])?$_GET['page']:1;
 $pagesize=1;//这是已知的条件
 $offset=$pagesize*($page-1);//掠过的记录数
 $sql = mysql_query("select * from admin limit $offset,$pagesize");
 $arr = array();
 while($row = mysql_fetch_assoc($sql)){
   $arr[]=$row;
 }
 //var_dump($arr);
 $sql_c = mysql_query("select count(*) as total from admin");
 $res = mysql_fetch_assoc($sql_c);
 $total_rows = $res['total'];
 $url = "admin_list.php";
 include 'includes/page_y.class.php';
 $html=page::show($total_rows,$page,$pagesize,$url);
 //$smarty->assign('arr',$arr);
 //$smarty->assign('html',$html);
 //$smarty->display('admin_list.tpl');
 include 'demo/templates/admin_list.php';
 //var_dump($arr);
