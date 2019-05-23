<?php 
session_start(); 
$msg="";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>登录-ybn</title>
    <?php include("conn.php"); ?>
    <link rel="stylesheet" href="css/denglu.css">
</head>
<body bgcolor="#f9f7e2">
   
        <div class="mainbox">
        	<div class="remain clearfloat">
        		 <div class="margin_left">
        		   <div class="regbox">
        		     <div class="reg_tit"> 注册 </div>
        		     <div class="regprt">
        		     <form name="form1" method="post" action="add.php">
        		       <input type="text" id="userid" name="userid" placeholder="用户名" required>
                       </div>
                       <div class="regprt">
                       <input type="email" name="email" id="email" class="ipt" placeholder="邮箱地址" required>
        		       </div>
        		       <div class="regprt">
        		         <input type="password" id="password" name="password" placeholder="请输入密码" required>
                         </div>
                         <div class="regprt">
                         <input type="password" name="password1" id="password1" class="ipt" placeholder="重复密码" required>
      		         </div>
        		       <!--<div class="reglog clearfloat">
        		         <div class="rem">
        		           <input type="checkbox" id="rem">
        		           <span class="rems checks"></span> <span>记住我</span> </div>
        		         <div class="forg"> <a href="">忘记密码？</a> </div>
      		         </div>-->
        		       <div class="reg_btn clearfloat">
        		       <div class="enroll">
        		       <input type="submit" name="zc" onclick="yz();" value="注册" />
      		       </form>
      		     </div>
        		   <div class="entry">
   		 			 <span>不想注册？</span><a href="index.php">返回首页</a>   
   		 			 </div>
                     <div class="entry">
   		 			 <a href="denglu.php">登录</a>&nbsp;&nbsp;&nbsp;
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
                        
                        <p><?php echo $msg; ?></p>
        			</div>
        		</div>
        	</div>
        </div>
</body>
</html>
<!--<script language="javascript">
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
</script>-->
<script type="text/javascript">
function yz() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("password1").value;
         if(password!=repassword){
             window.alert("您输入的新密码与确认密码确认不一致");
             signupForm.repassword.focus();
             return false;
             
             }
          return true;
    }
</script>


