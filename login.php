<?php
session_start();
require 'conn.php';
if(!isset($_POST['sbt']))
{
	die("Security Error");
}
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$stmt=$conn->prepare("SELECT * FROM user WHERE email=? AND pass=?");
$stmt->bind_param("ss",$uname,$pass);
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	$_SESSION['user']=$row['sno'];
	echo '<script type="text/javascript">alert("Welcome to NOTE WORLD! '.$row['name'].'");
	       window.location="home1.php"</script>';
}
else
{
	echo '<script type="text/javascript">alert("Invalid User");
		   window.location="index.html"</script>';
}
?>