<?php
require_once('../../functions/db_connect.php');
$con=connect_db();

if(trim($_POST['interns_id'])!=""){
	$sql = "UPDATE tbl_interns set display='".$_POST['display']."' where interns_id=".$_POST['interns_id']; 
	$res = mysql_query($sql) or die(mysql_error());	
} 
?>

