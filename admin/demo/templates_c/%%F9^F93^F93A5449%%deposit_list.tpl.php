<?php /* Smarty version 2.6.26, created on 2013-08-05 07:10:21
         compiled from deposit_list.tpl */ ?>
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
<span class="action-span1"><a href="">gameTowTOad管理中心</a> </span><span id="search_id" class="action-span1"> - 存款列表 </span>
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
      <th>用户id</th>
      <th>用户名</th>
      <th>存款数额(BTC)</th>
      <th>存款时间</th>
      </tr>
       <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arr']):
?>
     <tr>
      <td class="first-cell" width="118" align="center">
       <?php echo $this->_tpl_vars['arr']['user_id']; ?>

       </td>
      <td class="first-cell" width="118">
       <?php echo $this->_tpl_vars['arr']['user_name']; ?>

       </td>
      <td align="center" width="118"><?php echo $this->_tpl_vars['arr']['amount']; ?>
</td>
      <td align="center" width="118"><?php echo $this->_tpl_vars['arr']['creation_time']; ?>
</td>
    
    </tr>
    <?php endforeach; endif; unset($_from); ?> 
    <tr>
    <td align="right" nowrap="true" colspan="6">
    <div id="turn-page">
    <?php echo $this->_tpl_vars['html']; ?>

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