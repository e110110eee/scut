<?php
	require_once('../connect.php');
	//读取旧信息
	$id = $_GET['id'];
	$query = mysql_query("select * from scut where id=$id");
	$data = mysql_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加信息</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<div class="user-header">
		<span class="logo_school"></span>
		<span class="logo_jw"></span>
		<span class="logo_bgright"></span>
	</div>
	<div class="user-nav">
		<ul>
			<li><a href="../userPage.html">回到首页</a></li>
			<li><a href="managePage.php">信息列表</a></li>
			<li><a href="../addPage.html">添加信息</a></li>
			<li><a href="managePage.php">修改信息</a></li>
			<li><a href="managePage.php">删除信息</a></li>
			<li style="float: right;"><a href="../index.html">返回</a></li>
			
		</ul>
	</div>
	<div class="crumbs">
		<em></em><span><a href="#">当前位置:修改信息</a></span>
	</div>
	<div class="add-content">
		<form action="modify-handler.php" method="post" id="infoForm">
			<ul>
				<li>
					<label for="stuName">姓名：</label>
					<input type="text" id="stuName" name="stuName" value="<?php echo $data["stuName"]?>">
				</li>
				<li>
					<label for="stuNum">学号：</label>
					<input type="text" id="stuNum" name="stuNum" value="<?php echo $data["stuNum"]?>">
				</li>
				<li>
					<label for="stuTel">电话：</label>
					<input type="text" id="stuTel" name="stuTel" value="<?php echo $data["stuTel"]?>">
				</li>

				<li>
					<label for="stuCollege">学院：</label>
					<input type="text" id="stuCollege" name="stuCollege" value="<?php echo $data["stuCollege"]?>">
				</li>

				<li style="display: block;width: 400px; height: 200px;">
					<label for="content" style="display: block;margin-bottom: 5px;" cols="60" rows="15">个人介绍：</label>
					<textarea name="content" id="content" ><?php echo $data["content"]?></textarea>
				</li>
				<li><input type="submit" value="提交"></li>
				<li><input type="reset" value="重置"></li>
			
			</ul>	
			<input type="hidden" name="id" value="<?php echo $data["id"]?>" />

		</form>
	</div>

</body>
</html>