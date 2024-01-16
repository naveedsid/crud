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
	$sql = "INSERT INTO tbl_student (S_NAME,S_FNAME,S_ROLL_NO) VALUES (?,?,?)";
	//Prepare statement
	$result = $conn->prepare($sql);
	
	//Binding var in query
	//$result->bindParam(1,$name,PDO::PARAM_STR);
	//$result->bindParam(2,$fname,PDO::PARAM_STR);
	//$result->bindParam(3,$roll_num,PDO::PARAM_INT);
	//Variables initialization
	$name = 'Waleed';
	$fname = 'Israr';
	$roll_num = 923;
	
	//Execute Prepare Statement
	$result->execute(array($name,$fname,$roll_num));

	//Finding affected rows
	echo $result->rowCount()." Row(s) Inserted...!!";

	//Close Prepare Statement
	unset($result);
	//Close Connection
	$conn = NULL;
?>