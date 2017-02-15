<?php
	require_once('../connect.php');
	$key = $_GET['key'];
	$search = $_GET['searchName'];
	 $sql = "select * from scut where $search like '%$key%' order by dateline desc";
	$query = mysql_query($sql);

	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
		echo "<script>alert('找到学生！')</script>";
	}else{
		
		echo "<script>alert('结果：空');window.location.href='search.php'</script>";
	}

	

?>

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
			<li><a href="search.php">查找</a></li>
			<li style="float: right;"><a href="../index.html">返回</a></li>

		</ul>
	</div>
	<div class="crumbs">
		<em></em><span><a href="#">当前位置:查找结果</a></span>
	</div>
	<div class="info-content">
		<table>
			<thead>
				<th>姓名</th>
				<th>学号</th>
				<th>学院</th>
				<th colspan="2">操作</th>

			</thead>
			<tbody>
			<?php
			if(!empty($data)){
				foreach($data as $value){
			?>
				<tr>
					<td><a href="showPage.php?id=<?php echo $value['id']?>"><?php echo $value['stuName']?></a></td>
					<td><?php echo $value['stuNum']?></td>
					<td><?php echo $value['stuCollege']?></td>
					<td><a href="dele-handler.php?id=<?php echo $value['id']?>">删除</a></td>
					<td><a href="modifyPage.php?id=<?php echo $value['id']?>">修改</a></td>
				</tr>

			<?php
				}
			}
			?>
			</tbody>
		</table>
	</div>
	<script>
		//获取数据
		window.onload = function(){
			//发送请求并处理
			
		}
	</script>
</body>
