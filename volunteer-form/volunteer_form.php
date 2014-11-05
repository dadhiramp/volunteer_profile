<!DOCTYPE html>
<html>
<head>

<title>Volunteer Form</title>
<script src="../ckeditor/ckeditor.js"></script>
<!--date picker -->
<meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../css/smoothness/jquery-ui.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  
  
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  </script>

<script>
$(document).ready(function (){
  $("#errorLi").submit(function(e){
      var submit_flag = true;
      if($("#fname").val()==""){
        alert("Please enter first name");
        submit_flag = false;
      }

      
        e.preventDefault();
	  	return false;
	  
	  
	  
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

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<?php 
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
$development_region=getAllDevelopmentRegion();
?>
<body id="public">
<div id="container" class="ltr">

<h1 id="logo">
<!--<a href="http://www.wufoo.com" title="Powered by Wufoo">Wufoo</a> -->
</h1>

<form id="errorLi" name="errorLi" class="twoColumns" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="process/process_volunteer_form.php">
  
<header id="header" class="info">
<h2>COCAP Volunteer Form</h2>

</header>

<ul>
<li id="foli1" class="notranslate      ">

<!--<label class="desc" id="title1" for="applyd">
Apply Date and Image
</label>

<span>

<input  id="datepicker1"name="applyd" type="text" class="field text fn" value="" size="20" tabindex="1" />
<label for="applyd">Apply Date</label>
</span>-->





</li>


<li id="foli1" class="notranslate      ">

<label class="desc" id="title1" for="applyd">
Basic Information
</label>
<span>
<input id="fname" name="fname" type="text" class="field text fn" value="" size="20" tabindex="1" />
<label for="applyd">First Name</label>
</span>
<span>
<input id="mname" name="mname" type="text" class="field text ln" value="" size="20" tabindex="2" />
<label for="mname">Middle Name</label>
</span>

<span>
<input id="lname" name="lname" type="text" class="field text ln" value="" size="25" tabindex="2" />
<label for="mname">Last Name</label>
</span>


</li>



<li id="foli1" class="notranslate      ">

<label class="desc" id="title1" for="applyd"></label>
<span>

<input  id="datepicker2" name="applyd" type="text" class="field text fn" value="" size="20" tabindex="1" />
<label for="applyd">Date of Birth</label>
</span>

<span class="right country">
<select id="applyfor" name="applyfor" class="field select addr" tabindex="8" >
        <option value="" selected="selected">--Select Development Region--</option>
    <?php 
      foreach ($development_region as $row) {?>
        <option value="<?php echo $row['code']?>" ><?php echo $row['name']?></option>    
     <?php }?>
</select>
<label for="qulif">Applying for</label>
</span>

<span>
<input id="qulif" name="qulif" type="text" class="field text ln" value="" size="25" tabindex="2" />
<label for="mname">Education</label>
</span>






<!--<span class="right country">
<select id="Field8" name="Field8" class="field select addr" tabindex="8" >
<option value="" selected="selected"></option>
<option value="United States" >Dalit</option>
<option value="United Kingdom" >Aadibasi/Janajati</option>
<option value="Australia" >Muslim</option>
<option value="Canada" >Braman/Chetre</option>
<option value="France" >Others</option>

</select>
<label for="Field8">Caste</label>
</span> -->


<span class="right country">
<select id="gender" name="gender" class="field select addr" tabindex="8" >
<option value="0" selected="selected">--Select Gender--</option>
<option value="0" >Female</option>
<option value="1" >Male</option>
<option value="2" >Others</option>


</select>
<label for="qulif">Gender</label>
</span>

</li>
<li id="foli3" class="complex notranslate      ">
<label class="desc" id="title3" for="temadd">

Occupation/ Caste
</label>
<div>
<span class="full addr1">


<span class="left city">
<span class="right country">
<select id="caste" name="caste" class="field select addr" tabindex="8" >
<option value="" selected="selected">--Select Caste--</option>
<option value="0" >Dalit</option>
<option value="1" >Janajati/Aadibasi </option>
<option value="2" >Tharu</option>
<option value="3" >Muslim</option>
<option value="4" >Braman/Chetri</option>
<option value="5" >Others</option>

</select>
<label for="qulif">Caste</label>
</span>
</span>

<span class="right country">
<select id="occ" name="occ" class="field select addr" tabindex="8" >
<option value="" selected="selected">--Select Occupation--</option>
<option value="0" >student</option>
<option value="1" >Job holder</option>
<option value="2" >Others</option>
</select>
<label for="qulif">Occupation</label>
</span>

</div>


<li id="foli3" class="complex notranslate      ">
<label class="desc" id="title3" for="temadd">

Address
</label>
<div>
<span class="full addr1">
<input id="temadd" name="temadd" type="text" class="field text addr" value="" tabindex="3" />
<label for="temadd">Temporary Address</label>
</span>
<span class="full addr2">
<input id="paddress" name="paddress" type="text" class="field text addr" value="" tabindex="4" />
<label for="paddress">Permanent Address</label>
</span>
<span class="left city">
<input id="city" name="city" type="text" class="field text addr" value="" tabindex="5" />
<label for="city">City</label>
</span>
<span class="right state">
<input id="state" name="state" type="text" class="field text addr" value="" tabindex="6" />
<label for="country">State / Province / Region</label>
</span>
<span class="left zip">
<input id="zcode" name="zcode" type="text" class="field text addr" value="" maxlength="15" tabindex="7" />
<label for="zcode">Postal / Zip Code</label>
</span>
<span class="right state">
<input id="country" name="country" type="text" class="field text addr" value="" tabindex="6" />
<label for="country">Country</label>
</span>

</div>
</li>
<li id="foli9" class="notranslate      ">
<label class="desc" id="title9" for="email">
Email
</label>
<div>
<input id="email" name="email" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="9" />
</div>
</li>
<li id="foli10" class="phone notranslate      ">
<label class="desc" id="title10" for="mob2">
Phone Number
</label>
<span>
<input id="mob1" name="mob1" type="tel" class="field text" value="" size="48" maxlength="14" tabindex="10" />
<label for="mob2">###</label>
</span>

</li>
<li id="foli10" class="phone notranslate      ">
<label class="desc" id="title10" for="mob2">
Alternative Phone Number
</label>
<span>
<input id="mob2" name="mob2" type="tel" class="field text" value="" size="48" maxlength="14" tabindex="10" />
<label for="mob2">###</label>
</span>

</li>
<li id="foli111"
class="notranslate      "><label class="desc" id="title111" for="worexp">
Working experiences (mention experiences of volunteering if any):
</label>

<div>
<textarea id="worexp"
name="worexp"
class="field textarea medium"
spellcheck="true"
rows="10" cols="50"

tabindex="20"
onkeyup=""
 ></textarea>

</div>
</li>



<li id="foli111"
class="notranslate      "><label class="desc" id="title111" for="worexp">
Why are you interested to work as a volunteer? Why have you chosen COCAP to volunteer ?
</label>

<div>
<textarea id="why"
name="why"
class="field textarea medium"
spellcheck="true"
rows="10" cols="50"

tabindex="20"
onkeyup=""
 ></textarea>

</div>
</li>



<li id="foli11" class="notranslate  threeColumns     "><strong>Which section would you like to contribute as a COCAP volunteer ? (Please select only two options)</strong>
<fieldset>
<![endif]>
<!--[if lt IE 8]>
<label id="title11" class="desc">
Which days can you volunteer?
</label>
<![endif]-->
<div>
<span>
<input id"field11" name="edu[]" type="checkbox" class="field checkbox" id="edu" tabindex="13" value="0" />
<label class="choice" for="qulif">HR Education </label>
</span>
<span>
<input id="Field12" name="edu[]" type="checkbox" class="field checkbox" value="1" tabindex="14" />
<label class="choice" for="Field12">HR Monitoring </label>
</span>
<span>
<input id="Field13" name="edu[]" type="checkbox" class="field checkbox" value="2" tabindex="15" />
<label class="choice" for="Field13">Migrant Workers Right</label>
</span>

<span>
<input id="Field15" name="edu[]" type="checkbox" class="field checkbox" value="3" tabindex="17" />
<label class="choice" for="Field15">Youth Unemployment</label>
</span>
<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="4" tabindex="19" />
<label class="choice" for="Field17">Capacity Building</label>
</span>
<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="5" tabindex="19" />
<label class="choice" for="Field17">Admin and Finance</label>
</span>

<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="6" tabindex="19" />
<label class="choice" for="Field17">Social Protection/ Security</label>
</span>

<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="7" tabindex="19" />
<label class="choice" for="Field17">Good Governance</label>
</span>

<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="8" tabindex="19" />
<label class="choice" for="Field17">Non-Violent Conflict Transformation</label>
</span>

<span>
<input id="Field17" name="edu[]" type="checkbox" class="field checkbox" value="9" tabindex="19" />
<label class="choice" for="Field17">Others</label>
</span>

</div>

</fieldset>
</li>


<li id="foli11" class="notranslate  threeColumns     ">
<fieldset>
<![if !IE | (gte IE 8)]>

<legend id="title11" class="desc">
How you will contribute COCAP ?
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title11" class="desc">
Which days can you volunteer?
</label>
<![endif]-->
<div>
<span>
<input id="Field11" name="how[]" type="checkbox" class="field checkbox" value="0" tabindex="13" />
<label class="choice" for="qulif">Research</label>
</span>
<span>
<input id="Field12" name="how[]" type="checkbox" class="field checkbox" value="1" tabindex="14" />
<label class="choice" for="Field12">Campaigns</label>
</span>
<span>
<input id="Field13" name="how[]" type="checkbox" class="field checkbox" value="2" tabindex="15" />
<label class="choice" for="Field13">Documentation</label>
</span>

<span>
<input id="Field15" name="how[]" type="checkbox" class="field checkbox" value="3" tabindex="17" />
<label class="choice" for="Field15">Publication</label>
</span>
<span>
<input id="Field16" name="how[]" type="checkbox" class="field checkbox" value="4" tabindex="18" />
<label class="choice" for="Field16">Organizing training</label>
</span>
<span>
<input id="Field17" name="how[]" type="checkbox" class="field checkbox" value="5" tabindex="19" />
<label class="choice" for="Field17">Member support</label>
</span>
<span>
<input id="Field17" name="how[]" type="checkbox" class="field checkbox" value="6" tabindex="19" />
<label class="choice" for="Field17">ICT</label>
</span>
<span>
<input id="Field17" name="how[]" type="checkbox" class="field checkbox" value="7" tabindex="19" />
<label class="choice" for="Field17">Media Monitoring</label>
</span>

<span>
<input id="Field17" name="how[]" type="checkbox" class="field checkbox" value="8" tabindex="19" />
<label class="choice" for="Field17">Finance/Admin</label>
</span>
<span>
<input id="Field17" name="how[]" type="checkbox" class="field checkbox" value="9" tabindex="19" />
<label class="choice" for="Field17">Others</label>
</span>

</div>
</fieldset>
</li>



<li id="foli11" class="notranslate  threeColumns     ">
<fieldset>
<![if !IE | (gte IE 8)]>

<legend id="title11" class="desc">
Which days can you volunteer ?
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title11" class="desc">
Which days can you volunteer?
</label>
<![endif]-->
<div>
<span>
<input id="Field17" name="day[]" type="checkbox" class="field checkbox" value="0" tabindex="19" />
<label class="choice" for="Field17">Sunday</label>
</span>

<span>
<input id="Field11" name="day[]" type="checkbox" class="field checkbox" value="1" tabindex="13" />
<label class="choice" for="qulif">Monday</label>
</span>
<span>
<input id="Field12" name="day[]" type="checkbox" class="field checkbox" value="2" tabindex="14" />
<label class="choice" for="Field12">Tuesday</label>
</span>
<span>
<input id="Field13" name="day[]" type="checkbox" class="field checkbox" value="3" tabindex="15" />
<label class="choice" for="Field13">Wednesday</label>
</span>
<span>
<input id="Field14" name="day[]" type="checkbox" class="field checkbox" value="4" tabindex="16" />
<label class="choice" for="Field14">Thursday</label>
</span>
<span>
<input id="Field15" name="day[]" type="checkbox" class="field checkbox" value="5" tabindex="17" />
<label class="choice" for="Field15">Friday</label>
</span>

<span>
<input id="Field15" name="day[]" type="checkbox" class="field checkbox" value="5" tabindex="17" />
<label class="choice" for="Field15">Whole Week</label>
</span>


</div>
</fieldset>
</li>

 



<li class="buttons ">
<div>

                    <input id="saveForm" name="saveForm" class="btTxt submit" 
    type="submit" value="Submit"
 /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="/lryPsD/b8bYbV6G1ZdP0qqymUWL2NQAKKwaMOYmDGE=" />
</li>
</ul>
</form> 

</div><!--container-->
</body>
</html>
