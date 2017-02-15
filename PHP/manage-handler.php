<?php
	require_once('../connect.php');
	$sql = "select * from scut order by dateline desc";
	$query  = mysql_query($sql);
	$arr = array();
	class Stu{  
	    public $name;  
	    public $number;  
	    public $college;
	    public $id;
	}  


	while($row=mysql_fetch_object($query)){  
	    $s=new Stu();  
	    $s->name=$row->stuName;  
	    $s->number=$row->stuNum;
	    $s->college=$row->stuCollege;
	    $s->id  =$row->id;

	    //填充数组  
	    $arr[]=$s;  
	}  
	echo json_encode(array("state"=>"success",'student'=>$arr),JSON_UNESCAPED_UNICODE);  //不转中文
	
?>