<?php
session_start();
//load the database
require_once('../../admin/process/db_connect.php');

///load the form values
$uname = mysql_real_escape_string($_POST['uname']);
$pass = sha1(mysql_real_escape_string($_POST['pass']));

//prepare the sql to valudate: SELECT statement
$sql = "SELECT * FROM tbl_users WHERE user_name = '$uname' 
		AND password = '$pass' ";
//execute the query
$res = mysql_query($sql) or die(mysql_error());

//decisive parameter
$numRows = mysql_num_rows($res);
$row = mysql_fetch_assoc($res);

//decide and locate to some apprpriate page
if($numRows > 0){
//success	
$_SESSION['username'] = $uname; // created a session variable called username
$_SESSION['full_name'] = $row['full_name'];
$_SESSION['secretariat'] = $row['secretariat'];
$_SESSION['access_level'] = $row['access_level'];
$_SESSION['user_id'] = $row['user_id'];	
$_SESSION['root_site'] = 'volunteer_profile';
header('location: ../../admin/index.php'); // auto matic redirection of the page
}else{
	header('location: ../../index.php');
}

//close the connection
mysql_close($conxn);

?>