<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');

//load the form values
$chvolid = $_POST['chvolid'];
$uid = $_POST['uid'];
$acont = mysql_real_escape_string($_POST['acont']);

$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd

$udate = mysql_real_escape_string($_POST['udate']);
$udate = explode('/', $udate);
$udate = $udate[2].'-'.$udate[0] .'-'.$udate[1];///yyyy-mm-dd

$pid = mysql_real_escape_string($_POST['pid']);
$id= $_POST['id'];


/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();

//prepare the INSERT statement

$sql = "UPDATE tbl_participatn  SET 
								name_of_program = '$acont',
								
								updated_date = '$udate' 
								WHERE participatn_id = '$pid'  ";

/*echo $sql;*/

//execute the query
$res = mysql_query($sql) or die(mysql_error());

/*echo $sql;
exit;*/
//decisive parameter
$affRows = mysql_affected_rows($con); //integer
/*echo $affRows;
exit;*/

//decide and loacate
if($affRows > 0){
//success in deleting  the record
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&sucess='.base64_encode('CONGRATULATIONS  <br />Your update has been successful.').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&error='.base64_encode('SORRY !<br /> your update has not been successful.').'";
	</script>';
}


//close the connection
mysql_close($conxn);


?>

