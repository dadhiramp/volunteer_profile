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
        alert("Please select volunteer ID");
        check=false;
      }
      if($("#datepicker").val()=="" && $("#datepicker1").val()=="" && check){
        alert("Please select dates");
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
<form name="form1" method="post" id="form1"action="process/process_add_vol_experiance.php" class="bordersize">
<input type="hidden" name="page" id="page" value="view_all_vol_experiance">  
<fieldset>
    <legend class="toptitle">Add New Experiance</legend>
    <table width="42%" border="0" cellpadding="0">
     
      <tr>
        <th width="33%" align="left" scope="row">Choose Volunteer ID</th>
        <td><select name="chvolid" id="chvolid" class="boxforcont">
         <option value="">--Select Volunteer Id--</option>
        
		<?php 
		foreach ($chvolid as $key=>$value){ 
		
		?>
          <option value="<?php echo $value['volunteer_id'];  ?>"><?php echo $value['volunteer_id']; ?></option>
        <?php
		 }
		
		?></select> <span id="volunteer_name"></span></td>
        
       
      </tr>
     <tr>
        <th>&nbsp;</th>
       
    </tr>
     
    
      <tr>
        <th colspan="2" align="left" scope="row">Area  of experiance including role and date</th>
      </tr>
      <tr>
        <th colspan="2" align="left" scope="row"><textarea class="formcont textck" name="acont" id="acont"  placeholder="Write like: Conducted two days training on conflict management and positive thinking as the resource person on August 23, 2014." cols="45" rows="5"></textarea></th>
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

