

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>华南理工大学教务管理系统</title>
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
		<em></em><span><a href="#">当前位置:查找学生</a></span>
	</div>
	<div class="info-content">
		<form action="search-handler.php" method="get" id="searchForm">
			<div class="tool">
				<select name="searchName" id="searchName">
					<option value="stuName">姓名</option>
					<option value="stuNum">学号</option>
					<option value="stuCollege">学院</option>
				</select>
				<input type="text" id="search-content" name="key">
				<input type="submit" id="search" value="搜索">
			</div>

		</form>
	</div>
	<script>
		//获取数据
		window.onload = function(){
			//发送请求并处理
			
		}
	</script>
</body>
