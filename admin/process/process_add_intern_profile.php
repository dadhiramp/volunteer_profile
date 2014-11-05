<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');
$conxn=connect_db();

//load the form values
$page=$_POST['page'];
$adate = mysql_real_escape_string($_POST['adate']);
$fname = mysql_real_escape_string($_POST['fname']);
$dob = mysql_real_escape_string($_POST['dob']);
$dob = explode('/', $dob);
$dob = $dob[2].'-'.$dob[0] .'-'.$dob[1];///yyyy-mm-dd

$gender = $_POST['gender'];

$edu = mysql_real_escape_string($_POST['edu']);

$applyingfor = $_POST['applyingfor'];


$address = mysql_real_escape_string($_POST['address']);
$icontact = mysql_real_escape_string($_POST['icontact']);
$email = mysql_real_escape_string($_POST['email']);
$icountry = mysql_real_escape_string($_POST['icountry']);
$cname = mysql_real_escape_string($_POST['cname']);
$caddress = mysql_real_escape_string($_POST['caddress']);
$ccpname = mysql_real_escape_string($_POST['ccpname']);
$ccpnumber = mysql_real_escape_string($_POST['ccpnumber']);
$why = mysql_real_escape_string($_POST['why']);
$expect = mysql_real_escape_string($_POST['expect']);

$inv = isset($_POST['inv'])? $_POST['inv']: array();
$string="";
foreach($inv as $value){
	$string .= $value . ',';
}

$day = isset($_POST['day'])? $_POST['day']: array();
$string="";
foreach($day as $value){
	$string .= $value . ',';
}


$u = $_POST['u'];

/*$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd*/
$pdate = date('Y-m-d');
$udate = mysql_real_escape_string($_POST['udate']);
$udate = explode('/', $udate);
$udate = $udate[2].'-'.$udate[0] .'-'.$udate[1];///yyyy-mm-dd

$ifrom = mysql_real_escape_string($_POST['ifrom']);
$ifrom = explode('/', $ifrom);
$ifrom = $ifrom[2].'-'.$ifrom[0] .'-'.$ifrom[1];///yyyy-mm-dd

$ito = mysql_real_escape_string($_POST['ito']);
$ito = explode('/', $ito);
$ito = $ito[2].'-'.$ito[0] .'-'.$ito[1];///yyyy-mm-dd





$ikeyw = mysql_real_escape_string($_POST['ikeyw']);
$imetadis = mysql_real_escape_string($_POST['imetadis']);

$folder = "../../uploads/";
$file_name = $_FILES['ppimage']['name'];
$file_size = $_FILES['ppimage']['size'];
$tmp_name = $_FILES['ppimage']['tmp_name'];
$final_filename = date('y_m_d_h_i_s_') . $file_name; // uniqueness

move_uploaded_file($tmp_name, $folder . $final_filename);

//connect database

$con=connect_db();
$date = date('y-m-d');

//prepare the INSERT statement
$sql = "INSERT INTO  tbl_interns 
			(apply_date, intern_name, date_of_birth, gender, gread, apply_for, intern_address, contact, email, country, college, collage_address, college_contact_person, contact_number_of_college, why_u_did_choose_cocap, expectation, get_involved, specify_day, posted_date, update_date, internship_from, internship_to, intern_key_words, intern_meta_discription, pp_image)
 		VALUES
 			('$date', '$fname', '$dob', '$gender', '$edu', '$applyingfor', '$address', '$icontact', '$email', '$icountry', '$cname', '$caddress', '$ccpname', '$ccpnumber', '$why', '$expect', '$string','$string', '$pdate', '$udate', '$ifrom', '$ito', '$ikeyw', '$imetadis', '$final_filename')";

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
	
	window.location = "../../includes/response.php?page='.$page.'&sucess='.base64_encode('CONGRATULATIONS <br />Your application has been sent').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page='.$page.'&error='.base64_encode('SORRY ! Your application has been not sent').'";
	</script>';
}

//close the connection
mysql_close($conxn);

?>