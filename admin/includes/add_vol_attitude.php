<?php
session_start();
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');

$chvolid=getAllvolunteers();
$chuser=getAllusers();

/*echo '<pre>';
print_r($chvolid);

echo '</pre>';*/
?> 
 
<link rel="stylesheet" type="text/css" href="../style.css"/>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(document).ready(function(){

  $(document).on("change","#chvolid",function(){
    if($(this).val()=="")
      $("#volunteer_name").html("");
    if($(this).val()!=""){
      $.ajax({
             type: "POST",
             url: "ajax_pages/getVolunteerDetail.php", 
             data: {volunteer_id: $(this).val()},
             dataType: "html",  
             cache:false,
             success: 
                  function(data){
                      $("#volunteer_name").html(data);
                  }
              });// you have missed this bracket
         return false;
    }
  });


  $(document).on("submit","#form1",function(e){
      var check=true;
      if($("#chvolid").val()==""){
        alert("Please select volunteer id");
        check=false;
      }
      if($("#datepicker").val()=="" && $("#datepicker1").val()=="" && check){
        alert("Please select dates");
        check=false;
		
		}
      if($("#agrade").val()=="" && $("#agrade").val()=="" && check){
        alert("Please select status");
        check=false;
      
	  
	  
	  
	  } 
      if(!check){
        e.preventDefault();
        return false;
      }
  });


});

</script>

</head>

<body>
<form name="form1" method="post" id="form1" action="process/process_add_vol_attitude.php" class="bordersize">
<input type="hidden" name="page" id="page" value="list_off_all_vol_attitude">  
<fieldset>
    <legend class="toptitle">Add New Attitude </legend>
    <table width="42%" border="0" cellpadding="0">
     
      <tr>
        <th width="33%" align="left" scope="row">Choose Volunteer ID</th>
        <td><select name="chvolid" id="chvolid" class="boxforcont">
          <option value="">--Select Volunteer ID--</option>
		<?php 
		foreach ($chvolid as $key=>$value){ 
		
		?>
          <option value="<?php echo $value['volunteer_id'];  ?>"><?php echo $value['volunteer_id']; ?></option>
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
        <th colspan="2" align="left" scope="row"><textarea class="formcont textck" name="acont" id="acont"  placeholder="Write like: #" cols="45" rows="5"></textarea></th>
      </tr>
      <tr>
        <th align="left" scope="row">Attitude Grade</th>
        <td><select name="agrade" id="agrade" class="boxforcont">
        <option value="">--Select Status--</option>
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
      <!--<tr>
        <th align="left" scope="row">Posted date</th>
        <td><input type="date" name="pdate" id="datepicker" class="formfprall"></td>
      </tr>
      <tr>
        <th align="left" scope="row">Updated date</th>
        <td><input type="date" name="udate" id="datepicker1" class="formfprall"></td>
      </tr>-->
      <tr>
        <th align="right" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" class="boxforcheek" value="Submit"></th>
        <td align="left"><input type="submit" name="cmdReset" id="cmdReset" class="boxforcheek" value="Reset"></td>
      </tr>
    </table>

  </fieldset>
</form>
</body>
</html>

