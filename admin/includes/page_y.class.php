<?php
//封装这个类，在调用这个类的方法，让他给我们返回一个字符串，也就是html代码
/**
 *@param string $total_rows 所有的记录数
 *@param string $total_page 所有的页数
 *@param  int  $page    当前的页码数
 *@param int   $pagesize  每页需要显示几条记录
 *@param string  $url			分页后要跳转的地址 
 *@param $return    html 代码，包含了分页的哪些字符串
 */
class page{
		public static function show($total_rows,$page,$pagesize,$url){

			//echo "zhangjineli";
				//之前我们使用new class()，今天我们换一种方法，通过类调用它的方法
				//先声明一个空字符串，然后再通过一步一步的连接，最终返回div中的字符串
				$return = '';
				//求出总的页数
				$total_page = ceil($total_rows/$pagesize);
				$request_url = $url.'?page=';
				$return .= "总共  $total_rows 个记录 分为 $total_page 页 当前第 $page 页 每页显示 $pagesize";
			
				//格式化字符串
				$first = sprintf('<a href="%s">%s</a>',$request_url.'1','第一页');

				//一次求出上一页，下一页，尾页的字符串
				if($page>1){
	           $prev=sprintf('<a href="%s">%s</a>',$request_url.($page-1),'上一页');
				}else{
					$prev = '';
				}

			if($total_page == $page){
					$next = '';
			}else{
                  //href="brand.php?page=2"
			$next = sprintf('<a href="%s">%s</a>',$request_url.($page+1),'下一页');
			}
			$last = sprintf('<a href="%s">%s</a>',$request_url.$total_page,'尾页');
		//声明一个保存下拉列表的字符串，给这个下拉列表一个监听他发生变化的事件
			$select_page = '<select onchange="goPage(this)">';
	
			//循环的输出select列表中的option选项
			for($i=1;$i<=$total_page;$i++){
				if($i == $page){
			$select_page .= sprintf('<option value="%s" selected>%s</option>',$i,$i);
				}else{
				$select_page .= sprintf('<option value="%s">%s</option>',$i,$i);
				}
			}
			$select_page.='</select>';
//一定要注意，定界符的结束时一定要顶格写，分号结束
			$select_script=<<<SCR
<script type="text/javascript">
					function goPage(obj){
					window.location.href="$request_url"+obj.value;
			}
</script>
SCR;

			$return .= $first.$prev.$next.$last.$select_page.$select_script;
			return $return;

		}
}
