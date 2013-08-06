<?php
function smarty_insert_getnewsDetails(){
	
	$link = mysql_connect('localhost','root','');
     mysql_select_db('news');
     mysql_query("set names utf8");
     $array_new = array();

     $res = mysql_query("select * from new order by newdate");
       while($row = mysql_fetch_assoc($res)){
	       $array_new[]=$row;
           }
		   var_dump($array_new);
		   return $array_new;
		   
	}