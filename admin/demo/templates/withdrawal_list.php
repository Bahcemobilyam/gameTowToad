<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowTOad管理中心 - 取款列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src="../include/Js/jquery-1.4.2.min.js"></script>
<script type='text/javascript' src="../include/Js/admin/handel_manage.js"></script>

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
      <th>取款数额(BTC)</th>
      <th>取款时间</th>
      <th>取款状态</th>
	  <th>处理状态</th>
      </tr>
       <?php foreach($arr as $arr): ?>
     <tr class="user_list">
      <td class="first-cell" width="118" align="center">
      <?php echo $arr['user_id'];  ?>
       </td>
      <td class="first-cell" width="118">
       <?php echo $arr['user_name']; ?>
       </td>
       <td align="center" width="118"><?php echo $arr['user_hash']; ?></td>
      <td align="center" width="118"><?php echo $arr['amount']; ?></td>
      <td align="center" width="118"><?php echo $arr['creation_time']; ?></td>
      <td align="center" width="118" class="operate">
       <?php 
	     if($arr['handle_status'] == 930 ){
	      echo "取款未成功";
	     }else{
	      echo "取款成功";
	      } 
		 ?>
      </td>
      <td align="center" width="118" class="handle">
	   
	   <?php 
	     if($arr['handle_status'] == 930 && $arr['is_lock'] == '1'){
	      echo "<button type='button' name=$arr[btc_withdrawal_id] class='btn_handle'>未处理 </button>";
	     }else if($arr['handle_status'] == 1000 && $arr['is_lock'] == '0'){
	      echo "<button type='button' name=$arr[btc_withdrawal_id] class='btn_handle' disabled='disabled'>已处理 </button>";
	      }else if($arr['handle_status'] == 930 && $arr['is_lock'] == '2'){
		    echo "<button type='button' name=$arr[btc_withdrawal_id] class='btn_handle' disabled='disabled'>正在处理 </button>";
		  } 
		 ?>
	  
	  </td>
    </tr>
    <?php endforeach; ?> 
    <tr>
    <td align="right" nowrap="true" colspan="7">
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