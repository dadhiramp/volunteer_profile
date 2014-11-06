<?php
require_once('../../functions/db_connect.php');
$con=connect_db();

if(trim($_POST['volunteer_id'])!=""){
	$sql = "UPDATE tbl_volunteers set display='".$_POST['display']."' where volunteer_id=".$_POST['volunteer_id']; 
	$res = mysql_query($sql) or die(mysql_error());	
} 
?>

