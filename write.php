<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ybn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="topPan"><a href=""><img src="images/logo.gif" title="Green Solutions" alt="Green Solutions" width="204" height="57" border="0"/></a>
  <ul>
    <li><a href="index.php">首页</a></li>
    <li><span>发帖</span></li>
    <li><a href="sctupian.php">上传图片</a></li>
    <li><a href="cl.php" target="_blank">留言</a></li>
    <li><a href="zc.php">注册</a></li>
  </ul>
</div>
<div id="writePan">
<?php
          //if(isset( $_SESSION['username123'])) {  //if的括号先不结束，因为先检测是否已登录，如果登录则显示下面的表单，否则先登录，session_start();要放在第一行，即最开始的地方
		  ?>
          <div class="write_box">
            <p style="font-size:26px;padding-left:40%;margin:10px;">发帖</p>
            <div class="writing_box">
              <form name="frm" action="add.php" method="post">
                <table class="wirte_table">
                  <tr><td style="text-align:right;color:#000;">Userid&nbsp;&nbsp;</td><td><input type="text" name="userid" size="95" style="border-radius:6px;border:1px solid #666;height:29px;" placeholder="&nbsp;&nbsp;请输入作者" /></td></tr>
                  <tr><td style="text-align:right;margin-left:20px;color:#000;">Themes&nbsp;&nbsp;</td><td><input type="text" name="title" size="95" maxlength="26" style="border-radius:6px;border:1px solid #666;height:29px;" placeholder="&nbsp;&nbsp;请输入作品" /></td></tr>
                  
                  <!--<tr><td style="text-align:right;">Content&nbsp;&nbsp;</td><td><textarea name="msg" cols="85" rows="6" style="border-radius:6px;border:1px solid #666;" placeholder=" 请输入内容"></textarea></td></tr>-->
                  <tr><td style="text-align:right;color:#000;">Content&nbsp;&nbsp;</td><td><textarea id="editor_id" name="msg" style="width:690px;height:500px;border-radius:8px;">
&lt;strong&gt;作品介绍限定字数3行半以内&lt;/strong&gt;
</textarea></td></tr>
                </table>
                <input type="submit" name="write" value="发表" onmousedown="writecheck()" style="margin-top:40px;margin-right:50px;margin-left:242px; margin-bottom:50px;width:100px;height:30px;border-radius:6px;border:1px solid #666;" />&nbsp;&nbsp;<a href="index.php"><input type="button" name="cancel" value="取消" style="margin-left:40px;width:100px;height:30px;border-radius:6px;border:1px solid #666;"/></a>
              </form>
              <script language="javascript" type="text/javascript">
			    function writecheck(){
					var name=window.frm.userid.value;
					var themes=window.frm.title.value;
					
					var content=window.frm.msg.value;
					if(name==""){
						window.alert("请输入用户名");
						window.frm.username.focus();
					}
					else if(themes==""){
						window.alert("请输入主题");
						window.frm.themes.focus();
					}
					
					else if(content==""){
						window.alert("请输入内容");
						window.frm.msg.focus();
					}
				}
			  </script>
              <script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
              <script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
              <script>
			      KindEditor.ready(function(K){
					  window.editor = K.create('#editor_id');
					  //K.create('textarea[name=content]', { cssData : 'body { border-radius:8px; }' });
				  })
			  </script>
            </div>
            <?php
            /* }  //上面if语句的结束大括号
			 else{
				echo "<script>alert('您还没有登录哦，请先去登录吧！');window.location='login_chi.php';</script>" ; 
				 }*/
			?>
            </div>
            
          </div>

<div class="bottomPan">
<?php 
include('footer.php');
?>
</div>
</body>
</html>