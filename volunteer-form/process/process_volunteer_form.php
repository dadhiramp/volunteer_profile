<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');

//load the form values
$applyd = mysql_real_escape_string($_POST['applyd']);
$fname = mysql_real_escape_string($_POST['fname']);
$mname = mysql_real_escape_string($_POST['mname']);
$lname = mysql_real_escape_string($_POST['lname']);
$dob = mysql_real_escape_string($_POST['dob']);
$dob = explode('/', $dob);
$dob = $dob[2].'-'.$dob[1] .'-'.$dob[0];///yyyy-mm-dd

$gender = $_POST['gender'];
$qulif = mysql_real_escape_string($_POST['qulif']);

$applyfor = $_POST['applyfor'];
$caste = $_POST['caste'];
$occ = $_POST['occ'];



$temadd = mysql_real_escape_string($_POST['temadd']);
$paddress = mysql_real_escape_string($_POST['paddress']);
$city = mysql_real_escape_string($_POST['city']);
$state = mysql_real_escape_string($_POST['state']);
$zcode = mysql_real_escape_string($_POST['zcode']);

$country = mysql_real_escape_string($_POST['country']);


$email = mysql_real_escape_string($_POST['email']);
$mob1 = mysql_real_escape_string($_POST['mob1']);
$mob2 = mysql_real_escape_string($_POST['mob2']);
$worexp = mysql_real_escape_string($_POST['worexp']);
$why = mysql_real_escape_string($_POST['why']);


$edu = $_POST['edu'];
$string="";
foreach($edu as $value){
	$string .= $value . ',';
}



$how = $_POST['how'];
$string="";
foreach($how as $value){
	$string .= $value . ',';
}

$day = $_POST['day'];
$string="";
foreach($day as $value){
	$string .= $value . ',';
}


/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();
$date = date('y-m-d');

//prepare the INSERT statement
$sql = "INSERT INTO tbl_volunteers 
			(apply_date, first_name, middle_name,last_name, date_of_birth, gender, qualification, apply_for, vol_caste, occupation, temporary_address, permanent_address, city, development_region, postal_code, country, email, contact_number, alternative_contact_number, working_exp, why_interested, which_section, how_will_contribute, specify_the_day, pp_image)
 		VALUES
 			('$date', '$fname', '$mname', '$lname', '$dob','$gender','$qulif','$applyfor','$caste','$occ','$temadd','$paddress','$city','$state','$zcode','$country','$email','$mob1','$mob2','$worexp','$why','$string','$string','$string', '')";

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
	
	window.location = "../../includes/response.php?page=pages&sucess='.base64_encode('CONGRATULATIONS  <br />Your application has been sent').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&error='.base64_encode('SORRY !<br /> Your application has been not sent').'";
	</script>';
}
//close the connection
mysql_close($conxn);

?>