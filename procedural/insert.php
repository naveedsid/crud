<?php 
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","test");
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if(!$conn){
	die('DB Connection not Created...!!');
}else{
	$sql = "INSERT INTO `tbl_student` (`S_ID`, `S_NAME`, `S_FNAME`, `S_ROLL_NO`) VALUES (NULL, 'Naveed', 'waheed', '353')";
	if(mysqli_query($conn,$sql)){
		echo "New Record Inserted Sucessfully...!";
	}
	
}