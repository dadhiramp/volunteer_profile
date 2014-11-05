<?php
//load the pageid from the URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';
//conenct to the datbase
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
connect_db();
$getvol=getAllInterns();
$getusr=getAllusers();

//prepare the sql to get a page record depending on pageid
$sql  = " SELECT 
    tt.training_id,
    tt.name_of_training,
    tt.interns_id,
    ti.intern_name,
    tt.user_id,
    tt.posted_date,
    tt.updated_date
FROM tbl_trainings tt 
join tbl_interns ti on(ti.interns_id=tt.interns_id)
WHERE tt.training_id = '$pageid' ";
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
<form name="form1" method="post" action="process_edit/process_edit_int_trainings.php" class="bordersize">
<input type="hidden" name="page" id="page" value="list_of_all_intern_training">  

<fieldset>
    <legend class="toptitle"> Edit Training</legend>
    <table width="42%" border="0" cellpadding="0">
    
    <tr>
        <th width="33%" align="left" scope="row">Volunteer ID</th>
        <td><?php echo $row['interns_id']?></td>
    </tr>

    <tr>
        <th width="33%" align="left" scope="row">Volunteer Name</th>
        <td><?php echo $row['intern_name']?></td>
    </tr>

    <tr>
        <th>&nbsp;</th>
       
    </tr> 
     
      <!--<tr>
        <th width="33%" align="left" scope="row">Choose Volunteer ID</th>
        <td><select name="chvolid" id="chvolid" class="boxforcont">
        
		<?php 
		foreach ($getvol as $key=>$value){ 
		
		?>
          <option value="<?php echo $value['interns_id'];  ?>"><?php echo $value['interns_id']; ?></option>
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
        <th colspan="2" align="left" scope="row">Name of trainings including organizer, place and date</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="formcontforedit textck" name="acont" id="acont"  placeholder="Write like: Capacity development training on report writing organized by COCAP from August 14 -20, 2014" cols="45" rows="5"><?php echo $row['name_of_training']; ?></textarea></th>
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
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Update">   <input type="hidden" id="id" name="pid" value="<?php echo $row['training_id']; ?>"</th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset"></td>
      </tr>
    </table>
  
  </fieldset>
</form>
</body>
</html>

