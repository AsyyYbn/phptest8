<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php
	  function fenye($num,$page_size=1){
				 global $page,$select_from,$select_limit,$pagenav;
	             $page_count=ceil($num/$page_size);  // 向上取整  页面数
	             $select_limit=$page_size;
				 if($page<=1||$page=="") $page=1;  //初始化
				 if($page>=$page_count) $page=$page_count;
				 $select_from=($page-1)*$page_size;  // array
				 $pagenav="<span style='margin-left:200px;margin-top:8px;margin-right:8px;color:#f00;'>第".$page."/".$page_count."页</span>";
				 $pagenav.="&nbsp;&nbsp;<a href='?page=1' style='text-decoration:none;color:#f00;'>首页</a>";
				 //$pre_page=$page-1;       // 三元运算符
				 if($page==1) $pre_page=1;
				 else $pre_page=$page-1;
				 //$page==1?$pre_page=1:$pre_page=$page-1;
                 $pagenav.="<a href='?page=$pre_page' style='text-decoration:none;margin-left:8px;color:#f00;'>&nbsp;上一页&nbsp;</a>";
				 if($page==$page_count) $nex_page=$page_count;
				 else $nex_page=$page+1;
				 $pagenav.="<a href='?page=$nex_page' style='text-decoration:none;margin-left:8px;color:#f00;'>&nbsp;下一页&nbsp;</a>";
				 if($page==$page_count)
				   $pagenav.="&nbsp;最后页&nbsp;&nbsp;";
				 else
				   $pagenav.="<a href='?page=$page_count' style='text-decoration:none;margin-left:8px;color:#f00;'>&nbsp;最后页</a>";
                   $pagenav.="<select onchange='window.location=\"?page=\"+this.value' style='margin-left:17px;width:80px;height:20px;border:1px solid #666;border-radius:6px;background-color:#666;'>";
				 for($i=1;$i<=$page_count;$i++){
					 if($i==$page)  $pagenav.= "<option value='$i' selected=selected>".$i."</option>";
					 else $pagenav.= "<option value='$i'>".$i."</option>";
				 }
				 $pagenav.="</select>";
			 }
	?>
