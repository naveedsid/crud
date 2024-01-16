<?php 
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","test");
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if(!$conn){
	die("DB NOT Connect...!");
}
	
	$sql = "SELECT * FROM `tbl_student`";
	
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) > 0){
	
		while($row = mysqli_fetch_assoc($result)){
			echo "<pre>",print_r($row),"</pre>";
		}
		
	}else{echo "0 Records";}
//Closing Connection
mysqli_close($conn);
?>