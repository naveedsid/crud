<?php
define("HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","test");
$conn = mysqli_connect(HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
//if(!$conn){
	//die("Connection Die..!");
//}else{
	//SQL Query
	$sql = "SELECT * FROM tbl_student WHERE S_ID = ?";
	//Prepare Statement
	$result = mysqli_prepare($conn,$sql);
	//Binding anon parameter to query
	mysqli_stmt_bind_param($result,'i',$q_id);
	$q_id = 3;
	//Binding results with variables
	mysqli_stmt_bind_result($result,$id,$name,$fname,$roll_no);
	//Execute Prepared Statement
	mysqli_stmt_execute($result);

	//Storing Results for num_rows()
		//mysqli_stmt_store_result($result);
	//Total number of rows
		//$total_num_rows = mysqli_stmt_num_rows($result);
		//echo $total_num_rows;
	//Free storing result
		//mysqli_stmt_free_result($result);

	//if($total_num_rows > 0){
		//Fetch Single Row in each array
		while(mysqli_stmt_fetch($result)){
			echo $id." ".$name." ".$fname." ".$roll_no;
		}
	//}else{echo "0 Results";}
	
	//Close Prepare Statement
	mysqli_stmt_close($result);
	//Close Connection
	mysqli_close($conn);
//}
?>