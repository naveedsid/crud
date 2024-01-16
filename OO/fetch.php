<?php 
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","test");
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);
if($conn->connect_errno){
	die("DB NOT Connect...!");
}
$sql = "SELECT * FROM `tbl_student`";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result -> fetch_all()){
		echo "<pre>",print_r($row),"</pre>";
	}
}
//Closing Connection
$conn->close();
?>