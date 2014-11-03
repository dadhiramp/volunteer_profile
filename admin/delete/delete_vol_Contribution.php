<?php
//load the pageid from URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';

//connect to the database
require_once('process/db_connect.php');

//prepare the sql
$sql = "DELETE FROM tbl_contributions WHERE contributions_id = '$pageid' ";

if(mysql_query($sql)){
	//success in deleting  the record
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../includes/response.php?page=pages&sucess='.base64_encode(' Confirmation ! <br />Your page has been deleted.').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../includes/response.php?page=pages&sucess='.base64_encode(' Sorry! <br /> Your page could not be deleted.').'";
	</script>';
}
mysql_close($conxn);