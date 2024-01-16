<?php 
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","test");
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);
if($conn->connect_error){
	die("DB NOT Connect...!");
}
$sql = "INSERT INTO `tbl_student` (`S_ID`, `S_NAME`, `S_FNAME`, `S_ROLL_NO`) VALUES (NULL, 'Asad', 'Javeed', '344')";
if($conn->query($sql) === TRUE){
	echo $conn->affected_rows." Record inserted successfully.";

}
$conn->close();
?>