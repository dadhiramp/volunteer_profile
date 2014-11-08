<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');

//load the form values
$adate = mysql_real_escape_string($_POST['adate']);
$fname = mysql_real_escape_string($_POST['fname']);
$dob = mysql_real_escape_string($_POST['dob']);
$dob = explode('/', $dob);
$dob = $dob[2].'-'.$dob[0] .'-'.$dob[1];///yyyy-mm-dd
$page=$_POST['page'];
$gender = $_POST['gender'];
$pdate = date('Y-m-d');

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



$inv = isset($_POST['inv']) ? $_POST['inv'] : array();
$string="";
foreach($inv as $value){
	$string .= $value . ',';
}

$day = isset($_POST['day']) ? $_POST['day'] : array();
$string="";
foreach($day as $value){
	$string .= $value . ',';
}




$u = $_POST['u'];

$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd

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
$pid = $_POST['pid'];

$folder = "../../uploads/";
$file_name = $_FILES['ppimage']['name'];
$file_size = $_FILES['ppimage']['size'];
$tmp_name = $_FILES['ppimage']['tmp_name'];
$final_filename = date('y_m_d_h_i_s_') . $file_name; // uniqueness
if($file_name != ''){
	if(file_exists($folder.$_POST['ppimage_id'])){
	@unlink($folder.$_POST['ppimage_id']);
	}
move_uploaded_file($tmp_name, $folder . $final_filename);

}

/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();
$date = date('y-m-d');
//prepare the INSERT statement

$sql = "UPDATE tbl_interns SET apply_date = '$date',
								intern_name = '$fname',
								date_of_birth = '$dob',
								gender = '$gender',
								gread = '$edu',
								apply_for = '$applyingfor' ,
								intern_address = '$address',
								contact = '$icontact',
								email = '$email',
								 country = '$icountry',
								 college = '$cname',
								 collage_address = '$caddress',
								 college_contact_person = '$ccpname',
								 contact_number_of_college = '$ccpnumber',
								 why_u_did_choose_cocap = '$why',
								 expectation = '$expect',
								 get_involved = '$string',
								 specify_day = '$string',
								 posted_date = '$pdate',
								 update_date = '$udate',
								 internship_from = '$ifrom',
								 internship_to = '$ito',
								 intern_key_words = '$ikeyw',
								 intern_meta_discription = '$imetadis',
								 pp_image = '$final_filename'
								 
								 WHERE interns_id = '$pid'      ";

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
	
	window.location = "../../includes/response.php?page='.$page.'&sucess='.base64_encode('CONGRATULATIONS  <br />Your update has been successful.').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page='.$page.'&error='.base64_encode('SORRY !<br /> Unfortunately your update has not been successful.').'";
	</script>';
}


//close the connection
mysql_close($conxn);
?>

