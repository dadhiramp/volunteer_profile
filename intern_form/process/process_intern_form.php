<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');

//load the form values
$applyd = mysql_real_escape_string($_POST['applyd']);
$fname = mysql_real_escape_string($_POST['fname']);
$dob = mysql_real_escape_string($_POST['dob']);
$dob = explode('/', $dob);
$dob = $dob[2].'-'.$dob[1] .'-'.$dob[0];///yyyy-mm-dd
$gender = $_POST['gender'];

$gread = mysql_real_escape_string($_POST['gread']);

$applyfor = $_POST['applyfor'];

$addr = mysql_real_escape_string($_POST['addr']);
$contnum = mysql_real_escape_string($_POST['contnum']);
$email = mysql_real_escape_string($_POST['email']);
$country = mysql_real_escape_string($_POST['country']);




$colname = mysql_real_escape_string($_POST['colname']);
$coladd = mysql_real_escape_string($_POST['coladd']);
$coordname = mysql_real_escape_string($_POST['coordname']);
$coornum = mysql_real_escape_string($_POST['coornum']);
$why = mysql_real_escape_string($_POST['why']);
$expec = mysql_real_escape_string($_POST['expec']);

$area = $_POST['area'];
$string="";
foreach($area as $value){
	$string .= $value . ',';
}

$day = $_POST['day'];
$string="";
foreach($day as $value){
	$string .= $value . ',';
}



//connect database

$con=connect_db();
$date = date('y-m-d');
//prepare the INSERT statement
$sql = "INSERT INTO  tbl_interns 
			(apply_date, intern_name, date_of_birth, gender, gread, apply_for, intern_address, contact, email, country, college, collage_address, college_contact_person, contact_number_of_college, why_u_did_choose_cocap, expectation, get_involved, specify_day,  	pp_image)
 		VALUES
 			('&date','$fname', '$dob', '$gender', '$gread', '$applyfor', '$addr', '$contnum', '$email', '$country', '$colname', '$coladd', '$coordname', '$coornum', '$why', '$expec', '$string', '$string', '')";

/*echo $sql;
exit;*/
//execute the query
$res = mysql_query($sql) or die(mysql_error());

//decisive parameter
$affRows = mysql_affected_rows($con); //integer

//decide and loacate
if($affRows > 0){
//success in deleting  the record
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&sucess='.base64_encode('CONGRATULATIONS <br />Your application has been sent').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&error='.base64_encode('SORRY ! Your application has been not sent').'";
	</script>';
}
//close the connection
mysql_close($conxn);

?>