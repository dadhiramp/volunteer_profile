<?php
session_start();

//to remove a single
unset($_SESSION['username']) ; // removes the value / unset the value of session data called, username
header('location: login.php');
?>