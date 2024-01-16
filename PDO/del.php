<?php 
define("DSN","mysql:host=localhost; dbname=test;");
define("USERNAME","root");
define("PASSWORD","");
//Connection
$conn = new PDO(DSN, USERNAME, PASSWORD);
//Query
$sql = "DELETE FROM `tbl_student` WHERE `S_ID` =18";
//Execte and return affected rows
$affected_rows = $conn->exec($sql);
echo $affected_rows." Rows Deleted...!";

//Closing Connection
$conn = NULL;