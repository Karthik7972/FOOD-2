<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the home page (replace "http://localhost:4200/" with your actual home page URL)
header("http://localhost:4200/");
exit();
?>
