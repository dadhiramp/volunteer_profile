<!--header -->
<?php 
require('cocap_vol/includes/header.php'); 
require_once('functions/db_connect.php');
require_once('functions/contribution_function.php');
$volunteer_data=getAllvolunteers(NULL,0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COCAP PROFILE</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cocap_vol/css/mystyle.css"/>


 <!--css for tab-->
 <link rel="stylesheet" type="text/css" href="cocap_vol/css/style3.css"/>
 <link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_layout.css"/>
 <link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_smoothness_jquery-ui-1.8.18.custom.css"/>
 <link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_style.css"/>
 


<!--tab ends-->

<title>COCAP</title>

<!--js for tab-->
<script type="text/javascript" src="cocap_vol/js/tab_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="cocap_vol/js/tab_jquery-ui-1.8.18.custom.min.js"></script>


<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>


<!-- --------------------code for home page slider here ---------------------->
<script type="text/javascript" src="cocap_vol/js/tab_jquery-ui-1.8.18.custom.min.js"></script>

<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>

<!--js for tab ends-->


</head>
<!--header ends -->


	<!--head  -->
	
    <!--head ends -->
    <?php require('cocap_vol/includes/head.php'); ?>
	<div id="wrapper">
       <?php require('cocap_vol/includes/nav.php'); ?>
      <!--nav -->
      
      <!--nav ends --> 
      
      <!--regular volunteers -->
      <div id="det_profile">
<div id="top"></div>


<div id="visitpro">
<h3 class="vollast">Breif Introduction</h3>
  <div class="visit">
       <a href="#">|800 VIEWED</a>
      </div> 
       
       </div> <!--visit pro ends -->

      <div id="volwhome1">
      
        <div class="proleftlast">
  
     <img src="uploads/<?php echo $row['pp_image']?>"/>
    
        </div>
        <div class="prorightlast">
       <h3 class="fontblw"><?php echo $row['first_name'].",".$row['middle_name'].",".$row['last_name']?></h3>
     
			
            <ul class="volun">
            
          <li class="cuid"><?php echo $row['volunteer_id']?></li>
                <li class="home"><?php echo $row['permanent_address'].",".$row['country']?></li>
               <li class="position"><?php echo $row['status_at_cocap']?></li>
                <li class="email"><?php echo $row['email']?></li>
                <li class="flag">><?php echo $row['development_region']?></li>
                
            </ul>
           
        </div>
        <div class="comintro">
        <ul>
        <li>
        <p><strong>Education:</strong></p>
        <p><strong>Enrollment Date:</strong></p>
        <p><strong>Permanent Address:</strong></p>
         <p><strong>Temporary Address :</strong></p>
        <p><strong>Occupation:</strong></p>
       
       
        </li>
        </ul>
        </div>
       
        <div class="comright">
        <ul>
        <li>
        <p> <?php echo $row['qualification']?></p>
        <p><?php echo $row['voluntarism_from']?></p>
        <p><?php echo $row['permanent_address'].",".$row['country']?></p>
        <p><?php echo $row['temporary_address']?></p>
         <p><?php echo $row['occupation']?></p>
       
        </li>
              
        </ul>
        
        </div>
      </div>
        <!--<div id="navprof"></div>  -->
        <div id="leftpanel">
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">CONTRIBUTION </a></li>
<li class="ui-state-default ui-corner-top"><a href="#tabs-2">PARTICIPATION</a></li>
<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-3">TRAINING RECEIVED </a></li>
<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-4">EXPERIENCE</a></li>

</ul>

<div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<div class="servicesPackages">
<div class="servicesContents">    
<p class="heightfix">
<?php echo $row['area_of_contribution']?></p>
    
</div>
</div>
</div>

  
  
  
<div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
		                    
					                    
<div class="servicesPackages">
<div class="servicesContents">
<p class="heightfix">
Designated Nepal’s first Himalayan national park in 1971, Langtang is a spectacular valley sandwiched between the main Himalayan ...</p><br>

</div>

</div>


</div>


<div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
		                    
					                    
<div class="servicesPackages">
<div class="servicesContents">
<p class="heightfix">
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p><br>

</div>

</div>


</div>

<div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
		                    
					                    
<div class="servicesPackages">
<div class="servicesContents">
<p class="heightfix">
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p><br>

</div>

</div>


</div>



</div>
</div>
     
      
      <!--network --> 
      <?php require('cocap_vol/includes/network.php'); ?>
      <!--network ends -->
      
      <!--footer -->

	<!--footer ends -->
	</div>
    </div>
    <?php require('cocap_vol/includes/footer.php'); ?>
        
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
</script>
</body>
</html>

