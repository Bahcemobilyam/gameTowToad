<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gameTowToad管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../include/Css/admin/general.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#header-div {
  background:#37BBAE;
  border-bottom: 1px solid #FFF;
}

#logo-div {
  height: 50px;
  float: left;
}

#license-div {
  height: 50px;
  float: left;
  text-align:center;
  vertical-align:middle;
  line-height:50px;
}

#license-div a:visited, #license-div a:link {
  color: #EB8A3D;
}

#license-div a:hover {
  text-decoration: none;
  color: #EB8A3D;
}

#submenu-div {
  height: 50px;
}

#submenu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#submenu-div li {
  float: right;
  padding: 0 10px;
  margin: 3px 0;
  border-left: 1px solid #FFF;
}

#submenu-div a:visited, #submenu-div a:link {
  color: #FFF;
  text-decoration: none;
}

#submenu-div a:hover {
  color: #F5C29A;
}

#loading-div {
  clear: right;
  text-align: right;
  display: block;
}

#menu-div {
  background: #37BBAE;
  font-weight: bold;
  height: 24px;
  line-height:24px;
}

#menu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#menu-div li {
  float: left;
  border-right: 1px solid #192E32;
  border-left:1px solid #BBDDE5;
}

#menu-div a:visited, #menu-div a:link {
  display:block;
  padding: 0 20px;
  text-decoration: none;
  color: #335B64;
  background:#37BBAE;
}

#menu-div a:hover {
  color: #000;
  background:#80BDCB;
}

#submenu-div a.fix-submenu{clear:both; margin-left:5px; padding:1px 5px; *padding:3px 5px 5px; background:#DDEEF2; color:#37BBAE;}
#submenu-div a.fix-submenu:hover{padding:1px 5px; *padding:3px 5px 5px; background:#FFF; color:#278296;}
#menu-div li.fix-spacel{width:100px; border-left:none;}
#menu-div li.fix-spacer{border-right:none;}
</style>
<script type="text/javascript" src="../include/Js/admin/transport.js"></script>

</head>
<body>
<div id="header-div">

  <div id="logo-div" style=" position:relative; left:40px; top:8px;">
  <img src="../include/images/admin/top.png" />
  </div>
  <div id="submenu-div">
    <ul>
      <li><a href="" target="main-frame">关于游戏</a></li>
      <li><a href=";">帮助</a></li>
      <li><a href="" target="main-frame">管理员留言</a></li>
      <li><a href="" target="main-frame">个人设置</a></li>
     
     </ul>
      
    <div id="send_info" style="padding: 5px 10px 0 0; clear:right;text-align: right; color: #FF9900;width:40%;float: right;">
      <a href="index.php?act=clear_cache" target="main-frame" class="fix-submenu">清除缓存</a>
      <a href="logout.html" target="_top" class="fix-submenu">退出</a>
    </div>
      
  </div>
</div>

<div id="menu-div">
  <ul style=" position:relative; left:100px;">
    <li class="fix-spacel">&nbsp;</li>
    <li><a href="index.php?act=main" target="main-frame">起始页</a></li>
    <li><a href="withdrawal_list.php" target="main-frame">取款列表</a></li>
    <li><a href="deposit_list.php" target="main-frame">存款列表</a></li>
    <li><a href="user_list.php" target="main-frame">用户列表</a></li>
    <li><a href="admin_list.php" target="main-frame">后台用户列表</a></li>   
        <li class="fix-spacer">&nbsp;</li>
  </ul>
  <br class="clear" />
</div>
</body>

</html>