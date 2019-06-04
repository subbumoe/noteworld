<?php
		session_start();
	if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Please Login First!");
	       window.location="index.html"</script>';
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sticky Notes</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Sticky Notes board</title>
		<meta name="description" content="Sticky Notes by Edmond Ko">
    <meta name="author" content="Edmond Ko">
 		<link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
 		<link href='css/note.css' rel='stylesheet' type='text/css'>
	<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
	</head>
	<body>

		<a href="javascript:;" class="button" id="add_new" onclick="window.location.href='home1.php'">Back to Home</a>
		<div id="board">
			
		</div>
		<ul>
<?php
require 'conn.php';
$search=$_POST['search'];
$search='%'.$search.'%';
$userid='%'.$userid.'%';
$userid=$_SESSION['user'];
$stmt=$conn->prepare("SELECT * FROM note WHERE (head LIKE ? OR description LIKE ?) AND userid LIKE ?");
$stmt->bind_param("ssi",$search,$search,$userid);
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
   echo ' <li>
      <a href="#">
        <h2>'.$row['head'].'</h2>
        <p>'.$row['description'].'</p>
		<p>
      	<form method="post" action="noteedit.php">
		<input type="submit" style="background-color:green;color: white" value="Edit">
		<input type="hidden" name="editid" value="'.$row['sno'].'">
	  <input type="submit" style="background-color:green;color: white" name="dlt" value="Delete">
	  <input type="hidden" name="deleteid" value="'.$row['sno'].'">
	  </form>
	  </p>
      </a>
    </li>';
  }
}
else{
	echo '<h2 style ="color: black;">No results found</h2>';
}
			$conn->close();
?> 
  </ul>		
		
	</body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


</body>

</html>
