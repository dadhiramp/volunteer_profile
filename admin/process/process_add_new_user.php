
<?php
session_start();
//connect to the database
require_once('../../functions/db_connect.php');

///load the form values
$page=$_POST['page'];
$fname = mysql_real_escape_string($_POST['fname']);
$position = mysql_real_escape_string($_POST['position']);
$email = mysql_real_escape_string($_POST['email']);
$pass = sha1(mysql_real_escape_string($_POST['pass']));

$uname = mysql_real_escape_string($_POST['uname']);
$pdate = date('Y-m-d');
/*$pdate = mysql_real_escape_string($_POST['pdate']);
$pdate = explode('/', $pdate);
$pdate = $pdate[2].'-'.$pdate[0] .'-'.$pdate[1];///yyyy-mm-dd
*/

$update = mysql_real_escape_string($_POST['update']);
$update = explode('/', $update);
$update = $update[2].'-'.$update[0] .'-'.$update[1];///yyyy-mm-dd


$folder = "../../uploads/";
$file_name = $_FILES['uimage']['name'];
$file_size = $_FILES['uimage']['size'];
$tmp_name = $_FILES['uimage']['tmp_name'];
$final_filename = date('y_m_d_h_i_s_') . $file_name; // uniqueness
move_uploaded_file($tmp_name, $folder . $final_filename);
	
	
/*$uimage = mysql_real_escape_string($_POST['uimage']);*/
$rsec = $_POST['rsec'];
$alevel = $_POST['alevel'];


/*echo '<pre>';
print_r($edu);
echo'</pre>';

exit;*/

$con=connect_db();

//prepare the INSERT statement
$sql = "INSERT INTO tbl_users
			(full_name, position, secretariat, email, user_name, password, access_level, posted_date, updated_date,image )
 		VALUES
 			('$fname', '$position', '$rsec', '$email', '$uname','$pass','$alevel','$pdate','$update','$final_filename')";

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
	
	window.location = "../../includes/response.php?page='.$page.'&sucess='.base64_encode('CONGRATULATIONS  <br />The user has been regesterd').'";
	</script>';
}else{
	echo '<script type="text/javascript" language="javascript">
	
	window.location = "../../includes/response.php?page='.$page.'&error='.base64_encode('SORRY !<br /> The user has been not regesterd').'";
	</script>';
}

//close the connection
mysql_close($conxn);

?>