<?php
require_once('../../functions/db_connect.php');
$con=connect_db(); 
$sql = "SELECT * from tbl_interns where interns_id=".$_POST['interns_id'];
$res = mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_assoc($res);
echo $row['intern_name'];
?>