<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add the Profile</title>

<link rel="stylesheet" type="text/css" href="../style.css"/>
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>

<!--date picker -->
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
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

$(document).ready(function (){
  $("#form1").submit(function(e){
      var submit_flag = true;
      if($("#fname").val()==""){
        alert("Please enter first name");
        submit_flag = false;
      }

      if($("#lname").val()=="" && submit_flag){
        alert("Please enter last name");
        submit_flag = false;
      }
      

      if(submit_flag)
        return true;
      else {
        e.preventDefault();
        return false;
      }

      console.log("test");
  });
});
</script>

<!--date picker ends -->


</head>
<?php 
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
$development_region=getAllDevelopmentRegion();
?>
<body>
<form action="process/process_add_reg_vol_profile.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="bordersize">
  <fieldset>
    <legend class="toptitle">Add New Profile</legend>
    <table width="98%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <th width="30%" align="left" scope="row">First Name </th>
        <td width="70%" align="left">        <input type="text" name="fname" id="fname" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Middle Name</th>
        <td align="left"><input type="text" name="sname" id="sname" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Last Name</th>
        <td align="left">        <input type="text" name="lname" id="lname" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Date of Birth</th>
        <td align="left">        <input type="text" name="dob" id="datepicker"   class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Gender</th>
        <td align="left">          <select id="gender" class="boxforcheek"  name="gender" class="field select addr" tabindex="8">
            <option value="0" selected="selected">--Select Gender--</option>
            <option value="0" >Female</option>
            <option value="1" >Male</option>
            <option value="2" >Others</option>


</select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Qualification</th>
        <td align="left">        <input type="text" name="quli" id="quli" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Apply for (Name of Regional Secretariat)</th>
        <td align="left"><label for="aregion">
          <select name="apply" id="apply" class="boxforcheek">
          <option value="" selected="selected">--Select Development Region--</option>
            <?php 
              foreach ($development_region as $row) {?>
                <option value="<?php echo $row['code']?>" ><?php echo $row['name']?></option>    
             <?php }?>
          </select>
        </label></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Caste</th>
        <td align="left">          <select name="caste" id="caste" class="boxforcheek">
            <option value="" selected="selected">--Select Cast--</option>
            <option value="0" >Dalit</option>
            <option value="1" >Janajati/Aadibasi </option>
            <option value="2" >Tharu</option>
            <option value="3" >Muslim</option>
            <option value="4" >Braman/Chetri</option>
            <option value="5" >Others</option>
            
            
        </select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Occupation </th>
        <td align="left">          <select name="occ" id="occ" class="boxforcheek">
            <option value="" selected="selected">--Select Occupation--</option>
            <option value="0" >student</option>
            <option value="1" >Job holder</option>
            <option value="2" >Others</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Temporary Address</th>
        <td align="left">        <input type="text" name="tadd" id="tadd" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Permanent Address</th>
        <td align="left">        <input type="text" name="padd" id="padd" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">City</th>
        <td align="left">        <input type="text" name="city" id="city" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Development Region</th>
        <td align="left">        <input type="text" name="dregion" id="dregion" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Postal Code</th>
        <td align="left">        <input type="text" name="pcode" id="pcode" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Country</th>
        <td align="left">        <input type="text" name="country" id="country" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Email</th>
        <td align="left">        <input type="text" name="email" id="email" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Contact Number </th>
        <td align="left">        <input type="text" name="cnum" id="cnum" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Alternative Contact Number</th>
        <td align="left">        <input type="text" name="acontnum" id="acontnum" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Volunteer level</th>
        <td align="left">
          <select name="level" id="level" class="boxforcheek">
           		<option value="" selected="selected">--Select Volunteer Level--</option>
              <option value="0" >Regular Volunteer</option>
              <option value="1" >Senior Volunteer </option>
              <option value="2" >Volunteer Core Group Member</option>
        </select>
        </td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Status at COCAP</th>
        <td align="left"><select name="satcocap" id="satcocap" class="boxforcheek">
        <option value="" selected="selected">--Select Volunteer Status at COCAP--</option>
                <option value="0" >Volunteer Core Group Coordinator</option>
                <option value="1" >Volunteer Core Group Member</option>
        </select></td>
      </tr>
      <tr>
        <th height="28" colspan="2" align="left" valign="middle" scope="row">Working Experiance</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="ckeditor" name="wexp" id="wexp" cols="45" rows="5" class="formforshort"></textarea></th>
      </tr>
      <tr>
        <th height="28" colspan="2" align="left" valign="middle" scope="row">Why are you intrested to work with COCAP</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="ckeditor" name="why" id="why" cols="45" rows="5" class="formforshort"></textarea></th>
      </tr>
      
      <tr>
        <th align="left" valign="middle" scope="row">Which Section Would You Like to Work</th>
        <td align="left"><p>
          <label>
            <input type="checkbox" name="which[]" value="0" id="CheckboxGroup1_0" />
            HR Education</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="1" id="CheckboxGroup1_1" /></label>
          HR Monitoring<br />
          <label>
            <input type="checkbox" name="which[]" value="2" id="CheckboxGroup1_2" />
            Migrant Workers Right</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="3" id="CheckboxGroup1_3" />
            Youth Unemployment</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="4" id="CheckboxGroup1_4" /></label>
          Capacity Building<br />
          <label>
            <input type="checkbox" name="which[]" value="5" id="CheckboxGroup1_5" />
            Admin and Finance</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="6" id="CheckboxGroup1_6" />
            Social Protection/ Security</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="7" id="CheckboxGroup1_7" />
            Good Governance</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="8" id="CheckboxGroup1_8" />
            Non-Violent Conflict Transformation</label>
          <br />
          <label>
            <input type="checkbox" name="which[]" value="9" id="CheckboxGroup1_9" />
            Others</label>
          <label for="section"><br />
  <br />
          </label>
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">How Will You Contribute</th>
        <td align="left"><p>
          <label>
            <input type="checkbox" name="how[]" value="0" id="CheckboxGroup2_0" />
            Research</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="1" id="CheckboxGroup2_1" />
            Campaigns</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="2" id="CheckboxGroup2_2" />
            Documentation</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="3" id="CheckboxGroup2_3" />
            Organizing training</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="4" id="CheckboxGroup2_4" />
            Member support</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="5" id="CheckboxGroup2_5" />
            ICT</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="6" id="CheckboxGroup2_6" />
            Media Monitoring</label>
          <br />
          <label>
            <input type="checkbox" name="how[]" value="7" id="CheckboxGroup2_7" />
            Others</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Specify the Day</th>
        <td align="left"><p>
          <label>
            <input type="checkbox" name="day[]" value="0" id="CheckboxGroup3_0" />
            Sunday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="1" id="CheckboxGroup3_1" />
            Monday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="2" id="CheckboxGroup3_2" />
            Tuesday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="3" id="CheckboxGroup3_3" />
            Wednesday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="4" id="CheckboxGroup3_4" />
            Thursday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="5" id="CheckboxGroup3_5" />
            Friday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="6" id="CheckboxGroup3_6" /></label>
          <label for="day[]2">Whole Week </label>
<br />
        </p></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row" >Banner Image</th>
        <td align="left"><input type="file" name="banner" id="banner" class="boxforcheek" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row" > PP Image</th>
        <td align="left"> <input type="file" name="ppimage" id="ppimage" class="boxforcheek"></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row"><p>Voluntarism From </p></th>
        <td align="left"><input type="date" name="fdate" id="datepicker1" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row"><p>Voluntarism To </p></th>
        <td align="left"><input type="date" name="tdate" id="datepicker2" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Posted Date </th>
        <td align="left"><input type="date" name="pdate" id="datepicker3" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row">Update Date </th>
        <td align="left"><input type="date" name="udate" id="datepicker4" class="formfprall"/></td>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">Volunteer Key Words</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="ckeditor" name="volkeywords" id="volkeywords" cols="45" rows="5" class="formforshort"></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">Volunteer Meta Description</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="middle" scope="row">        <textarea class="ckeditor" name="volmetadesc" id="volmetadesc" cols="45" rows="5" class="formforshort"></textarea></th>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="cmdupdate" id="cmdupdate" class="boxforcheek" value="Submit">
        <input type="submit" name="cmdreset" id="cmdreset" class="boxforcheek" value="Cancel"></th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>


