<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');
$conxn=connect_db();
//load the form values
$applyd = mysql_real_escape_string($_POST['applyd']);

$fname = mysql_real_escape_string($_POST['fname']);
$sname = mysql_real_escape_string($_POST['sname']);
$lname = mysql_real_escape_string($_POST['lname']);
$dob = mysql_real_escape_string($_POST['dob']);
$dob = explode('/', $dob);
$dob = $dob[2].'-'.$dob[0] .'-'.$dob[1];///yyyy-mm-dd


$gender = $_POST['gender'];
$quli = mysql_real_escape_string($_POST['quli']);

$apply = $_POST['apply'];
$caste = $_POST['caste'];
$occ = $_POST['occ'];



$tadd = mysql_real_escape_string($_POST['tadd']);
$padd = mysql_real_escape_string($_POST['padd']);
$city = mysql_real_escape_string($_POST['city']);
$dregion = mysql_real_escape_string($_POST['dregion']);
$pcode = mysql_real_escape_string($_POST['pcode']);

$country = mysql_real_escape_string($_POST['country']);


$email = mysql_real_escape_string($_POST['email']);
$cnum = mysql_real_escape_string($_POST['cnum']);
$acontnum = mysql_real_escape_string($_POST['acontnum']);
$level = $_POST['level'];
$satcocap = $_POST['satcocap'];
$wexp = mysql_real_escape_string($_POST['wexp']);
$why = mysql_real_escape_string($_POST['why']);


$which = isset($_POST['which'])? $_POST['which']: array();

$string="";
foreach($which as $value){
	$string .= $value . ',';
}

$how = isset($_POST['how'])? $_POST['how']: array();
$string="";
foreach($how as $value){
	$string .= $value . ',';
}

$day = isset($_POST['day'])? $_POST['day']: array();

$string="";
foreach($day as $value){
	$string .= $value . ',';
}

$volkeywords = mysql_real_escape_string($_POST['volkeywords']);
$volmetadesc = mysql_real_escape_string($_POST['volmetadesc']);
$fdate = mysql_real_escape_string($_POST['fdate']);
$fdate = explode('/', $fdate);
$fdate = $fdate[2].'-'.$fdate[0] .'-'.$fdate[1];///yyyy-mm-dd

$tdate = mysql_real_escape_string($_POST['tdate']);
$tdate = explode('/', $tdate);
$tdate = $tdate[2].'-'.$tdate[0] .'-'.$tdate[1];///yyyy-mm-dd

$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd

$udate = mysql_real_escape_string($_POST['udate']);
$udate = explode('/', $udate);
$udate = $udate[2].'-'.$udate[0] .'-'.$udate[1];///yyyy-mm-dd



$folder = "../../uploads/";
$file_name = $_FILES['ppimage']['name'];
$file_size = $_FILES['ppimage']['size'];
$tmp_name = $_FILES['ppimage']['tmp_name'];
$final_filename = date('y_m_d_h_i_s_') . $file_name; // uniqueness
move_uploaded_file($tmp_name, $folder . $final_filename);

$folder = "../../uploads/";
$file_name = $_FILES['banner']['name'];
$file_size = $_FILES['banner']['size'];
$tmp_name = $_FILES['banner']['tmp_name'];
$final_filenameone = date('y_m_d_h_i_s_') . $file_name; // uniqueness

move_uploaded_file($tmp_name, $folder . $final_filenameone);

/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();
$date = date('y-m-d');

//prepare the INSERT statement
$sql = "INSERT INTO tbl_volunteers 
			(apply_date, first_name, middle_name,last_name, date_of_birth, gender, qualification, apply_for, vol_caste, occupation, temporary_address, permanent_address, city, development_region, postal_code, country, email, contact_number, alternative_contact_number, volunteer_level, status_at_cocap, working_exp, why_interested, which_section, how_will_contribute, specify_the_day, pp_image, banner_image, volunteer_key_words, volunteer_meta_description, voluntarism_from, voluntarism_to, posted_date, updated_date)
 		VALUES
 			('$date', '$fname', '$sname', '$lname', '$dob','$gender','$quli','$apply','$caste','$occ','$tadd','$padd','$city','$dregion','$pcode','$country','$email','$cnum','$acontnum','$level','$satcocap','$wexp','$why','$string','$string','$string', '$final_filename','$final_filenameone','$volkeywords','$volmetadesc','$fdate','$tdate','$pdate','$udate')";

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
	
	window.location = "../../includes/response.php?page=pages&sucess='.base64_encode('CONGRATULATIONS  <br />Your entry has been successful.').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page=pages&error='.base64_encode('SORRY !<br /> Unfortunately your entry has not been successful.').'";
	</script>';
}



//close the connection
mysql_close($conxn);

?>