<?php
//load the pageid from URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';

//connect to the database
require_once('process/db_connect.php');

//prepare the sql
$sql = "DELETE FROM tbl_users WHERE  user_id = '$pageid' ";

//echo $sql;
//execute the sql
$res = mysql_query($sql) or trigger_error(mysql_error());
//decisive param
$affRows = mysql_affected_rows($conxn);


if($affRows > 0){
	//success in deleting  the record
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../includes/response.php?page=pages&sucess='.base64_encode(' Confermation ! <br />The account has been deleted').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../includes/response.php?page=pages&sucess='.base64_encode(' Sorry! <br /> The acount could not be deleted').'";
	</script>';
}
mysql_close($conxn);