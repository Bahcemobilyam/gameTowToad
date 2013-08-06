<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
<script src="../include/Js/jquery-1.4.2.min.js"/></script>
<script>
$(function(){
  $("#admin_name").blur(function(){
   //alert('hello');
    $name = $(this).val();
	if($name != ''){
   $.ajax({
		    url:"add_admin.php?act=name",
            type:"POST",
			data:"name="+$name,
			async:true,
			dataType:"text",
			cache:false,
			success:function(data){
			  //alert(data);
			  $("#name_is").html(data);
			  if(data == '用户名已有'){
			  $("#name_is").css('color','red');
			  }else{
			  $("#name_is").css('color','green');
			  }
			},
			error:function(xhr,errMsg){
			  alert(errMsg);
			} 
 });
 }else{
    alert('用户名不能为空');
 }
 });
 $(".res_pw").blur(function(){
   //alert('hello');
    $pw = $(".pw").val();
    $res_pw = $(this).val();
	if($pw != ''){
   $.ajax({
		    url:"add_admin.php?act=pw",
            type:"POST",
			data:"pw="+$pw+"&res_pw="+$res_pw,
			async:true,
			dataType:"text",
			cache:false,
			success:function(data){
			  //alert(data);
			  $("#res_pw").html(data);
			  $("#res_pw").css('color','red');
			  
			},
			error:function(xhr,errMsg){
			  alert(errMsg);
			} 
 });
 }else{
    alert('密码不能为空');
 }
 });  
 
 $("#btn").click(function(){
   $name_re = $("#name_is").html();
   $res_pw_re = $("#res_pw").html();
   if($name_re == '用户名可用' && $res_pw_re == ''){
	  $name = $("#admin_name").val();
	  $pw = $(".pw").val();
	  $add_name = $(".add_name").val();
	  $isdelete = $(".isdelete").val();
   $.ajax({
		    url:"add_admin.php?act=in",
            type:"POST",
			data:"name="+$name+"&pw="+$pw+"&add_name="+$add_name+'&isdelete='+$isdelete,
			async:true,
			dataType:"text",
			cache:false,
			success:function(data){
				 alert(data);			  
			},
			error:function(xhr,errMsg){
			  alert(errMsg);
			} 
 });
 }else{
   alert('填的信息有错误');
 }
 
  });
});
</script>
</head>

<body>
<h1>
<span class="action-span1"><a href="">gameTowToad管理中心</a> </span><span id="search_id" class="action-span1">--后台用户添加</span>
<div style="clear:both"></div>
</h1>

<div class="main-div">

<table>

<form method="POST" action="" class="myform">
<tr>
<td align="right"><strong>用户姓名：</strong></td>
<td><input type="text" name="admin_name" size="45" id="admin_name"/>
 <span id="name_is"></span>
</td>
</tr>
<tr>
<td width="31%" align="right"><strong>登录密码：</strong></td>
<td width="69%"><input type="password" name="password" size='45' class='pw'/></td>
</tr>
<tr>
<td width="31%" align="right"><strong>确认密码：</strong></td>
<td width="69%"><input type="password" name="res_pw" size='45' class='res_pw'/><span id="res_pw"></span></td>
</tr>
<tr>
<td width="31%" align="right"><strong>是否标记删除：</strong></td>
<td width="69%" height="40"><input type="radio" name="isdelete" value='0' checked="checked" class="isdelete"/>0<input type="radio" name="isdelete" value='1' class="isdelete"/>1<br /><span class="notice-span" style="display:block"  id="warn_brandlogo">0为不删除,1为删除</span></td>
</tr>
<tr>
<td align="right"><strong>添加者：</strong></td>
<td><input type="text" name="add_name" class='add_name' size="45" readonly="readonly" style=" background-color:#CCCCCC;" value="<?php echo $_SESSION['user']; ?>" /></td>
</tr>
<tr><td></td><td><input type="button" value="确定添加" style=" position:relative; left:140px;" id="btn" />

</td></tr>

</form>
</table> 

</div>
<div id="footer">
版权所有 &copy; 2013-8-10 北京国信深蓝科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->

</body>
</html>
