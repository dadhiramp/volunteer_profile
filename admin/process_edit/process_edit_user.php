<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');
$conxn=connect_db();
//load the form values
$fname = mysql_real_escape_string($_POST['fname']);
$position = mysql_real_escape_string($_POST['position']);
$email = mysql_real_escape_string($_POST['email']);
$pass = sha1(mysql_real_escape_string($_POST['pass']));

$uname = mysql_real_escape_string($_POST['uname']);
$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd


$update = mysql_real_escape_string($_POST['update']);
$update = explode('/', $update);
$update = $update[2].'-'.$update[0] .'-'.$update[1];///yyyy-mm-dd


$folder = "../../uploads/";
$file_name = $_FILES['uimage']['name'];
$file_size = $_FILES['uimage']['size'];
$tmp_name = $_FILES['uimage']['tmp_name'];
$final_filename = date('y_m_d_h_i_s_') . $file_name; // uniqueness
if($file_name != ''){
	if(file_exists($folder.$_POST['uimage_id'])){
	@unlink($folder.$_POST['uimage_id']);
	}
move_uploaded_file($tmp_name, $folder . $final_filename);
}
	
/*$uimage = mysql_real_escape_string($_POST['uimage']);*/
$rsec = $_POST['rsec'];
$alevel = $_POST['alevel'];



$pid = mysql_real_escape_string($_POST['pid']);





/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();
$date = date('y-m-d');
//prepare the INSERT statement

$sql = "UPDATE tbl_users SET full_name = '$fname',
								position = '$position',
								secretariat = '$rsec',
								email = '$email',
								user_name = '$uname',
								password = '$pass' ,
								access_level = '$alevel',
								posted_date = '$pdate',
								updated_date = '$update' ";
								 if($file_name != ''){
									 $sql .= "
								image = '$final_filename' ";
								}
								 $sql .="
								 WHERE user_id = '$pid'      ";

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
	
	window.location = "../../includes/response.php?page=pages&error='.base64_encode('SORRY !<br /> Unfortunately your update has not been successful.').'";
	</script>';
}


//close the connection
mysql_close($conxn);

?>

