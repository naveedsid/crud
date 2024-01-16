<?php 
define("DSN","mysql:host=localhost; dbname=test;");
define("USERNAME","root");
define("PASSWORD","");
$conn = new PDO(DSN, USERNAME, PASSWORD);
$sql = "INSERT INTO `tbl_student` (`S_ID`, `S_NAME`, `S_FNAME`, `S_ROLL_NO`) VALUES (NULL, 'Ali', 'Hameed', '456')";
$affected_rows = $conn->exec($sql);
echo $affected_rows." Rows Inserted...!";

//Closing Connection
$conn = NULL;