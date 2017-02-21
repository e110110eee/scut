<?php
	require_once('../connect.php');

	// $insertsql = "insert into schedule(monday, tuseday, wensday,thursday, friday) values('高数', 'C++', 'JAVA', 'Javascript','Vue.js')";

	// if(mysql_query($insertsql)){
	// 	echo "<script>alert('课表保存成功')</script>";
	// }
	$query = mysql_query("select * from schedule");
	$arr = [];
	class Stu{
		public $monday;  
		public $tuseday;  
		public $wensday;
		public $thursday;
		public $friday;
	}
	
	while($data=mysql_fetch_object($query)){
		
		$s = new Stu;
		$s->monday=$data->monday;  
		$s->tuseday=$data->tuseday;
		$s->wensday=$data->wensday;
		$s->thursday  =$data->thursday;
		$s->friday  =$data->friday;
		$arr[]=$s;  

	}



	

	echo json_encode(array("state"=>"success",'student'=>$arr),JSON_UNESCAPED_UNICODE);  //不转中文

?>