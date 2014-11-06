<?php
//load the pageid from the URL
$pageid = isset($_GET['pageid']) ? $_GET['pageid'] : '';
//conenct to the datbase
require_once('../functions/db_connect.php');
connect_db();

//prepare the sql to get a page record depending on pageid
$sql  = " SELECT * FROM tbl_users  WHERE user_id = '$pageid' ";
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
<form action="process_edit/process_edit_user.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="bordersize">
  <input type="hidden" name="page" id="page" value="list_of_all_user">  

 <fieldset>
    <legend class="toptitle">Edit User</legend>
    <table width="58%" border="0">
      <tr>
        <th width="26%" align="left" scope="row">Full Name</th>
        <td width="74%"><input type="text" name="fname" id="fname"  class="formfprall" value="<?php echo $row['full_name']; ?>"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Position</th>
        <td><input type="text" name="position" id="position" class="formfprall" value="<?php echo $row['position']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Regional Secretariat </th>
        <td><select name="rsec" id="rsec" class="boxforcheek">
          <option value="0"  <?php echo ($row['secretariat'] == 0) ? ' selected="selected" ' : '';?>>Eastern Regional Secretariat</option>
          <option value="1" <?php echo ($row['secretariat'] == 1) ? ' selected="selected" ' : '';?>>Centeral Regional Secretart</option>
          <option value="2" <?php echo ($row['secretariat'] == 2) ? ' selected="selected" ' : '';?>>Western Regional Secretariat</option>
          <option value="3" <?php echo ($row['secretariat'] == 3) ? ' selected="selected" ' : '';?>>Mid-Western Regional Secretariat</option>
          <option value="4" <?php echo ($row['secretariat'] == 4) ? ' selected="selected" ' : '';?>>Far-Western Regional Secretariat</option>
          <option value="5" <?php echo ($row['secretariat'] == 5) ? ' selected="selected" ' : '';?>>National Secretariat</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Email Address</th>
        <td><input type="text" name="email" id="email" class="formfprall" value="<?php echo $row['email']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Username</th>
        <td><input type="text" name="uname" id="uname" class="formfprall" value="<?php echo $row['user_name']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Password</th>
        <td><input type="password" name="pass" id="pass" class="formfprall" value="<?php echo $row['password']; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Access Level</th>
        <td><select name="alevel" id="alevel" class="boxforcheek">
          <option value="0" <?php echo ($row['access_level'] == 0) ? ' selected="selected" ' : '';?>>Normal</option>
          <option value="1"  <?php echo ($row['access_level'] == 1) ? ' selected="selected" ' : '';?>>User</option>
          <option value="2"  <?php echo ($row['access_level'] == 2) ? ' selected="selected" ' : '';?>>Super Admin</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Posted Date</th>
        <td><input type="text" name="pdate" id="datepicker" class="formfprall" value="<?php echo $pdate; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Update Date </th>
        <td><input type="text" name="update" id="datepicker1" class="formfprall" value="<?php echo $udate; ?>" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Image </th>
        <td><input type="file" name="uimage" id="uimage" />
        <img src="../uploads/<?php echo $row['image'] ;?>"  width="75px" height="75px"/>
         <input type="hidden" id="id" name="uimage_id" value="<?php echo $row['image']; ?>" />
        </td>
      </tr>
      
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" value="Update"  class="boxforcheek"/> <input type="hidden" id="id" name="pid" value="<?php echo $row['user_id']; ?>" /></th>
        <td><input type="submit" name="cmdReset" id="cmdReset" value="Reset" class="boxforcheek" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>