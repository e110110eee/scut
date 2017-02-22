<?php
	require_once('../connect.php');
	// $sql = "insert into grades(studyYear,studyTerm,studySubject,studyGrades)values('2016','1','高数','150')";

	// echo $sql;
	// if(mysql_query($sql)){
	// 	echo "插入成功啦，好松请近一点";
	// }else{
	// 	echo "插入失败啦";

	// }
	$query = mysql_query("select * from grades");

	$arr = [];
	class Stu{
		public $studyYear;  
		public $studyTerm;  
		public $studySubject;
		public $studyGrades;
	}
	
	while($data=mysql_fetch_object($query)){
		
		$s = new Stu;
		$s->studyYear=$data->studyYear;  
		$s->studyTerm=$data->studyTerm;
		$s->studySubject=$data->studySubject;
		$s->studyGrades  =$data->studyGrades;
		$arr[]=$s;  

	}


	echo json_encode(array("state"=>"success",'student'=>$arr),JSON_UNESCAPED_UNICODE);  //不转中文
?>