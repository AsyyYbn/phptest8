<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ybn</title>
<link rel="stylesheet" type="text/css" href="../css/index.css" />
</head>

<body>
<?php
include("conn.php");
if(@$_POST['write']){
		$title=trim($_POST['title']);
		$userid=trim($_POST['userid']);
		$class=$_POST['class'];
		$msg=trim($_POST['msg']);
		$author=$_SESSION['manager'];
		date_default_timezone_set('Asia/Chongqing');
		$wt=date("Y-m-d H:i:s",time());
		
		$sql="insert into fatie(userid,title,msg,time)values('$userid','$title','$msg','$wt')";
		$result=mysqli_query($link,$sql);
		if(mysqli_affected_rows($link)){
			echo "<script>alert('添加成功');location.href='index.php';</script>";
		} else 
			echo "<script>alert('添加失败');location.href='write.php';</script>";
	}
	
	if(@$_POST['liuyan']){
		$userid=trim($_POST['userid']);
		$toid=$_POST['toid'];
		$msg=trim($_POST['msg']);
		date_default_timezone_set('Asia/Chongqing');
		$wt=date("Y-m-d H:i:s",time());
		
		$sql="insert into liuyan(userid,toid,msg,time)values('$userid','$toid','$msg','$wt')";
		$result=mysqli_query($link,$sql);
		if(mysqli_affected_rows($link)){
			echo "<script>alert('添加成功');location.href='cl.php';</script>";
		} else 
			echo "<script>alert('添加失败');location.href='cl.php';</script>";
	}
/*if(@$_POST['contentxiugai']){
		$id=$_GET['id'];
		$title=trim($_POST['title']);
		$class=$_POST['class'];
		$content=trim($_POST['content']);
		$author=$_SESSION['manager'];
		$wt=date("Y-m-d H:i:s",time());
		
		
		$sql="update news set title='$title',content='$content',author='$author',writetime='$wt',class='$class' where id=$id";
		$result=mysqli_query($link,$sql);
		if(mysqli_affected_rows($link)){
			echo "<script>alert('修改成功');location.href='admin.php';</script>";
		} else 
			echo "<script>alert('修改失败');location.href='admin.php';</script>";
	}
	
if(@$_POST['delete']){
	
	$id=$_GET['id'];
	$sql="delete from news where id=$id";
	$result=mysqli_query($link,$sql);
		if(mysqli_affected_rows($link)){
			echo "<script>alert('删除成功');location.href='admin.php';</script>";
		} else 
			echo "<script>alert('删除失败');location.href='admin.php';</script>";
	}
	
*/
	
		?>
      
		<?php
		if(@$_POST['zc']){
	$userid=trim($_POST['userid']);
	$password=trim($_POST['password']);
	$email=trim($_POST['email']);
	$sql="SELECT * FROM userid WHERE userid='".$userid."'"; 
     $result=mysqli_query($link,$sql) or die("浏览失败！1");   //向数据库发送查询请求
     if($row=mysqli_fetch_array($result) ){
		echo "<script>alert('该id已经被人使用,请重新填写！')</script>;";
        echo "<meta http-equiv='Refresh' content='0;url=zc.php'>";
     }
	 else{
		$sql="insert into userid(userid,email,password)values('$userid','$email','$password')";
		$result=mysqli_query($link,$sql);
	 	echo "<script>alert('注册成功，赶快去登陆吧！')</script>;";
		echo "<meta http-equiv='Refresh' content='0;url=denglu.php'>";
	 }}
?>
<?php
		if(@$_POST['dl']){
	$userid=($_POST['userid']);
	$password=($_POST['password']);
	$sql="SELECT * FROM userid WHERE userid='".$userid."' and password='".$password."'"; 
     $result=mysqli_query($link,$sql) or die("浏览失败！1");   //向数据库发送查询请求
     if($row=mysqli_fetch_array($result) ){
		echo "<script>alert('登录成功了哦！')</script>;";
        echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
     }
	 else{
	 	echo "<script>alert('用户或密码错误！')</script>;";
		echo "<meta http-equiv='Refresh' content='0;url=denglu.php'>";
	 }}
?>
