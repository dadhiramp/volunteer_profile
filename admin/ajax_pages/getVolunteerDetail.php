<?php
require_once('../../functions/db_connect.php');
$con=connect_db(); 
$sql = "SELECT * from tbl_volunteers where volunteer_id=".$_POST['volunteer_id'];
$res = mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_assoc($res);
echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
?>

