<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ybn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#E1FBFD">
<?php include("conn.php");?>
<div id="topPan"><a href=""><img src="images/logo.gif" title="Green Solutions" alt="Green Solutions" width="204" height="57" border="0"/></a>
  <ul>
    <li><span>首页</span></li>
    <li><a href="write.php">发帖</a></li>
    <li><a href="sctupian.php">上传图片</a></li>
    <li><a href="">留言</a></li>
    <li><a href="zc.php">注册</a></li>
  </ul>
</div>
<div id="headerPan">
<?php require_once("lbt.php"); ?>
</div>
<div id="bodyPan">
  <div id="leftPan">
    <p>
	<form class="login" name="form1" method="post" action="add.php">
    <h1>一百年</h1>
    <input type="uesrid" name="userid" class="login-input" placeholder="账户" autofocus>
    <input type="password" name="password" class="login-input" placeholder="密码">
    <input type="submit" name="dl" value="登录" class="login-submit" onmousedown="check()">
    <p class="login-help"><a href="#">忘记密码</a></p>
  </form>
    </p>
    <p><?php require_once("yxbd.php");?></p>
  </div>
  <div id="rightPan">
    <div id="rightbodyPan">
      
    <?php
		     include("fenye.php");
			 include("conn.php");
			 $page=@$_GET['page'];
			 $query="select * from fatie";
			 $result=mysqli_query($link,$query);
			 $num=mysqli_num_rows($result); 
			 //$page_size=1;  // 每页数据数
             fenye($num,3);
             $sql1="select * from fatie order by time desc limit $select_from,$select_limit";
             $result1=mysqli_query($link,$sql1) or die("查询数据失败");
			 while($row=mysqli_fetch_array($result1)){
				 //echo $row['id']."-".$row['username']."-".$row['content']."-".$row['time']."<br>";
				 echo "<div class='showmsg'>";
		echo "<h3>".$row['title']."</h3>";
		echo "<p class='time'>".$row['time']."</p>";
		echo "<div>".$row['msg']."</div>";
		echo "</div>";
			 }
			 echo "<div class=a>".$pagenav."</div>";
		   ?>
	
    
    </div>
  </div>
</div>
<div class="bottomPan">
<?php 
include('footer.php');
?>
</div>
<script language="javascript">
function check(){						//自定义函数
	if(form1.userid.value==""){				//判断用户名是否为空
	        alert("请输入用户名!");
   		    form1.userid.select();
			return false;
         }		        		
       if(form1.password.value==""){			//判断密码是否为空
			alert("请输入密码!");
			form1.password.select();
			return false ;
		 }
		 /*if(form1.yzm.value==""){			//判断密码是否为空
			alert("请输入验证码!");
			form1.yzm.select();
			return false ;
		 }*/
		 	return true;
					 
}	
</script>

</body>
</html>
