<?php
session_start();
$_SESSION = array();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php");
}
?>