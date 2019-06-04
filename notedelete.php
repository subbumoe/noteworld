<?php
require 'conn.php';
if(!isset($_POST['dlt']))
{
	die("Security Error");
}
$id=$_POST['deleteid'];
$sql="DELETE FROM note WHERE sno='$id'";
if($conn->query($sql)===TRUE)
{
	echo '<script type="text/javascript">alert("Note(s) deleted!");
		      window.location="home1.php"</script>';
    }
	else
	{
		echo "deletion error".$conn->error;
    }
	$conn->close();
?>
