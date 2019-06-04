<?php
	session_start();
if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Please Login First!");
	       window.location="index.html"</script>';
}

require 'conn.php';
$headline=$_POST['headline'];
$notes=$_POST['editor1'];
$userid=$_SESSION['user'];
$stmt=$conn->prepare("INSERT INTO note(head,description,userid) VALUES(?,?,?)");
$stmt->bind_param("ssi",$headline,$notes,$userid);
	if($stmt->execute())
	{
		echo '<script type="text/javascript">alert("Notes saved!");
		      window.location="home1.php"</script>';
    }
	else
	{
		echo "insertion error".$conn->error;
    }

$conn->close();
?>
	