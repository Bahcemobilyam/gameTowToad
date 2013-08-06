<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />

</head>

<body>
<h1>
<span class="action-span1"><a href="index.php?act=main">gameTowToad管理中心</a> </span><span id="search_id" class="action-span1">--后台用户管理</span>
<div style="clear:both"></div>
</h1>

<div class="main-div">

<table>

<form method="POST" action="admin_edit.php">
<tr>
<td width="31%" align="right"><strong>管理id：</strong></td>
<td width="69%"><input type="text" style=" width:200px; background-color:#CCCCCC;" name='admin_id' value="<{$arr.admin_id}>" readonly='readonly'/></td>
</tr>
<tr>
<td align="right"><strong>管理姓名：</strong></td>
<td><input type="text" name="admin_name" size="45" value="<{$arr.admin_name}>"/></td>
</tr>
<tr>
<td width="31%" align="right"><strong>密码：</strong></td>
<td width="69%"><input type="password" name="password" size='45'/></td>
</tr>
<tr>
<td width="31%" align="right"><strong>确认密码：</strong></td>
<td width="69%"><input type="password" name="res_pw" size='45'/></td>
</tr>
<tr><td></td><td><input type="submit" value="确定修改" style=" position:relative; left:140px;" />

</td></tr>

</form>
</table> 

</div>
<div id="footer">
版权所有 &copy;2013-8-10 北京国信深蓝科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->

</body>
</html>
