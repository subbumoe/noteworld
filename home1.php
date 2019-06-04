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

<script type="text/javascript">
  (function(i,s,o,g,r,a,m,n){i.moengage_object=r;t={};q=function(f){return function(){(i.moengage_q=i.moengage_q||[]).push({f:f,a:arguments})}};f=['track_event','add_user_attribute','add_first_name','add_last_name','add_email','add_mobile','add_user_name','add_gender','add_birthday','destroy_session','add_unique_user_id','moe_events','call_web_push','track','location_type_attribute'],h={onsite:["getData"]};for(k in f){t[f[k]]=q(f[k])}a=s.createElement(o);m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);i.moe=i.moe||function(){n=arguments[0];return t};a.onload=function(){if(n){i[r]=moe(n)}}})(window,document,'script','https://cdn.moengage.com/webpush/moe_webSdk.min.latest.js','Moengage')

  Moengage = moe({
    app_id:"NL57QQ0OVPQ3037XTR0907DP",
    debug_logs: 0
  });
</script>

  <meta charset="UTF-8">
  <title>NOTES WORLD</title>
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
	
<form method="post" action="searchresult.php">
 <div class="topnav" align="left">
  <input class="button1" type="text" name="search" style="
       color: white;" placeholder="Search..">
        </div>
</form>
		<a href="javascript:;" class="button" id="add_new" onclick="window.location.href='editor.php'">Add New Note</a><br>
		<pre><input type="button" value="Logout" onclick="window.location.href='logout.php'" class="logout"/></pre>
		
		<div id="board">
			
		</div>
		<ul>
<?php
require 'conn.php';
$userid=$_SESSION['user'];
$sql="SELECT * FROM note WHERE userid='$userid'";
$result=$conn->query($sql);
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
			$conn->close();
?> 
  </ul>		
		<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
	</body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  





</body>

</html>
