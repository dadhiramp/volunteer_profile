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
<form action="process/process_add_new_user.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="bordersize">
  <fieldset>
    <legend class="toptitle">Add New User</legend>
    <table width="58%" border="0">
      <tr>
        <th width="26%" align="left" scope="row">Full Name</th>
        <td width="74%"><input type="text" name="fname" id="fname"  class="formfprall"/></td>
      </tr>
      <tr>
        <th align="left" scope="row">Position</th>
        <td><input type="text" name="position" id="position" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Regional Secretariat </th>
        <td><select name="rsec" id="rsec" class="boxforcheek">
          <option value="0">Eastern Regional Secretariat</option>
          <option value="1">Centeral Regional Secretart</option>
          <option value="2">Western Regional Secretariat</option>
          <option value="3">Mid-Western Regional Secretariat</option>
          <option value="4">Far-Western Regional Secretariat</option>
          <option value="5">National Secretariat</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Email Address</th>
        <td><input type="text" name="email" id="email" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Username</th>
        <td><input type="text" name="uname" id="uname" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Password</th>
        <td><input type="password" name="pass" id="pass" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Access Level</th>
        <td><select name="alevel" id="alevel" class="boxforcheek">
          <option value="0">Normal</option>
          <option value="1">User</option>
          <option value="2">Super Admin</option>
        </select></td>
      </tr>
      <tr>
        <th align="left" scope="row">Posted Date</th>
        <td><input type="text" name="pdate" id="datepicker" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Update Date </th>
        <td><input type="text" name="update" id="datepicker1" class="formfprall" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Image </th>
        <td><input type="file" name="uimage" id="uimage" /></td>
      </tr>
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" value="Submit"  class="boxforcheek"/></th>
        <td><input type="submit" name="cmdReset" id="cmdReset" value="Submit" class="boxforcheek" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>
</body>
</html>