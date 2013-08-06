<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowTOad管理中心 - 存款列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<!--<span class="action-span"><a href="trip_add.html">添加景点</a></span>-->
<span class="action-span1"><a href="">gameTowTOad管理中心</a> </span><span id="search_id" class="action-span1"> - 后台管理列表 </span>
<div style="clear:both"></div>
</h1>

<script language="JavaScript">
    function search_brand()
    {
        listTable.filter['brand_name'] = Utils.trim(document.forms['searchForm'].elements['brand_name'].value);
        listTable.filter['page'] = 1;
        
        listTable.loadList();
    }

</script>
<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">

    <tr>
      <th>后台管理者</th>
      <th>后台登陆密码</th>
      <th>是否删除</th>
      <th>添加者</th>
	  <th>删除者</th>
	  <th>操作</th>
      </tr>
       <?php foreach($arr as $arr): ?>
     <tr>
      <td class="first-cell" width="118" align="center">
       <?php echo $arr['admin_name']; ?>
       </td>
      <td class="first-cell" width="118" align="center">
       <!--<{$arr.password}>-->
       <?php echo hash('sha256',hash('sha256',$arr['password'])); ?> 
       </td>
      <td align="center" width="118">
	  <?php 
	   if($arr['is_delete']==0){
	  echo '否';}else{
	   echo "是";
	  }
	  ?></td>
      <td align="center" width="118"><?php echo $arr['add_user']; ?></td>
	  <td class="first-cell" width="118" align="center">
       <?php echo $arr['delete_name']; ?>
       <td align="center" width="118"><a href="admin_edit.php?id=<?php echo $arr['admin_id']; ?>">编辑</a>&nbsp;&nbsp;&nbsp;<a href="admin_delete.php?id=<?php echo $arr['admin_id']; ?>"> 移除</a></td>
    </tr>
      <?php endforeach;?>
    <tr>
    <td align="right" nowrap="true" colspan="6">
    <div id="turn-page">
   <?php echo $html;?>
    </div>
    </td>
	
    </tr>
  </table>

<!-- end brand list -->
</div>
</form>
  
</script>
<div id="footer">
版权所有 &copy; 2013-8-10 北京国信深蓝科技有限公司，并保留所有权利。</div>

</body>
</html>