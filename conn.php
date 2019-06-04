<?php
$conn=new mysqli('localhost','root','','moengage');
if($conn->connect_error)
{
	die("Error in connection".$conn->connect_error);
}
?>