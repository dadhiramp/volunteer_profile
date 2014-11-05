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

$(document).ready(function (){
  $("#form1").submit(function(e){
      var submit_flag = true;
      if($("#fname").val()==""){
        alert("Please enter first name");
        submit_flag = false;
      }

      if($("#dob").val()=="" && submit_flag){
        alert("Please select date of birth");
        submit_flag = false;
      }
	  
	  if($("#gender").val()=="" && submit_flag){
        alert("Please select gender");
        submit_flag = false;
      }
	  
	  if($("#edu").val()=="" && submit_flag){
        alert("Please select your qualification");
        submit_flag = false;
      }
	  
	  if($("#applyingfor").val()=="" && submit_flag){
        alert("Please select the regional secretariat");
        submit_flag = false;
      }
	  
	  if($("#address").val()=="" && submit_flag){
        alert("Please enter address");
        submit_flag = false;
      }
	  
	   if($("#icontact").val()=="" && submit_flag){
        alert("Please enter your contatct number");
        submit_flag = false;
      }
	  
	  if($("#email").val()=="" && submit_flag){
        alert("Please enter your email");
        submit_flag = false;
      }
	  
	  if($("#icountry").val()=="" && submit_flag){
        alert("Please enter country name");
        submit_flag = false;
      }
	  
	  if($("#cname").val()=="" && submit_flag){
        alert("Please enter your collage name");
        submit_flag = false;
      }
	  
	   if($("#caddress").val()=="" && submit_flag){
        alert("Please enter your collage address");
        submit_flag = false;
      }
	  
	  if($("#ccpname").val()=="" && submit_flag){
        alert("Please enter the name of your collage coordinator");
        submit_flag = false;
      }
	  
	  if($("#ccpnumber").val()=="" && submit_flag){
        alert("Please enter the contact number of your collage coordinator");
        submit_flag = false;
      }
	  
	  if($("#why").val()=="" && submit_flag){
        alert("Why did u choose COCAP as your field ? Please give specific reasons ");
        submit_flag = false;
      }
	  
	   if($("#expect").val()=="" && submit_flag){
        alert("Please write your expectation from COCAP ? ");
        submit_flag = false;
      }
	  
	  if($("#inv").val()=="" && submit_flag){
        alert("Please select in which area do you get involve? ");
        submit_flag = false;
      }
	  
	  if($("#day").val()=="" && submit_flag){
        alert("Please select which days you are wondering to work with COCAP ?");
        submit_flag = false;
      }
	  
	  if($("#ppimage").val()=="" && submit_flag){
        alert("Please select pp size image");
        submit_flag = false;
      }
	  
	  if($("#datepicker1").val()=="" && submit_flag){
        alert("Please select data poste date");
        submit_flag = false;
      }
	  
	  if($("#datepicker4").val()=="" && submit_flag){
        alert("Please select enrollment date");
        submit_flag = false;
      }
	  
	  if($("#ikeyw").val()=="" && submit_flag){
        alert("Please write intern key word");
        submit_flag = false;
      }
	  
	  if($("#imetadis").val()=="" && submit_flag){
        alert("Please write intern meta discription");
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
<form action="process/process_add_intern_profile.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="bordersize">
<input type="hidden" name="page" id="page" value="list_of_intern_profile"> 
<fieldset>
    <legend class="toptitle">Add Intern Profile</legend>
    <table width="100%" border="0" align="left" dir="ltr">
      <!--<tr>
        <th width="26%" align="left" scope="row">Apply Date </th>
        <td width="74%"><input type="date" name="adate" id="datepicker" class="formfprall" /></td>
      </tr>-->
      <tr>
        <th width="26%" align="left" scope="row">Full Name</th>
        <td width="74%"><input type="text" name="fname" id="fname" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Date of Birth</th>
        <td><input type="date" name="dob" id="datepicker" class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" scope="row"><p>Gender</p></th>
        <td><select name="gender" id="gender" class="boxforcheek">
         <option value="" selected="selected">--Select Gender--</option>
          <option value="0">Female</option>
          <option value="1">Male</option>
          <option value="2">Others</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Education</th>
        <td><input type="text" name="edu" id="edu" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Applying for</th>
        <td><select name="applyingfor" id="applyingfor" class="boxforcheek">
         <option value="" selected="selected">--Select Regional Secretariat--</option>
        <?php 
              foreach ($development_region as $row) {?>
                <option value="<?php echo $row['code']?>" ><?php echo $row['name']?></option>    
        <?php }?>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Address</th>
        <td><input type="text" name="address" id="address"  class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Contact #</th>
        <td><input type="text" name="icontact" id="icontact"  class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Email Address</th>
        <td><input type="text" name="email" id="email" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Intern Country</th>
        <td><input type="text" name="icountry" id="icountry" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Name</th>
        <td><input type="text" name="cname" id="cname" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Address</th>
        <td><input type="text" name="caddress" id="caddress" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Contact Person Name</th>
        <td><input type="text" name="ccpname" id="ccpname" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Collage Contact person #</th>
        <td><input type="text" name="ccpnumber" id="ccpnumber" class="formfprall" /></td>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Why did u choose COCAP as your field ? Give specific reasons</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"> 
        <textarea class="formcont textck"  placeholder="Why did u choose COCAP as your field ? Please give specific reasons"name="why" id="why" cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Your expectation from COCAP ? </th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="formcont textck" placeholder="Please write your our expectation from COCAP" name="expect" id="expect"  cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">In which area do you get involve? </th>
        <td><p>
          <label>
            <input type="checkbox" name="inv[]" value="0" id="inv_0" /> 
            </label>
           Research<br />
          <label>
            <input type="checkbox" name="inv[]" value="1" id="inv_1" />
             Campaigns</label>
          <br />
          <label>
            <input type="checkbox" name="inv[]" value="2" id="inv_2" /></label>
           Documentation<br />
          <label>
            <input type="checkbox" name="inv[]" value="3" id="inv_3" /></label>
           Publication<br />
          <label>
            <input type="checkbox" name="inv[]" value="4" id="inv_4" />
             Organizing trainingx</label>
          <br />
          <label>
            <input type="checkbox" name="inv[]" value="5" id="inv_5" /></label>
           Member support<br />
          <label>
            <input type="checkbox" name="inv[]" value="6" id="inv_6" /> 
            </label>
           ICT<br />
          <label>
            <input type="checkbox" name="inv[]" value="7" id="inv_7" /></label>
           Media Monitoring<br />
          <label>
            <input type="checkbox" name="inv[]" value="8" id="inv_8" /> 
            </label>
           Finance/Admin<br />
          <label>
            <input type="checkbox" name="inv[]" value="9" id="inv_9" /></label>
           Others<br />
          <br />
        </p></td>
      </tr>
      <tr>
        <th align="left" scope="row">Which days you are wondering to work with COCAP ? </th>
        <td><p>
          <label>
            <input type="checkbox" name="day[]" value="0" id="day_0" /></label>
          <label for="Field17"> Sunday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="1" id="day_1" /></label>
           Monday<br />
          <label>
            <input type="checkbox" name="day[]" value="2" id="day_2" /></label>
           Tuesday<br />
          <label>
            <input type="checkbox" name="day[]" value="3" id="day_3" /></label>
           Wednesday<br />
          <label>
            <input type="checkbox" name="day[]" value="4" id="day_4" /></label>
          <label for="Field14"> Thursday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="5" id="day_5" />  
            </label>
          <label for="Field15"> Friday</label>
          <br />
          <label>
            <input type="checkbox" name="day[]" value="6" id="day_6" /></label>
           All working days<br />
          <br />
        </p></td>
      </tr>
      <tr>
        <th align="left" scope="row">PP Image</th>
        <td><input type="file" name="ppimage" id="ppimage" /></td>
      </tr>
      <!--<tr>
        <th align="left" scope="row">Posted Date</th>
        <td><input type="date" name="pdate" id="datepicker1" class="formfprall" /></td>
      </tr>-->
      <tr>
        <th align="left" scope="row">Updated Date</th>
        <td><input type="date" name="udate" id="datepicker2" class="formfprall" disabled="disabled"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Internship From</th>
        <td><input type="date" name="ifrom" id="datepicker4" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Internship To</th>
        <td><input type="date" name="ito" id="datepicker3" class="formfprall"  disabled="disabled"/></td>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Intern Key Word</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="formcont textck" placeholder="Please Intern key word" name="ikeyw" id="ikeyw" class="formforint" cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row">Intern Meta Discription</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="formcont textck" placeholder="Please write intern meta discription" name="imetadis" id="imetadis" class="formforint" cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Submit" /></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset" /></td>
      </tr>
    </table>

  </fieldset>
</form>
</body>
</html>