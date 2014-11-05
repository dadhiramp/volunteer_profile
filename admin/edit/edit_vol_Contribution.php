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
$sql  = " SELECT 
    tc.contributions_id,
    tc.area_of_contribution,
    tc.volunteer_id,
    tv.first_name,
    tv.middle_name,
    tv.last_name,
    tc.interns_id,
    tc.user_id,
    tc.posted_date,
    tc.updated_date
FROM tbl_contributions tc 
join tbl_volunteers tv on(tv.volunteer_id=tc.volunteer_id)
WHERE tc.contributions_id = '$pageid' ";
//execute the query
$res = mysql_query($sql);// or die(mysql_error());
//since only a single record is obtained:
$row = mysql_fetch_assoc($res);

/*echo '<pre>';

print_r($row);
echo '</pre>';*/

/*mysql_close($conxn);*/

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
<form name="form1" method="post" action="process_edit/process_edit_vol_Contribution.php" class="bordersize">
 <input type="hidden" name="page" id="page" value="view_all_vol_contribution"> 
 <fieldset>
    <legend class="toptitle"> Edit Contribution</legend>
    <table width="42%" border="0" cellpadding="0">
     
    <tr>
        <th width="33%" align="left" scope="row">Volunteer ID</th>
        <td><?php echo $row['volunteer_id']?></td>
    </tr>

    <tr>
        <th width="33%" align="left" scope="row">Volunteer Name</th>
        <td><?php if(trim($row['middle_name']!=''))
                      echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];
                  else
                      echo $row['first_name'].' '.$row['last_name'];    
            ?>
          </td>
    </tr>

    <tr>
        <th>&nbsp;</th>
       
    </tr>
       
   <!--<tr>
        <th width="33%" align="left" scope="row">User Name</th>
        <td width="67%"><select name="uid" id="uid" class="boxforcont">
        <?php 
		foreach ($getusr as $key=>$value){
		
		?>
          <option value=" <?php echo $value['user_id']; ?>"><?php echo $value['user_name']; ?></option>
          
          <?php
		}
		  
		  ?>
        </select></td>
      </tr>-->
      <tr>
        <th colspan="2" align="left" scope="row">Area of contributions including role, place and date.</th>
      </tr>
      
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="textck formcontforedit" name="acont" id="acont"  placeholder="Write like: Ring road cycle riding for job for youth in motherland campaign as venue manager on August 14, 2015" cols="45" rows="5"><?php echo $row['area_of_contribution']; ?></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">Posted date</th>
        <td><input type="date" name="pdate" id="datepicker1" class="formfprall" value="<?php echo $pdate; ?>" disabled="disabled"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Updated date</th>
        <td><input type="date" name="udate" id="datepicker" class="formfprall" value="<?php echo $udate; ?>"></td>
      </tr>
      <tr>
        <th align="right" scope="row"><input name="id" type="hidden" id="id" value="<?php echo $row['contributions_id']; ?>" />          <input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Update"></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset"></td>
      </tr>
    </table>
   
  </fieldset>
</form>
</body>
</html>

