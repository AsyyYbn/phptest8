<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册 - 知新 - Thousands Find</title>
	<meta author="">
	<link rel="stylesheet" type="text/css" href="css/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box register-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">知乎</h1>
		<h2 class="sub-title">最新，最全的新闻资讯<br><br>Thousands Find</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="dl.php">登录</a>
				<a href="register.php" class="active">注册</a>
				<div class="slide-bar slide-bar1"></div>				
			</div>
		</div>
		<form action="email/register.php" method="post">
		<div class="login form">
			<div class="group">
				<div class="group-ipt email">
					<input type="email" name="email" id="email" class="ipt" placeholder="邮箱地址" required>
				</div>
				<div class="group-ipt user">
					<input type="text" name="user" id="user" class="ipt" placeholder="填写昵称" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="设置登录密码" required>
				</div>
				<div class="group-ipt password1">
					<input type="password" name="password1" id="password1" class="ipt" placeholder="重复密码" required>
				</div>
				<div class="group-ipt verify">
					<input type="text" name="verify" id="verify" class="ipt" placeholder="输入验证码" required>
					<img src="image_captcha.php?id=" class="imgcode">
				</div>
			</div>
		</div>

		<div class="button">
			<button type="submit" class="login-btn register-btn" id="button" name="button">注册</button>
		</div>
		</form>
	</div>
</div>

<div class="footer">
	<p>知新 - 最新，最全的新闻资讯 - Thousands Find</p>
	<p>Designed By 罗定职业技术学院电子信息系 & <a href="http://www.ldpoly.com/">16304010207&nbsp;陈荣华</a>&nbsp;&nbsp;2018-06-02</p>
</div>

<script src="js/particles.js" type="text/javascript"></script>
<script src="js/background.js" type="text/javascript"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/layer/layer.js" type="text/javascript"></script>
<script>
	$('.imgcode').hover(function(){
		layer.tips("看不清？点击更换", '.verify', {
        		time: 6000,
        		tips: [2, "#3c3c3c"]
    		})
	},function(){
		layer.closeAll('tips');
	}).click(function(){
		$(this).attr('src','image_captcha.php?id=' + Math.random());
	})

	$(".login-btn").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();
		var verify = $("#verify").val();
		// $.ajax({
		// url: 'login.php',
		// type: 'post',
		// jsonp: 'jsonpcallback',
  //       jsonpCallback: "flightHandler",
		// async: false,
		// data: {
		// 	'email':email,
		// 	'password':password,
		// 	'verify':verify
		// },
		// success: function(data){
		// 	info = data.status;
		// 	layer.msg(info);
		// }
		// })

	})
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	})
</script>
</body>
</html>