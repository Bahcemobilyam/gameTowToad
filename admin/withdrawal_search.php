<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowTOad管理中心 - 取款查询 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<link href="../include/Css/admin/main.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src="../include/Js/jquery-1.4.2.min.js"></script>
<script type='text/javascript' src="../include/Js/admin/handel_manage.js"></script>

<script>
  function search(){
    document.getElementById('brand_name').value = "";
  }
</script>
</head>
<body>

<h1>
<!--<span class="action-span"><a href="trip_add.html">添加景点</a></span>-->
<span class="action-span1"><a href="">gameTowTOad管理中心</a> </span><span id="search_id" class="action-span1"> - 取款查询 </span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
  <form action="search_withdrawal.php" name="searchForm" method="post">
    <img src="../include/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <input type="text" id="brand_name" name="deposit_search" size="65" value="<?php echo isset($search)?$search:'取款人id/hash'; ?>" onfocus="search()" />
    <input type="submit" value=" 搜索 " class="button"/>
  </form>
</div>

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
      <th>取款人id</th>
      <th>取款人名</th>
	  <th>取款人hash</th>
      <th>取款数额(BTC)</th>
	  <th>取款状态</th>
      <th>取款时间</th>
      <th>处理状态<th>
      </tr>
      <!-- <{foreach from=$array item=arr}>-->
	  <?php if(@$arr):?>
	  <?php foreach($arr as $arr):?>
     <tr>
      <td class="first-cell" width="118" align="center">
       <!--<{$arr.user_id}>-->
	   <?php echo $arr['user_id'];?>
       </td>
      <td class="first-cell" width="118">
       <?php echo $arr["user_name"]; ?>
       </td>
	   <td class="first-cell" width="118">
       <?php echo $arr["user_hash"]; ?>
       </td>
      <td align="center" width="118"><?php echo $arr['amount'];?></td>
	  <td align="center" width="118">
	  <?php 
	    if($arr['handle_status']=="1000"){
		  echo "取款成功";
		}else{
		  echo "取款失败";
		}
	  ?>
	  </td>
      <td align="center" width="118"><?php echo $arr['creation_time'];?></td>
      <td align="center" width="118">
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
    <!--<{/foreach}> -->
	<?php endforeach;?>
	<?php else: ?>
	   <tr><td align='center' nowrap='true' colspan='7'><?php echo "您查找的用户不存在" ?></td></tr>
	 <?php endif; ?>
    <tr>
	
    <td align="right" nowrap="true" colspan="7">
    <div id="turn-page">
    <!--<{$html}>-->
	<?php if(isset($html)){
			 echo $html;
			}else{
			 echo '';}
	?>
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
<!-- 新订单提示信息 -->

</body>
</html>