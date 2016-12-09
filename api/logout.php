<?php
session_start();
$_SESSION = array();
session_destroy();
if(1) // Destroying All Sessions
{
	echo "<script type='text/javascript'>alert(\"You are not authorised to access the page\");</script>";
echo "Logged out";
//header("Location: index.php");
}
?>
