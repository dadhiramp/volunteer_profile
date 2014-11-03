<!DOCTYPE html>
<html>
<head>

<title>Intern Form</title>
<script src="../ckeditor/ckeditor.js"></script>

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

<body id="public">
<div id="container" class="ltr">

<h1 id="logo">
<!--<a href="http://www.wufoo.com" title="Powered by Wufoo">Wufoo</a> -->
</h1>

<form id="errorLi" name="errorLi" class="twoColumns" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="process/process_intern_form.php">
  
<header id="header" class="info">
<h2>COCAP Intern Form</h2>

</header>

<ul>
<li id="foli1" class="notranslate      ">

<!--<label class="desc" id="title1" for="applyd">
Apply Date and Image
</label>

<span>

<input id="datepicker" name="applyd" type="text" class="field text fn" value="" size="20" tabindex="1" />
<label for="applyd">Apply Date</label>
</span>-->





</li>


<li id="foli1" class="notranslate      ">

<label class="desc" id="title1" for="dob">
Basic Information
</label>
<span>
<input id="fname" name="fname" type="text" class="field text fn" value="" size="40" tabindex="1" />
<label for="dob">Full Name </label>
</span></li>

<li id="foli1" class="notranslate      ">

<label class="desc" id="title1" for="dob">

</label>
<span>

<input id="datepicker" name="dob" type="text" class="field text fn" value="" size="20" tabindex="1" />
<label for="dob">Date of birth</label>
</span>

<span class="right country">
<select id="applyfor" name="applyfor" class="field select addr" tabindex="8" >
<option value="5" selected="selected">--Select Regional Secretariat--</option>
<option value="0" >Eastern Regional Secretariat</option>
<option value="1" >Central Regional Secretariat</option>
<option value="2" >Western Regional Secretariat</option>
<option value="3" >Mid-Western Regional Secretariat</option>
<option value="4" >Far-Western Regional Secretariat</option>
<option value="5" >National Secretariat</option>



</select>
<label for="gread">Applying for</label>
</span>

<span>
<input id="gread" name="gread" type="text" class="field text ln" value="" size="25" tabindex="2" />
<label for="mname">Education</label>
</span>


<span class="right country">
<select id="gender" name="gender" class="field select addr" tabindex="8" >
<option value="0" selected="selected">--Select Gender--</option>
<option value="0" >Female</option>
<option value="1" >Male</option>
<option value="2" >Others</option>


</select>
<label for="gread">Gender</label>
</span>

</li>

<li id="foli3" class="complex notranslate      ">
<label class="desc" id="title3" for="temadd">
</label>

<li id="foli3" class="complex notranslate      ">
<label class="desc" id="title3" for="temadd">

Address
</label>
<div><span class="left city">
<input id="addr" name="addr" type="text" class="field text addr" value="" tabindex="5" />
<label for="addr">Address</label>
</span>
<span class="right state">
<input id="contnum" name="contnum" type="text" class="field text addr" value="" tabindex="6" />
<label for="country">Contact Number</label>
</span>
<span class="left zip">
<input id="email" name="email" type="text" class="field text addr" value="" maxlength="15" tabindex="7" />
<label for="email">Email Address</label>
</span>

<span class="right state">
<input id="country" name="country" type="text" class="field text addr" value="" tabindex="6" />
<label for="country">Country</label>
</span>

</div>
</li>

<li id="foli1" class="notranslate      ">

<label class="desc" id="title1" for="dob">
Collage Information
</label>
<span>
<input id="colname" name="colname" type="text" class="field text fn" value="" size="60" tabindex="1" />
<label for="dob">Collage Name</label>
</span>
<span>
<input id="coladd" name="coladd" type="text" class="field text ln" value="" size="30" tabindex="2" />
<label for="coladd">Collage Address</label>
</span>

<span>
<input id="coordname" name="coordname" type="text" class="field text ln" value="" size="50" tabindex="2" />
<label for="coladd">Interns' Coordinator </label>
</span>

<span>
<input id="coornum" name="coornum" type="text" class="field text ln" value="" size="40" tabindex="2" />
<label for="coladd">Contact # of Coordinator</label>
</span>


</li>



<li id="foli111"
class="notranslate      "><label class="desc" id="title111" for="expec">
Why did u choose COCAP as your field ? Give specific reasons. 
</label>

<div>
<textarea  id="why"
name="why"
class="field textarea medium"
spellcheck="true"
rows="10" cols="50"

tabindex="20"
onkeyup=""
 ></textarea>

</div>
</li>



<li id="foli111"
class="notranslate      "><label class="desc" id="title111" for="expec">
Your expectation from COCAP ?
</label>

<div>
<textarea id="expec"
name="expec"
class="field textarea medium"
spellcheck="true"
rows="10" cols="50"

tabindex="20"
onkeyup=""
 ></textarea>

</div>
</li>

<li id="foli11" class="notranslate  threeColumns     ">
<fieldset>
<![if !IE | (gte IE 8)]>

<legend id="title11" class="desc">
In which area do you get involve?
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title11" class="desc">
Which days can you volunteer?
</label>
<![endif]-->
<div>
<span>
<input id="Field11" name="area[]" type="checkbox" class="field checkbox" value="0" tabindex="13" />
<label class="choice" for="edu">Research</label>
</span>
<span>
<input id="Field12" name="area[]" type="checkbox" class="field checkbox" value="1" tabindex="14" />
<label class="choice" for="Field12">Campaigns</label>
</span>
<span>
<input id="Field13" name="area[]" type="checkbox" class="field checkbox" value="2" tabindex="15" />
<label class="choice" for="Field13">Documentation</label>
</span>

<span>
<input id="Field15" name="area[]" type="checkbox" class="field checkbox" value="3" tabindex="17" />
<label class="choice" for="Field15">Publication</label>
</span>
<span>
<input id="Field16" name="area[]" type="checkbox" class="field checkbox" value="4" tabindex="18" />
<label class="choice" for="Field16">Organizing training</label>
</span>
<span>
<input id="Field17" name="area[]" type="checkbox" class="field checkbox" value="5" tabindex="19" />
<label class="choice" for="Field17">Member support</label>
</span>
<span>
<input id="Field17" name="area[]" type="checkbox" class="field checkbox" value="6" tabindex="19" />
<label class="choice" for="Field17">ICT</label>
</span>
<span>
<input id="Field17" name="area[]" type="checkbox" class="field checkbox" value="7" tabindex="19" />
<label class="choice" for="Field17">Media Monitoring</label>
</span>

<span>
<input id="Field17" name="area[]" type="checkbox" class="field checkbox" value="8" tabindex="19" />
<label class="choice" for="Field17">Finance/Admin</label>
</span>
<span>
<input id="Field17" name="area[]" type="checkbox" class="field checkbox" value="9" tabindex="19" />
<label class="choice" for="Field17">Others</label>
</span>

</div>
</fieldset>
</li>



<li id="foli11" class="notranslate  threeColumns     ">
<fieldset>
<![if !IE | (gte IE 8)]>





<li id="foli11" class="notranslate  threeColumns     ">
<fieldset>
<![if !IE | (gte IE 8)]>

<legend id="title11" class="desc">
Which days you are wondering to work with COCAP ? 
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title11" class="desc">
Which days can you volunteer?
</label>
<![endif]-->
<div>
<span>
<input id="Field17" name="day[]" type="checkbox" class="field checkbox" value="5" tabindex="19" />
<label class="choice" for="Field17">Sunday</label>
</span>
<span>
<input id="day" name="day[]" type="checkbox" class="field checkbox" value="0" tabindex="13" />
<label class="choice" for="edu">Monday</label>
</span>
<span>
<input id="Field12" name="day[]" type="checkbox" class="field checkbox" value="1" tabindex="14" />
<label class="choice" for="Field12">Tuesday</label>
</span>
<span>
<input id="Field13" name="day[]" type="checkbox" class="field checkbox" value="2" tabindex="15" />
<label class="choice" for="Field13">Wednesday</label>
</span>
<span>
<input id="Field14" name="day[]" type="checkbox" class="field checkbox" value="3" tabindex="16" />
<label class="choice" for="Field14">Thursday</label>
</span>
<span>
<input id="Field15" name="day[]" type="checkbox" class="field checkbox" value="4" tabindex="17" />
<label class="choice" for="Field15">Friday</label>
</span>



<span>
<input id="Field17" name="day[]" type="checkbox" class="field checkbox" value="6" tabindex="19" />
<label class="choice" for="Field17">All working days</label>
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
