这是自己写的一个华工教务管理系统。使用HTML+CSS+JS写前端。使用PHP+MYSQL来写后台的代码


前台实现：
	账号的登陆，验证账户 

后台实现：
	添加、删除、修改学生基本的信息。根据关键词查找需要的信息。

基本信息：姓名 学号 电话 性别 学院 专业 年级 住址 个人介绍等。  


项目目的：
对于PHP和mySQL操作进行深入理解。学会前后端的数据连接、处理和展示。

本项目自我感觉难点：
1.前端页面进行验证码操作会是一个难点。
2。前后端分离化
3，最后项目优化

实际难点：数据库和后端链接。通过AJAX返回给前端添加数据问题。

解决：
1.对于登录页面的验证码使用后端PHP绘制出来给前端显示。缺点：安全性虽然比前端设置验证码好一些但是还是存在一些隐患。
2.对于后端拿到数据库数据之后，一开始使用的是字符串拼接传给前端展示。但是这样对于页面操作有局限性。然后选择后端JSON_encode方法返回给前端一个JSON数据更好操作。
查看http://www.cnblogs.com/xcxc/p/3729207.html





预计完成时间：2h（前台）+6H(后台)+2H（性能优化）=10H
开始：14：30 
结束：13:40

项目的新知识：
HTML：
li里面包裹textarea 。textarea不能把li撑开
textarea中间不要有回车，这样就不会从中间开始写了

PHP
$_POST $_GET $_SESSION 数据请求、连接使用
mysql_query（） //PHP执行数据库语句 返回一个指针
mysql_fetch_assoc() //返回一个关联数组，通过遍历可以得到数据库里面的所有的数据。放在一个二维数组中
json_encode(array("state"=>"success",'student'=>$arr),JSON_UNESCAPED_UNICODE);  //不转中文 编译成JSON字符串
PHP可以在页面任意位置进行变量操作<?php ?>放在里面就好。 echo ""字符串可以在页面显示。



MYSQL
数据库的选择和表选择。单独放在config文件里面给需要调用的页面使用。
数据库的使用：

选择：select * from table1 where 范围
插入：insert into table1(field1,field2) values(value1,value2)
删除：delete from table1 where 范围
更新：update table1 set field1=value1 where 范围
查找：select * from table1 where field1 like ’%value1%’ 
排序：select * from table1 order by field1,field2 [desc]