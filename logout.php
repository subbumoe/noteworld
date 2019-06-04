<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Please Login First!");
	       window.location="index.html"</script>';
}
session_unset();
session_destroy();
header('Location:index.html');
?>