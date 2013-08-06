<?php /* Smarty version 2.6.26, created on 2013-08-02 01:54:49
         compiled from withdrawal_list.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowTOad管理中心 - 取款列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<!--<span class="action-span"><a href="trip_add.html">添加景点</a></span>-->
<span class="action-span1"><a href="">gameTowTOad管理中心</a> </span><span id="search_id" class="action-span1"> - 取款列表 </span>
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
      <th>用户hash</th>
      <th>取款数额</th>
      <th>取款时间</th>
      <th>取款状态</th>
      </tr>
       <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arr']):
?>
     <tr>
      <td class="first-cell" width="118" align="center">
       <?php echo $this->_tpl_vars['arr']['user_id']; ?>

       </td>
      <td class="first-cell" width="118">
       <?php echo $this->_tpl_vars['arr']['user_name']; ?>

       </td>
       <td align="center" width="118"><?php echo $this->_tpl_vars['arr']['user_hash']; ?>
</td>
      <td align="center" width="118"><?php echo $this->_tpl_vars['arr']['amount']; ?>
</td>
      <td align="center" width="118"><?php echo $this->_tpl_vars['arr']['creation_time']; ?>
</td>
      <td align="center" width="118">
      <!--<?php echo $this->_tpl_vars['arr']['handle_status']; ?>
-->
      <php>
        echo "hello";
      </php>
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
共执行 3 个查询，用时 0.026964 秒，Gzip 已禁用，内存占用 2.200 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->

<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span></td>
  </tr>
  <tr>

    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>

    </td>
  </tr>
  </table>
</div>

</body>
</html>