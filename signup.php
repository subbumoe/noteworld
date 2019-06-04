<?php
		session_start();

require 'conn.php';
if(isset($_POST['sbt']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$stmt=$conn->prepare("INSERT INTO user(name,email,pass) VALUES(?,?,?)");
$stmt->bind_param("sss",$name,$email,$password);

	if($stmt->execute())
	{
		echo '<script type="text/javascript">alert("Thankyou, You Are successfully Signed Up. Please Login Now.");
		      window.location="index.html"</script>';
	}
	else
		 echo 'Error in insertion'.$conn->error;
}
?>