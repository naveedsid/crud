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
	$sql = "SELECT * FROM tbl_student WHERE S_ID = ?";
	//Prepare Statement
	$result = $conn->prepare($sql);
	$result->bind_param('i',$q_id);
	$q_id = 5;
	//Binding results with variables
	$result->bind_result($id,$name,$fname,$roll_no);
	//Execute Prepared Statement
	$result->execute();
	
	//Finding Number of Rows
	//$result->store_result();
	//echo $result->num_rows;
	//$result->free_result();
	
	//Fetch Single Row
	while($result->fetch()){
		echo $id." ".$name." ".$fname." ".$roll_no."<br>";
		//echo $id.;
	}
	//Close Prepare Statement
	$result->close();
	//Close Connection
	$conn->close();
//}
?>