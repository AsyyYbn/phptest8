<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>登录-ybn</title>
    
    <link rel="stylesheet" href="css/denglu.css">
</head>
<body bgcolor="#E1FBFD";>
   
        <div class="mainbox">
        	<div class="remain clearfloat">
        		 <div class="margin_left">
        		   <div class="regbox">
        		     <div class="reg_tit"> 登录 </div>
        		     <div class="regprt">
        		     <form name="form1" method="post" action="add.php">
        		       <input type="text" id="userid" name="userid" placeholder="用户名" >
        		       </div>
        		       <div class="regprt">
        		         <input type="password" id="password" name="password" placeholder="请输入密码" >
      		         </div>
        		       <div class="reglog clearfloat">
        		         <div class="rem">
        		           <input type="checkbox" id="rem">
        		           <span class="rems checks"></span> <span>记住我</span> </div>
        		         <div class="forg"> <a href="">忘记密码？</a> </div>
      		         </div>
        		       <div class="reg_btn clearfloat">
        		       <div class="enroll">
        		       <input type="submit" name="dl" onclick="return checkit();" value="登陆" />
      		       </form>
      		     </div>
        		   <div class="entry">
   		 			 <span>还没有账号？</span><a href="zc.php">去注册</a>
                             
   		 			 </div>
	 		  </div>
        		 		<div class="mess">
        		 			账号格式不正确
        		 		</div>
	 	  </div>
        		 </div>
        		<div class="main_right">
        			<div class="member">
        				<h1>ybn</h1>
        				<p>Yang Bing Nan</p>
        			</div>
        		</div>
        	</div>
        </div>
</body>
</html>
<script language="javascript">
function checkit(){						//自定义函数
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
