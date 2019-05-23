<?php
	include ('conn.php');
?>
<!DOCTYPE html>
<html lang="zh_cn">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--<script src="style/js/jquery.min.js"></script>-->
		<link rel="stylesheet" href="css/gb.css" crossorigin="anonymous"/>
		<link rel="stylesheet" href="css/wall_style.css" />
		
		

<!--文本编辑器_链接代码 -->
<!--<link rel="stylesheet" href="kind/themes/default/default.css" />
	<link rel="stylesheet" href="kind/plugins/code/prettify.css" />
	<script charset="utf-8" src="kind/kindeditor.js"></script>
	<script charset="utf-8" src="kind/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kind/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kind/plugins/code/prettify.css',
				uploadJson : 'kind/php/upload_json.php',
				fileManagerJson : 'kind/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>-->
<!--文本编辑器_链接代码 -->

		<!--<script type="text/javascript">
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
		</script>-->
	</head>
	<body>
	<div class="bodydiv" style="margin-top: 10px;">
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading" align="center">
					<h3 class="panel-title"><font color="#FF0000">容天下之难容事，笑世间可笑之人！</font></h3>
				</div>
				<div class="panel-body">
					<form name="frm" method="post" action="add.php" onsubmit="return validate_form(this)" >
						
						<input name="from" value="call" style="display: none;">
						<input name="userid" class="form-control" placeholder="语源..." required autofocus></br>
						<input name="toid" class="form-control" placeholder="对象..." required autofocus></br>
                        <textarea name="msg" id="editor_id" class="form-control" placeholder="告白内容（不超过999字）" rows="3" onkeyup='value=value.substr(0,999);this.nextSibling.innerHTML=value.length+"/140";'>大声说！</textarea>
                        
						<!--<div align="center"><textarea name="content" class="form-control" placeholder="留言内容（不超过999字）" rows="3" onkeyup='value=value.substr(0,999);this.nextSibling.innerHTML=value.length+"/140";'></textarea></div></br> -->
                        
						<input class="btn btn-primary btn-lg btn-block" TYPE="submit" name="liuyan" value="发表留言" onmousedown="writecheck()" />
					</form>
				</div>
			</div>
		</div>
	</div>
    
            	        
        </div>
       <!-- <script language="javascript" type="text/javascript">
			    function writecheck(){
					var name=window.frm.userid.value;
					var themes=window.frm.title.value;
					
					var msg=window.frm.msg.value;
					if(name==""){
						window.alert("请输入用户名");
						window.frm.username.focus();
					}
					else if(themes==""){
						window.alert("请输入主题");
						window.frm.themes.focus();
					}
					
					else if(msg==""){
						window.alert("请输入内容");
						window.frm.msg.focus();
					}
				}
			  </script>-->
              <script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
              <script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
              <script>
			      KindEditor.ready(function(K){
					  window.editor = K.create('#editor_id');
					  //K.create('textarea[name=content]', { cssData : 'body { border-radius:8px; }' });
				  })
			  </script>
        <div class="bodydiv">
		<?php
			/*$perNumber=10; //每页显示记录数
			$page=$_GET['page']; //获得当前页面值
			$count1=mysql_query("select count(*) from list"); //获得记录总数
			$rs=mysql_fetch_array($count1);
			$totalNumber=$rs[0];*/
		?>
		<!--<div class="container-fluid">
		  <div class="alert alert-success" role="alert"></div>
	    <div class="alert alert-info" role="alert">
		    <div class="clearfix"></div>
	    </div>-->
		<?php
			/*$totalPage=ceil($totalNumber/$perNumber);
			if (!isset($page)) {
			 $page=1;
			}
			$startCount=($page-1)*$perNumber;
			$result=mysql_query("select * from list order by id desc limit $startCount,$perNumber"); //根据前面计算出开始记录和记录数*/
			/*$query="select * from liuyan";
			 $result=mysqli_query($link,$query);
			 $num=mysqli_num_rows($result); */
			 //$page_size=1;  // 每页数据数
             /*fenye($num,3);*/
             $sql1="select * from liuyan order by id DESC";
             $result1=mysqli_query($link,$sql1) or die("查询数据失败");
			while ($rows=mysqli_fetch_array($result1)) {
		?>
	    <div class="panel panel-info">
	    	<div class="panel-heading"><strong>TO：<?=$rows['toid'] ?></strong>
	        <div class="shijian"><?=$rows['time']?></div>
	    </div>
	    <div class="panel-body">
	      	<p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$rows['msg']?></p>
	        <div class="shijian2">FROM：<?=$rows['userid'] ?></div>
	    </div>
	    </div>
	    <?php
			}
		?>    
		</div>
	</body>
</html>