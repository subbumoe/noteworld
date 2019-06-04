<?php
	session_start();
if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Please Login First!");
	       window.location="index.html"</script>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Feed Editor</title>
		
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
	</head>
	<body>
	<br>
	<center><p><h1>Welcome. Add your note below</h1></p><br></center>
	<form method="POST" action="noteinsert.php" enctype="multipart/form-data">
    <br>
    <strong>TITLE</strong><br>
<input type="textarea" name="headline" placeholder="Title Here">
<br><br>
		<textarea name="editor1"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script><br><br>
			<input type="submit" style="background-color:green;color: white" value="Save">
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