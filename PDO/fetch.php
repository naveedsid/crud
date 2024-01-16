<?php 
define("DSN","mysql:host=localhost; dbname=test;");
define("USERNAME","root");
define("PASSWORD","");
$conn = new PDO(DSN, USERNAME, PASSWORD);
$sql = "SELECT * FROM `tbl_student`";
$result = $conn->query($sql);

//Counting Rows
//if($result->rowCount() > 0){
	//while($row = $result->fetch(PDO::FETCH_ASSOC)){
		//echo "<pre>",print_r($row),"</pre>";
	//}
//}else{echo "0 Results";}
//OR
foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row){
	echo "<pre>",print_r($row),"</pre>";
}
//Closing Connection
$conn = NULL;