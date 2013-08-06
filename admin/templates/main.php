<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowToad管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function time(){
	var now = new Date();
	var hour=now.getHours();
	var hel;
	var y =now.getFullYear();
	var mon =now.getMonth()+1;
	var d =now.getDate();
	/*document.form1.d.value=now.getDay();*/
	var h =now.getHours();
	var m =now.getMinutes();
	var s =now.getSeconds();
	document.getElementById('time').innerHTML = y+'-'+mon+'-'+d+' '+h+':'+m+':'+s;
	setTimeout("time()",1000);
}
</script>
</head>
<body onload="time()">

<h1>
<span class="action-span1"><a href="index.php?act=main">gameTowToad管理中心</a> </span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<!-- directory install start -->
<ul id="cloud_list" style="padding:0; margin: 0; list-style-type:none; color: #CC0000; position:relative; left:200px; width:150px;">
 
</ul>
<!--<div style=" position:absolute; left:380px; top:70px; height:50px;">-->
<div class="list-div">
<center><font size="4"><strong>当前时间：<span id='time'></span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;欢迎 <span style=" font-family:'楷体'; size:4"><?php  session_start(); echo $_SESSION['admin_name']; ?>&nbsp;</span>登陆管理中心</strong></font>
</center>
</div>


<!--
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title" bgcolor="#7CE4C2">管理员登陆记录</th>
   
  </tr>
  <table>
 
  <div>
  -->
  <!--
  <table cellspacing='1' cellpadding='3'>
  <th  width="5%">用户编号</th><th  width="5%">用户名</th>
  <th  width="5%">登录时间</th><th  width="5%">登陆地址</th>
 <th>用户身份</th>
  
 <?php foreach($return as $value):?>
  <tr>
  
    <td width="5%" align="center"> <?php echo $value['id'];?> </td>
    <td width="5%" align="center"> <?php echo $value['logon_name'];?></td>
    <td width="5%" align="center"><?php echo $value['logon_time'];?></td>
    <td width="5%" align="center"><?php echo $value['logon_ip'];?></td>
    <td width="5%" align="center"><?php echo $value['logon_sf'];?></td>
  
   
  </tr>
  
<?php endforeach;?>

</table>

	-->	
 
</div>
<!-- end order statistics -->
<br />
<!-- start goods statistics -->


<div id="footer">
版权所有 &copy; 2013-8-10 北京国信深蓝科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->

</body>
</html>