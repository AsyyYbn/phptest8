<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$link=mysqli_connect("localhost","root","") or die("连接数据库失败");
mysqli_query($link,"set names utf8");
mysqli_select_db($link,"qimo");
?>