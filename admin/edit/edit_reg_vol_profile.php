<?php
//load the pageid from the URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';
//conenct to the datbase
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
connect_db();

$development_region=getAllDevelopmentRegion();
//prepare the sql to get a page record depending on pageid
$sql  = " SELECT * FROM tbl_volunteers WHERE volunteer_id = '$pageid' ";
//execute the query
$res = mysql_query($sql);// or die(mysql_error());
//since only a single record is obtained:
$row = mysql_fetch_assoc($res);

/*echo '<pre>';

print_r($row);
echo '</pre>';*/

/*mysql_close($conxn);*/
$dob  = $row['date_of_birth'];
$dob = explode('-', $dob);
$dob = $dob[1] . '/' . $dob[2] . '/' . $dob[0];

$fdate  = $row['voluntarism_from'];
$fdate = explode('-', $fdate);
$fdate = $fdate[1] . '/' . $fdate[2] . '/' . $fdate[0];

$tdate  = $row['voluntarism_to'];
$tdate = explode('-', $tdate);
$tdate = $tdate[1] . '/' . $tdate[2] . '/' . $tdate[0];

$pdate  = $row['posted_date'];
$pdate = explode('-', $pdate);
$pdate = $pdate[1] . '/' . $pdate[2] . '/' . $pdate[0];

$udate  = $row['updated_date'];
$udate = explode('-', $udate);
$udate = $udate[1] . '/' . $udate[2] . '/' . $udate[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>

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
<form action="process_edit/process_edit_reg_vol_profile.php" method="post" enctype="multipart/form-data" name="form1" class="bordersize">
 <input type="hidden" name="page" id="page" value="view_all_profile"> 
<fieldset>
    <legend class="toptitle">Edit Profile</legend>
    <table width="98%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <th width="30%" align="left" scope="row">First Name </th>
        <td width="70%" align="left">        <input type="text" name="fname" id="fname" class="formfprall" value="<?php echo $row['first_name']; ?>"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Middle Name</th>
        <td align="left">        <input type="text" name="sname" id="sname" class="formfprall" value="<?php echo $row['middle_name']; ?>"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Last Name</th>
        <td align="left">        <input type="text" name="lname" id="lname" class="formfprall" value="<?php echo $row['last_name']; ?>"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Date of Birth</th>
        <td align="left">        <input type="date" name="dob" id="datepicker" class="formfprall" value="<?php echo $dob; ?>"></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Gender</th>
        <td align="left">          <select id="gender" class="boxforcheek"  name="gender" class="field select addr" tabindex="8" value="<?php echo $row['gender']; ?>">
            
            <option value="0" <?php echo ($row['gender'] == 0) ? ' selected="selected" ' : '';?> >Female</option>
            <option value="1" <?php echo ($row['gender'] == 1) ? ' selected="selected" ' : '';?>>Male</option>
            <option value="2" <?php echo ($row['gender'] == 2) ? ' selected="selected" ' : '';?>>Others</option>


</select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Qualification</th>
        <td align="left">        <input type="text" name="quli" id="quli" class="formfprall" value="<?php echo $row['qualification']; ?>"></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Apply for (Name of Regional Secretariat)</th>
        <td align="left"><label for="aregion">
          <select name="apply" id="apply" class="boxforcheek"> 
         
            <?php
              foreach ($development_region as $dev_row) {
                  if($dev_row['code']==$row['apply_for'])
                    $sel="selected";
                  else
                     $sel=""; 
                ?>
                <option value="<?php echo $dev_row['code']?>" <?php echo $sel;?> ><?php echo $dev_row['name']?></option>    
             <?php }?>
          </select>
        </label></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Caste</th>
        <td align="left">          <select name="caste" id="caste" class="boxforcheek" value="<?php echo $row['vol_caste']; ?>">
      
            <option value="0" <?php echo ($row['vol_caste'] == 0) ? ' selected="selected" ' : '';?> >Dalit</option>
            <option value="1" <?php echo ($row['vol_caste'] == 1) ? ' selected="selected" ' : '';?> >Janajati/Aadibasi </option>
            <option value="2" <?php echo ($row['vol_caste'] == 2) ? ' selected="selected" ' : '';?> >Tharu</option>
            <option value="3" <?php echo ($row['vol_caste'] == 3) ? ' selected="selected" ' : '';?> >Muslim</option>
            <option value="4" <?php echo ($row['vol_caste'] == 4) ? ' selected="selected" ' : '';?> >Braman/Chetri</option>
            <option value="5" <?php echo ($row['vol_caste'] == 5) ? ' selected="selected" ' : '';?> >Others</option>
            
            
        </select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Occupation </th>
        <td align="left">          <select name="occ" id="occ" class="boxforcheek" value="<?php echo $row['occupation']; ?>">
           
            <option value="0" <?php echo ($row['occupation'] == 0) ? ' selected="selected" ' : '';?> >Student</option>
            <option value="1" <?php echo ($row['occupation'] == 1) ? ' selected="selected" ' : '';?> >Job holder</option>
            <option value="2" <?php echo ($row['occupation'] == 2) ? ' selected="selected" ' : '';?> >Others</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Temporary Address</th>
        <td align="left">        <input type="text" name="tadd" id="tadd" class="formfprall" value="<?php echo $row['temporary_address']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Permanent Address</th>
        <td align="left">        <input type="text" name="padd" id="padd" class="formfprall" value="<?php echo $row['permanent_address']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">City</th>
        <td align="left">        <input type="text" name="city" id="city" class="formfprall" value="<?php echo $row['city']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Development Region</th>
        <td align="left">        <input type="text" name="dregion" id="dregion" class="formfprall" value="<?php echo $row['development_region']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Postal Code</th>
        <td align="left">        <input type="text" name="pcode" id="pcode" class="formfprall" value="<?php echo $row['postal_code']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Country</th>
        <td align="left">        <input type="text" name="country" id="country" class="formfprall" value="<?php echo $row['country']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Email</th>
        <td align="left">        <input type="text" name="email" id="email" class="formfprall" value="<?php echo $row['email']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Contact Number </th>
        <td align="left">        <input type="text" name="cnum" id="cnum" class="formfprall" value="<?php echo $row['contact_number']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Alternative Contact Number</th>
        <td align="left">        <input type="text" name="acontnum" id="acontnum" class="formfprall" value="<?php echo $row['alternative_contact_number']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Volunteer level</th>
        <td align="left"><select name="level" id="level" class="boxforcheek" value="<?php echo $row['volunteer_level']; ?>">
        
        		
                <option value="0" <?php echo ($row['volunteer_level'] == 0) ? ' selected="selected" ' : '';?> >Regular Volunteer</option>
                <option value="1" <?php echo ($row['volunteer_level'] == 1) ? ' selected="selected" ' : '';?> >Senior Volunteer </option>
                <option value="2" <?php echo ($row['volunteer_level'] == 2) ? ' selected="selected" ' : '';?> >Volunteer Core Group Member</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Status at COCAP</th>
        <td align="left"><select name="satcocap" id="satcocap" class="boxforcheek" value="<?php echo $row['status_at_cocap']; ?>">
        
                <option value="0" <?php echo ($row['status_at_cocap'] == 0) ? ' selected="selected" ' : '';?> >Volunteer Core Group Coordinator</option>
                <option value="1" <?php echo ($row['status_at_cocap'] == 1) ? ' selected="selected" ' : '';?> >Volunteer Core Group Member</option>
        </select></td>
      </tr>
      <tr>
        <th height="28" colspan="2" align="left" valign="middle" scope="row">Working Experiance</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="formcontforedit textck" name="wexp" id="wexp" cols="45" rows="5"><?php echo $row['working_exp']; ?></textarea>  </th>
      </tr>
      <tr>
        <th height="28" colspan="2" align="left" valign="middle" scope="row">Why are you intrested to work with COCAP</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="formcontforedit textck" name="why" id="why" cols="45" rows="5" ><?php echo $row['why_interested']; ?></textarea></th>
      </tr>
      
      <tr>
        <th align="left" valign="middle" scope="row">Which Section Would You Like to Work 	<?php $str = $row['which_section'];
		$which = explode(',',$str);?></th>
        <td align="left"><p>
          
            <input type="checkbox" name="CheckboxGroup1_" value="0" id="CheckboxGroup1_0" <?php echo in_array('0', $which) ? ' checked="checked" ' : '';?>  />
HR Education
            </label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="1" id="CheckboxGroup1_1" <?php echo in_array('1', $which) ? ' checked="checked" ' : '';?> /></label>
          HR Monitoring<br />
          <label>
            <input type="checkbox" name="which[]" value="2" id="CheckboxGroup1_2" <?php echo in_array('2', $which) ? ' checked="checked" ' : '';?> />
            Migrant Workers Right</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="3" id="CheckboxGroup1_3" <?php echo in_array('3', $which) ? ' checked="checked" ' : '';?> />
            Youth Unemployment</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="4" id="CheckboxGroup1_4" <?php echo in_array('4', $which) ? ' checked="checked" ' : '';?> /></label>
          Capacity Building<br />
          <label>
            <input type="checkbox" name="which[]" value="5" id="CheckboxGroup1_5" <?php echo in_array('5', $which) ? ' checked="checked" ' : '';?> />
            Admin and Finance</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="6" id="CheckboxGroup1_6" <?php echo in_array('6', $which) ? ' checked="checked" ' : '';?> />
            Social Protection/ Security</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="7" id="CheckboxGroup1_7" <?php echo in_array('7', $which) ? ' checked="checked" ' : '';?> />
            Good Governance</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="8" id="CheckboxGroup1_8" <?php echo in_array('8', $which) ? ' checked="checked" ' : '';?> />
            Non-Violent Conflict Transformation</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="9" id="CheckboxGroup1_9" <?php echo in_array('9', $which) ? ' checked="checked" ' : '';?> />
            Others</label>
          <label for="section"><br />
  <br />
          </label>
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">How Will You Contribute	
		<?php $str = $row['how_will_contribute'];
		$how = explode(',',$str);?></th>
        <td align="left"><p>
          <label value="">
            <input type="checkbox" name="how[]" value="0" id="CheckboxGroup2_0" <?php echo in_array('0', $how) ? ' checked="checked" ' : '';?> />
            Research</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="1" id="CheckboxGroup2_1" <?php echo in_array('1', $how) ? ' checked="checked" ' : '';?> />
            Campaigns</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="2" id="CheckboxGroup2_2" <?php echo in_array('2', $how) ? ' checked="checked" ' : '';?> />
            Documentation</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="3" id="CheckboxGroup2_3" <?php echo in_array('3', $how) ? ' checked="checked" ' : '';?> />
            Organizing training</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="4" id="CheckboxGroup2_4"  <?php echo in_array('4', $how) ? ' checked="checked" ' : '';?>/>
            Member support</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="5" id="CheckboxGroup2_5" <?php echo in_array('5', $how) ? ' checked="checked" ' : '';?> />
            ICT</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="6" id="CheckboxGroup2_6" <?php echo in_array('6', $how) ? ' checked="checked" ' : '';?> />
            Media Monitoring</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="7" id="CheckboxGroup2_7" <?php echo in_array('7', $how) ? ' checked="checked" ' : '';?> />
            Others</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Specify the Day <?php $str = $row['specify_the_day'];
		$day = explode(',',$str);?></th>
        <td align="left"><p>
         
            <input type="checkbox" name="day[]" value="0" id="CheckboxGroup3_0" <?php echo in_array('0', $day) ? ' checked="checked" ' : '';?> />
            Sunday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="1" id="CheckboxGroup3_1" <?php echo in_array('1', $day) ? ' checked="checked" ' : '';?> />
            Monday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="2" id="CheckboxGroup3_2" <?php echo in_array('2', $day) ? ' checked="checked" ' : '';?> />
            Tuesday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="3" id="CheckboxGroup3_3" <?php echo in_array('3', $day) ? ' checked="checked" ' : '';?> />
            Wednesday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="4" id="CheckboxGroup3_4" <?php echo in_array('4', $day) ? ' checked="checked" ' : '';?> />
            Thursday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="5" id="CheckboxGroup3_5" <?php echo in_array('5', $day) ? ' checked="checked" ' : '';?> />
            Friday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="6" id="CheckboxGroup3_6" <?php echo in_array('6', $day) ? ' checked="checked" ' : '';?> /></label>
          <label for="day[]2">Whole Week </label>
<br />
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row" >Banner Image</th>
        <td align="left"><input type="file" name="banner" id="banner" class="boxforcheek" />
         <img src="../uploads/<?php echo $row['banner_image'] ;?>"  width="75px" height="75px"/>
         <input type="hidden" id="id" name="banner_id" value="<?php echo $row['banner_image']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row" > PP Image</th>
        <td align="left"> <input type="file" name="ppimage" id="ppimage" class="boxforcheek">
        <img src="../uploads/<?php echo $row['pp_image'] ;?>"  width="75px" height="75px"/>
        <input type="hidden" id="id" name="ppimage_id" value="<?php echo $row['pp_image']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row"><p>Voluntarism From </p></th>
        <td align="left"><input type="date" name="fdate" id="datepicker1" class="formfprall" value="<?php echo $fdate; ?>" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row"><p>Voluntarism To </p></th>
        <td align="left"><input type="date" name="tdate" id="datepicker2" class="formfprall" value="<?php echo $tdate; ?>"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Posted Date </th>
        <td align="left"><input type="date" name="pdate" id="datepicker3" class="formfprall" value="<?php echo $pdate; ?>" disabled="disabled" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Update Date </th>
        <td align="left"><input type="date" name="udate" id="datepicker4" class="formfprall" value="<?php echo $udate; ?>"/></td>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">Volunteer Key Words</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="formcontforedit textck" name="volkeywords" id="volkeywords" cols="45" rows="5"  ><?php echo $row['volunteer_key_words']; ?></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">Volunteer Meta Description</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="formcontforedit textck" name="volmetadesc" id="volmetadesc" cols="45" rows="5" ><?php echo $row['volunteer_meta_description']; ?></textarea></th>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="cmdupdate" id="cmdupdate" class="boxforcheek" value="Update">
          <input type="hidden" id="id" name="pid" value="<?php echo $row['volunteer_id']; ?>" />
        
        <input type="submit" name="cmdreset" id="cmdreset" class="boxforcheek" value="Reset"></th>
      </tr>
    </table>

  </fieldset>
</form>
</body>
</html>


