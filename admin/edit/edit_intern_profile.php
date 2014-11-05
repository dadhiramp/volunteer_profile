<?php
//load the pageid from the URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';
//conenct to the datbase
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
connect_db();

$development_region=getAllDevelopmentRegion();

//prepare the sql to get a page record depending on pageid
$sql  = " SELECT * FROM  tbl_interns WHERE interns_id = '$pageid' ";
//execute the query
$res = mysql_query($sql);// or die(mysql_error());
//since only a single record is obtained:
$row = mysql_fetch_assoc($res);

/*echo '<pre>';

print_r($row);
echo '</pre>';*/

$dob  = $row['date_of_birth'];
$dob = explode('-', $dob);
$dob = $dob[1] . '/' . $dob[2] . '/' . $dob[0];

$pdate  = $row['posted_date'];
$pdate = explode('-', $pdate);
$pdate = $pdate[1] . '/' . $pdate[2] . '/' . $pdate[0];

$udate  = $row['update_date'];
$udate = explode('-', $udate);
$udate = $udate[1] . '/' . $udate[2] . '/' . $udate[0];

$ifrom  = $row['internship_from'];
$ifrom = explode('-', $ifrom);
$ifrom = $ifrom[1] . '/' . $ifrom[2] . '/' . $ifrom[0];

$ito  = $row['internship_to'];
$ito = explode('-', $ito);
$ito = $ito[1] . '/' . $ito[2] . '/' . $ito[0];
/*mysql_close($conxn);*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Intern Profile</title>
<link rel="stylesheet" type="text/css" href="../style.css"/>
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
<!--date picker -->
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});

$(function() {
$( "#datepicker1" ).datepicker();
});

$(function() {
$( "#datepicker2" ).datepicker();
});

$(function() {
$( "#datepicker3" ).datepicker();
});

$(function() {
$( "#datepicker4" ).datepicker();
});
</script>

<!--date picker ends -->
</head>

<body>
<form action="process_edit/process_edit_intern_profile.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="bordersize">
 <input type="hidden" name="page" id="page" value="list_of_intern_profile">  

<fieldset>
    <legend class="toptitle">Edit Intern Profile</legend>
    <table width="100%" border="0" align="left" dir="ltr">
      <!--<tr>
        <th width="26%" align="left" scope="row">Apply Date </th>
        <td width="74%"><input type="date" name="adate" id="datepicker" class="formfprall" /></td>
      </tr>-->
      <tr>
        <th width="26%" align="left" scope="row">Full Name</th>
        <td width="74%"><input type="text" name="fname" id="fname" class="formfprall" value="<?php echo $row['intern_name']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Date of Birth</th>
        <td><input type="date" name="dob" id="datepicker" class="formfprall" value="<?php echo $dob; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row"><p>Gender</p></th>
        <td><select name="gender" id="gender" class="boxforcheek">
          <option value="0" <?php echo ($row['gender'] == 0) ? ' selected="selected" ' : '';?>>Female</option>
          <option value="1" <?php echo ($row['gender'] == 1) ? ' selected="selected" ' : '';?>>Male</option>
          <option value="2" <?php echo ($row['gender'] == 2) ? ' selected="selected" ' : '';?>>Others</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Education</th>
        <td><input type="text" name="edu" id="edu" class="formfprall" value="<?php echo $row['gread']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Applying for</th>
        <td><select name="applyingfor" id="applyingfor" class="boxforcheek">
          
            <?php
              foreach ($development_region as $dev_row) {
                  if($dev_row['code']==$row['apply_for'])
                    $sel="selected";
                  else
                     $sel=""; 
                ?>
                <option value="<?php echo $dev_row['code']?>" <?php echo $sel;?> ><?php echo $dev_row['name']?></option>    
             <?php }?>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Address</th>
        <td><input type="text" name="address" id="address"  class="formfprall" value="<?php echo $row['intern_address']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Contact #</th>
        <td><input type="text" name="icontact" id="icontact"  class="formfprall" value="<?php echo $row['contact']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Email Address</th>
        <td><input type="text" name="email" id="email" class="formfprall" value="<?php echo $row['email']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Country</th>
        <td><input type="text" name="icountry" id="icountry" class="formfprall" value="<?php echo $row['country']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Name</th>
        <td><input type="text" name="cname" id="cname" class="formfprall" value="<?php echo $row['college']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Address</th>
        <td><input type="text" name="caddress" id="caddress" class="formfprall" value="<?php echo $row['collage_address']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Contact Person Name</th>
        <td><input type="text" name="ccpname" id="ccpname" class="formfprall" value="<?php echo $row['college_contact_person']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Contact person #</th>
        <td><input type="text" name="ccpnumber" id="ccpnumber" class="formfprall" value="<?php echo $row['contact_number_of_college']; ?>" /></td>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Why did u choose COCAP as your field ? Give specific reasons</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"> 
        <textarea class="ckeditor" name="why" id="why" class="formforint" cols="45" rows="5"><?php echo $row['why_u_did_choose_cocap']; ?></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Your expectation from COCAP ? </th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="ckeditor" name="expect" id="expect" class="formforint" cols="45" rows="5"><?php echo $row['expectation']; ?></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">In which area do you get involve? <?php $str = $row['get_involved'];
		$inv = explode(',',$str);?> </th>
        <td><p>
          <label>
            <input type="checkbox" name="inv[]" value="0" id="inv_0" <?php echo in_array('0', $inv) ? ' checked="checked" ' : '';?> /> 
            </label>
           Research<br />
          <label>
            <input type="checkbox" name="inv[]" value="1" id="inv_1" <?php echo in_array('1', $inv) ? ' checked="checked" ' : '';?> />
             Campaigns</label>
          <br />
          <label>
            <input type="checkbox" name="inv[]" value="2" id="inv_2" <?php echo in_array('2', $inv) ? ' checked="checked" ' : '';?> /></label>
           Documentation<br />
          <label>
            <input type="checkbox" name="inv[]" value="3" id="inv_3" <?php echo in_array('3', $inv) ? ' checked="checked" ' : '';?> /></label>
           Publication<br />
          <label>
            <input type="checkbox" name="inv[]" value="4" id="inv_4" <?php echo in_array('4', $inv) ? ' checked="checked" ' : '';?> />
             Organizing trainingx</label>
          <br />
          <label>
            <input type="checkbox" name="inv[]" value="5" id="inv_5" <?php echo in_array('5', $inv) ? ' checked="checked" ' : '';?> /></label>
           Member support<br />
          <label>
            <input type="checkbox" name="inv[]" value="6" id="inv_6" <?php echo in_array('6', $inv) ? ' checked="checked" ' : '';?> /> 
            </label>
           ICT<br />
          <label>
            <input type="checkbox" name="inv[]" value="7" id="inv_7" <?php echo in_array('7', $inv) ? ' checked="checked" ' : '';?> /></label>
           Media Monitoring<br />
          <label>
            <input type="checkbox" name="inv[]" value="8" id="inv_8" <?php echo in_array('8', $inv) ? ' checked="checked" ' : '';?> /> 
            </label>
           Finance/Admin<br />
          <label>
            <input type="checkbox" name="inv[]" value="9" id="inv_9" <?php echo in_array('9', $inv) ? ' checked="checked" ' : '';?> /></label>
           Others<br />
          <br />
        </p></td>
      </tr>
      <tr>
        <th align="left" scope="row">Which days you are wondering to work with COCAP ? <?php $str = $row['specify_day'];
		$day = explode(',',$str);?></th>
        <td><p>
          <label>
            <input type="checkbox" name="day[]" value="0" id="day_0" <?php echo in_array('0', $day) ? ' checked="checked" ' : '';?> /></label>
          <label for="Field17"> Sunday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="1" id="day_1" <?php echo in_array('1', $day) ? ' checked="checked" ' : '';?> /></label>
           Monday<br />
          <label>
            <input type="checkbox" name="day[]" value="2" id="day_2" <?php echo in_array('2', $day) ? ' checked="checked" ' : '';?> /></label>
           Tuesday<br />
          <label>
            <input type="checkbox" name="day[]" value="3" id="day_3" <?php echo in_array('3', $day) ? ' checked="checked" ' : '';?> /></label>
           Wednesday<br />
          <label>
            <input type="checkbox" name="day[]" value="4" id="day_4" <?php echo in_array('4', $day) ? ' checked="checked" ' : '';?> /></label>
          <label for="Field14"> Thursday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="5" id="day_5" <?php echo in_array('5', $day) ? ' checked="checked" ' : '';?> />  
            </label>
          <label for="Field15"> Friday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="6" id="day_6" <?php echo in_array('6', $day) ? ' checked="checked" ' : '';?> /></label>
           All working days<br />
          <br />
        </p></td>
      </tr>
      <tr>
       
        <th align="left" scope="row">PP Image</th>
        <td><input type="file" name="ppimage" id="ppimage" />
        <img src="../uploads/<?php echo $row['pp_image'] ;?>"  width="75px" height="75px"/>
        <input type="hidden" id="id" name="ppimage_id" value="<?php echo $row['pp_image']; ?>" />
        </td>
       
      </tr>
      <tr>
        <th align="left" scope="row">Posted Date</th>
        <td><input type="date" name="pdate" id="datepicker1" class="formfprall" value="<?php echo $pdate; ?>" disabled="disabled"  /></td> 
      </tr>
      <tr>
        <th align="left" scope="row">Updated Date</th>
        <td><input type="date" name="udate" id="datepicker2" class="formfprall" value="<?php echo $udate; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Internship From</th>
        <td><input type="date" name="ifrom" id="datepicker4" class="formfprall" value="<?php echo $ifrom; ?>"  /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Internship To</th>
        <td><input type="date" name="ito" id="datepicker3" class="formfprall" value="<?php echo $ito; ?>"  /></td>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Intern Key Word</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="ckeditor" name="ikeyw" id="ikeyw" class="formforint" cols="45" rows="5"><?php echo $row['intern_key_words']; ?></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Intern Meta Discription</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="ckeditor" name="imetadis" id="imetadis" class="formforint" cols="45" rows="5"><?php echo $row['intern_meta_discription']; ?></textarea></th>
      </tr>
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Submit" /> <input type="hidden" id="id" name="pid" value="<?php echo $row['interns_id']; ?>" /></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>