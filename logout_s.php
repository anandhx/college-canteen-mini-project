<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: stafflogin.php"); // Redirecting To Home Page
}
?>