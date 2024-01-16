<?php
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","test");
$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
//if(!$conn){
	//die("Connection Die..!");
//}else{
	//SQL Query
	$sql = "INSERT INTO tbl_student (S_NAME,S_FNAME,S_ROLL_NO) VALUES (?,?,?)";
	//Prepare Statement
	$result = mysqli_prepare($conn,$sql);
	if($result){
		mysqli_stmt_bind_param($result,'ssi',$name,$fname,$roll_num);	
		$name = "Moni";
		$fname = "Arshad";
		$roll_num = 45;
		mysqli_stmt_execute($result);
		echo mysqli_stmt_affected_rows($result)." Rows affected..!";
	}
	//Close Prepare Statement
	mysqli_stmt_close($result);
	//Close Connection
	mysqli_close($conn);
//}
?>