<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Please Login First!");
	       window.location="index.html"</script>';
}
if(isset($_POST['dlt']))
{
	require 'notedelete.php';
}
if(isset($_POST['edit']))
{
require 'conn.php';	
	$id=$_POST['id'];
    $head=$_POST['headline'];
	$desc=$_POST['editor1'];
	$userid=$_SESSION['user'];
	$stmt=$conn->prepare("UPDATE note SET head=?,description=?, userid=? WHERE sno=?");
	$stmt->bind_param("ssii",$head,$desc,$userid,$id);
	if($stmt->execute())
	{
		echo '<script type="text/javascript">alert("Note(s) edited!");
		      window.location="home1.php"</script>';	
	}
	else
	{
		echo "edit error".$conn->error;	
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Note Editor</title>
		
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
	</head>
	<body>
	<br>
	<center><p><h1>Welcome. Edit your note below</h1></p><br></center>
	<form method="POST" action="" enctype="multipart/form-data">
    <br>
    <strong>TITLE</strong><br>
    <?php
$conn=new mysqli('localhost','root','','moengage');
if($conn->connect_error)
{
	die("Connection Error".$conn->connect_error);
}
$id=$_POST['editid'];
$sql="SELECT * FROM note WHERE sno='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo '<input type="textarea" name="headline" value="'.$row['head'].'"placeholder="Title Here">
<br><br>
		<textarea name="editor1">'.$row['description'].'</textarea>
		<input type="hidden" name="id" value="'.$id.'">';
		$conn->close();
		?>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script><br><br>
			<input type="submit" style="background-color:green;color: white" name="edit" value="Save">
			</form>
		<br>
		<br>
			<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

		</body>
</html>