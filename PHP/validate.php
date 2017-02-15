<?php
	require_once('../connect.php');
	session_start();
	if($_POST['verification'] == $_SESSION['verification']){
		echo "<script>alert('登陆成功');window.location.href='../userPage.html';</script>";
	}else{
	    echo "<script>alert('验证码错误');window.location.href='../index.html';</script>";
	}

?>