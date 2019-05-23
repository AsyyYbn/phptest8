<?php error_reporting(0);?>
<?php
	//开发者昵称：小房
	//开发者ＱＱ：1547716039
	//微信公众号：dwxfz77
	
	session_start(); 
	include ('conn.php');
	include ('inc/lang.php');
	mysql_query("set names utf8");
	$sql = 'select * from system';
	$res=mysql_query($sql);
	$row = mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="zh_cn">
	<head>
		<title><?php echo $row['title'];?> 留言板-校青年志愿者协会 <?php echo $row['titlesm'];?></title>
		<meta name="keywords" content="<?php echo $row['keywords'];?>">
		<meta name="description" content="<?php echo $row['description'];?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="style/js/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous"/>
		<link rel="stylesheet" href="style/css/wall_style.css" />
        <link rel="icon" href="style/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="style/img/favicon.ico" type="image/x-icon" />
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
	</head>
	<body>
		<div class="bodydiv">
		<?php
			$perNumber=10; //每页显示记录数
			$page=$_GET['page']; //获得当前页面值
			$count1=mysql_query("select count(*) from list"); //获得记录总数
			$rs=mysql_fetch_array($count1);
			$totalNumber=$rs[0];
		?>
		<div class="container-fluid">
	    <div class="jumbotron">
		    <h1><a href="../index.php">校青年志愿者协会</a>-留言板</h1>
		    <p>把你对协会的爱❤大声说出来</p>
		    <p><a class="btn btn-primary btn-lg" role="button" href="call.php">我要留言</a></p>
	    </div>
	    <div class="alert alert-success" role="alert">
			 <?php echo $row['school'];?><a href="../index.php"><font color="#FF0000">校青年志愿者协会</font></a>留言板欢迎您<br/>
			 已经有<span class="badge"><?php echo $totalNumber ?></span>条留言被发表
	    </div>
	    <div class="alert alert-info" role="alert">
		    <div class="clearfix">
		        <form method="post" action="search.php" name="search">
			        <div class="col-lg-6">
			            <div class="input-group">
				            <input type="text" class="form-control" placeholder="请填写需要搜索的留言对象..." name="search" />
				            <span class="input-group-btn">
				                <button class="btn btn-default" type="submit" value="Search">搜索</button>
				            </span>
			            </div>
			    	</div>
		        </form>
		    </div>
	    </div>
		<?php
			$totalPage=ceil($totalNumber/$perNumber);
			if (!isset($page)) {
			 $page=1;
			}
			$startCount=($page-1)*$perNumber;
			$result=mysql_query("select * from list order by id desc limit $startCount,$perNumber"); //根据前面计算出开始记录和记录数
			while ($rows=mysql_fetch_array($result)) {
		?>
	    <div class="panel panel-info">
	    	<div class="panel-heading"><strong>TO：<?=$rows[toname] ?></strong>
	        <div class="shijian"><?=$rows[lastdate]?></div>
	    </div>
	    <div class="panel-body">
	      	<p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$rows[content]?></p>
	        <div class="shijian2">FROM：<?=$rows[fromname] ?></div>
	    </div>
	    </div>
	    <?php
			}
		?>
	    <div class="clearfix shijian2">
	    	页数：<?php echo $page ?>/<?php echo $totalPage ?></div>
		    <ul class="pagination  pagination-lg">
			    <li><a href="index.php?page=1">首页</a></li>
			    <?php
				if ($page != 1) {
				?>
			    <li><a href="wall.php?page=<?php echo $page - 1;?>">上页</a></li>
			    	<?php
						}
						$fen=5;
						$zong=ceil($page/$fen);
						$szong=($zong-1)*5;
						for ($i=$szong+1;$i<=$szong+1;$i++) {  //循环显示出页面
					?>
			    <li><a class="pagination-a" href="index.php?page=<?php echo $page;?>"><?php echo $page ;?></a></li>
			    	<?php
						}
						if ($page<$totalPage) { //page小于总页数,显示下页链接
					?>
			    <li><a href="index.php?page=<?php echo $page + 1;?>">下页</a></li>
			    	<?php
					}
					?>
			    <li><a href="wall.php?page=<?php echo $totalPage;?>">尾页</a></li>
			</ul>
		<div class="h3"></div>
		<div class="panel panel-default">
		<div class="panel-body" align="center">
        	SlightDream &copy;&nbsp;<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $row['qq'];?>" target="_blank">联系我们</a><br/>
            版权所有 &copy;&nbsp;<a href="../index.php<?php echo $row['weburl'];?>"><?php echo $row['footer'];?></a><br/>
            青春小足迹 &copy;&nbsp;<a href="../html5/dwxfz77.html" target="_blank">微信公众号：dwxfz77</a><br/>
            <br/>
            <h4 style="color:#666"><a href="../login.php">后台管理</a></h4>
            	        
        </div>
		</div>
		<iframe src="" width="0px" height="0px" style="display:none;" name="url"></iframe>
		</div>
		</div>
	</body>
</html>