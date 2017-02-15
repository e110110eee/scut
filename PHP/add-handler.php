<?php
	require_once('../connect.php');
	if(!(isset($_POST['stuName'])&&(!empty($_POST['stuName'])))){

		echo "<script>alert('姓名不能为空！然后检查其他项');
		window.location.href='../addPage.html';</script>";

	}
	else{
			$stuName = $_POST['stuName'];
			$stuNum = $_POST['stuNum'];
			$stuTel = $_POST['stuTel'];
			$stuCollege = $_POST['stuCollege'];
			$content = $_POST['content'];
			$dateline =  time();

		   $insertsql = "insert into scut(stuName, stuNum, stuTel, stuCollege,content, dateline) values('$stuName', '$stuNum', '$stuTel', '$stuCollege','$content', $dateline)";

			if(mysql_query($insertsql)){
				echo"<script>alert('添加成功！');window.location.href='managePage.php';</script>";
			}else{
				echo"<script>alert('添加失败了！');window.location.href='../addPage.html';</script>";

			}
	}




?>