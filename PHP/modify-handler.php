<?php
	require_once('../connect.php');
	if(!(isset($_POST['stuName'])&&(!empty($_POST['stuName'])))){

		echo "<script>alert('姓名不能为空！然后检查其他项');window.location.href='modifyPage.php';</script>";

	}
	$id = $_POST['id'];
	$stuName = $_POST['stuName'];
	$stuNum = $_POST['stuNum'];
	$stuTel = $_POST['stuTel'];
	$stuCollege = $_POST['stuCollege'];
	$content = $_POST['content'];
	$dateline =  time();
 	$updatesql = "update scut set stuName='$stuName',stuNum='$stuNum',stuTel='$stuTel',stuCollege='$stuCollege',content='$content',dateline=$dateline where id=$id";
 	echo $updatesql;
 	if(mysql_query($updatesql)){
 		echo "<script>alert('修改文章成功');window.location.href='managePage.php';</script>";
 	}else{
 		echo "<script>alert('修改文章失败，请重试！');window.location.href='managePage.php';</script>";

 	}



?>