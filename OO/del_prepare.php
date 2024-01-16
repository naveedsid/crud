<?php
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","test");
$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
//if($conn->connect_error){
	//die("Connection Die..!");
//}else{
	//SQL Query
	$sql = "DELETE FROM `tbl_student` WHERE 'ID'= ?";
	
	//Prepare Statement
	$result = $conn->prepare($sql)
	
	//Binding variable to sql
	$result->bind_param('i',$q_id);
	$q_id = 5;

	//Execute Prepared Statement
	$result->execute();
	
	//Number of rows affected
	echo $result->affected_rows." Rows(s) Deleted...!";
	
	//Close Prepare Statement
	$result->close();
	
	//Close Connection
	$conn->close();
//}
?>