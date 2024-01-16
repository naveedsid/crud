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
	$sql = "INSERT INTO tbl_student (S_NAME,S_FNAME,S_ROLL_NO) VALUES (?,?,?)";
	//Prepare Statement
	$result = $conn->prepare($sql)
	$result->bind_param('ssi',$name,$fname,$roll_num);
	$name = "Khuksha";
	$fname = "ArshadKhaddi";
	$roll_num = 357;
	//Execute Prepared Statement
	$result->execute();
	//Number of rows affected
	echo $result->affected_rows." Rows(s) Inserted...!";
	//Close Prepare Statement
	$result->close();
	//Close Connection
	$conn->close();
//}
?>