<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deletesql = "delete from scut where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除文章成功');window.location.href='managePage.php';</script>";
	}else{
		echo "<script>alert('删除文章失败');window.location.href='managePage.php';</script>";
	}

?>