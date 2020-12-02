<?php
$connection=OpenCon();
function OpenCon(){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db ="restaurants-database";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	return $conn;
}
 
function CloseCon($conn){
 $conn -> close();
}
   
?>