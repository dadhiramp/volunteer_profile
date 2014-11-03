<?php
//load the pageid from the URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';
//conenct to the datbase
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
connect_db();
$getvol=getAllvolunteers();
$getusr=getAllusers();

//prepare the sql to get a page record depending on pageid
$sql  = " SELECT * FROM  tbl_behav WHERE behav_id = '$pageid' ";
//execute the query
$res = mysql_query($sql);// or die(mysql_error());
//since only a single record is obtained:
$row = mysql_fetch_assoc($res);


$pdate  = $row['posted_date'];
$pdate = explode('-', $pdate);
$pdate = $pdate[1] . '/' . $pdate[2] . '/' . $pdate[0];

$udate  = $row['updated_date'];
$udate = explode('-', $udate);
$udate = $udate[1] . '/' . $udate[2] . '/' . $udate[0];


/*echo '<pre>';

print_r($row);
echo '</pre>';*/

/*mysql_close($conxn);*/
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
<form name="form1" method="post" action="process_edit/process_edit_vol_attitude.php" class="bordersize">
  <fieldset>
    <legend class="toptitle">Edit Attitude </legend>
    <table width="42%" border="0" cellpadding="0">
     
      <!--<tr>
        <th width="33%" align="left" scope="row">Choose Volunteer ID</th>
        <td><select name="chvolid" id="chvolid" class="boxforcont">
        
		<?php 
		foreach ($getvol as $key=>$value){ 
		
		?>
          <option value="<?php echo $value['volunteer_id'];  ?>"><?php echo $value['volunteer_id']; ?></option>
         <?php
		 }
		
		?></select></td>
       
       
      </tr>-->
     
     
      <!--<tr>
        <th width="33%" align="left" scope="row">Username</th>
        <td width="67%"><select name="uid" id="uid" class="boxforcont">
        <?php 
		foreach ($getusr as $key=>$value){
		
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
        <th colspan="2" align="left" scope="row"><textarea class="ckeditor" name="acont" id="acont" class="formcont" placeholder="Write like: #" cols="45" rows="5"><?php echo $row['situation_or_cond']; ?></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">Attitude Grade</th>
        <td><select name="agrade" id="agrade" class="boxforcont">
          <option value="0" <?php echo ($row['grade'] == 0) ? ' selected="selected" ' : '';?> >Good</option>
          <option value="1" <?php echo ($row['grade'] == 1) ? ' selected="selected" ' : '';?>>Best</option>
          <option value="2" <?php echo ($row['grade'] == 2) ? ' selected="selected" ' : '';?>>Better </option>
          <option value="3" <?php echo ($row['grade'] == 3) ? ' selected="selected" ' : '';?>>Restricted</option>
          <option value="4" <?php echo ($row['grade'] == 4) ? ' selected="selected" ' : '';?>>More than 2 times warned </option>
          <option value="5" <?php echo ($row['grade'] == 5) ? ' selected="selected" ' : '';?>>Warned </option>
          <option value="6" <?php echo ($row['grade'] == 6) ? ' selected="selected" ' : '';?>>Required to warn </option>
          <option value="7" <?php echo ($row['grade'] == 7) ? ' selected="selected" ' : '';?>>Normal</option>
          
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Posted date</th>
        <td><input type="date" name="pdate" id="datepicker" class="formfprall" value="<?php echo $pdate; ?>" disabled="disabled"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Updated date</th>
        <td><input type="date" name="udate" id="datepicker1" class="formfprall" value="<?php echo $udate; ?>"></td>
      </tr>
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Update"> <input type="hidden" id="id" name="id" value="<?php echo $row['behav_id']; ?>" /></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Cancel"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>

