<?php
session_start();
$uid = $_SESSION['user_id'];
//connect to the database
require_once('../../functions/db_connect.php');

//load the form values
$chvolid = $_POST['chvolid'];
$page=$_POST['page'];
/*$uid = $_POST['uid'];*/
$agrade = $_POST['agrade'];
$acont = mysql_real_escape_string($_POST['acont']);

$pdate = date('Y-m-d');

/*$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd

$udate = mysql_real_escape_string($_POST['udate']);
$udate = explode('/', $udate);
$udate = $udate[2].'-'.$udate[0] .'-'.$udate[1];///yyyy-mm-dd*/



/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();

//prepare the INSERT statement
$sql = "INSERT INTO  tbl_behav 
			(volunteer_id, user_id, situation_or_cond, grade, posted_date)
 		VALUES
 			('$chvolid', '$uid', '$acont','$agrade', '$pdate')";

/*echo $sql;
exit;*/

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
	
	window.location = "../../includes/response.php?page='.$page.'&sucess='.base64_encode('CONGRATULATIONS  <br />Your entry has been successful.').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page='.$page.'&error='.base64_encode('SORRY !<br /> Your entry has been not successful.').'";
	</script>';
}
//close the connection
mysql_close($conxn);

?>