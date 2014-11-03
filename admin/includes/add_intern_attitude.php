<?php
session_start();
$uid = $_SESSION['user_id'];
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');

$chvolid=getAllInterns();
$chuser=getAllusers();

/*echo '<pre>';
print_r($chvolid);

echo '</pre>';*/

?> 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

</script>

<!--date picker ends -->
</head>

<body>
<form name="form1" method="post" action="process/process_add_int_attitude.php" class="bordersize">
  <fieldset>
    <legend class="toptitle">Add New Attitude </legend>
    <table width="42%" border="0" cellpadding="0">
     
      <tr>
        <th width="33%" align="left" scope="row">Choose Intern ID</th>
        <td><select name="chvolid" id="chvolid" class="boxforcont">
        
		<?php 
		foreach ($chvolid as $key=>$value){ 
		
		?>
          <option value="<?php echo $value['interns_id'];  ?>"><?php echo $value['interns_id']; ?></option>
         <?php
		 }
		
		?></select></td>
       
       
      </tr>
     
     
      <!--<tr>
        <th width="33%" align="left" scope="row">Username</th>
        <td width="67%"><select name="uid" id="uid" class="boxforcont">
        <?php 
		foreach ($chuser as $key=>$value){
		
		?>
          <option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_name']; ?></option>
          
          <?php
		}
		 
		  ?>
        </select></td>
      </tr>-->
      <tr>
        <th colspan="2" align="left" scope="row">Volunteer's attitude, behaviors and secret things </th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="ckeditor" name="acont" id="acont" class="formcont" placeholder="Write like: #" cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">Attitude Grade</th>
        <td><select name="agrade" id="agrade" class="boxforcont">
          <option value="0">Good</option>
          <option value="0">Best</option>
          <option value="1">Better </option>
          <option value="2">Restricted</option>
          <option value="3">More than 2 times warned </option>
          <option value="4">Warned </option>
          <option value="5">Required to warn </option>
          <option value="6">Normal</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Posted date</th>
        <td><input type="date" name="pdate" id="datepicker" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Updated date</th>
        <td><input type="date" name="udate" id="datepicker1" class="formfprall"></td>
      </tr>
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Submit"></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>

