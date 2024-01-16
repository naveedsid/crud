<?php
define("DSN","mysql:host=localhost; dbname=test");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
try{
$conn = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected to DB..!<hr>";
}catch(PDOException $e){
	echo "Connection Failed..!". $e->getMessage();
						}
	$sql = "SELECT * FROM `tbl_student` WHERE S_ID = ?";
	//Prepare statement
	$result = $conn->prepare($sql);
	
	//If WHERE Clause use in Query
	$q_id = 5;
	$result->bindParam(1,$q_id);
	
	
	//Execute Prepare Statement
	$result->execute();

	//Finding number of rows
	$result->rowCount();
	
		//Binding column with variable
		//$result->bindColumn('S_ID',$id);
		//$result->bindColumn('S_NAME',$name);
		//$result->bindColumn('S_FNAME',$fname);
		//$result->bindColumn('S_ROLL_NO',$roll_num);
		//while($row = $result->fetch(PDO::FETCH_BOUND)){
		//echo $id $name $fname $roll_num;
		//}
	
		//OR
	
		//Fetch Data
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
		echo "<pre>",print_r($row),"</pre>";
		}
	

	//Close Prepare Statement
	unset($result);
	//Close Connection
	$conn = NULL;
?>