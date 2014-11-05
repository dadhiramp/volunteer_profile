<!--header -->
<?php 
require('cocap_vol/includes/header.php'); 
require_once('functions/db_connect.php');
require_once('pagination/Zebra_Pagination.php');
require_once('functions/contribution_function.php');
$intern_data=getAllInterns(NULL,0);

$records_per_page = 13;
// instantiate the pagination object
$pagination = new Zebra_Pagination();

// the number of total records is the number of records in the array
$pagination->records(count($intern_data));

// records per page
$pagination->records_per_page($records_per_page);

// here's the magick: we need to display *only* the records for the current page
$intern_data = array_slice(
$intern_data,                                             //  from the original array we extract
(($pagination->get_page() - 1) * $records_per_page),    //  starting with these records
$records_per_page                                       //  this many records
);
?>
<!--header ends -->
<link rel="stylesheet" type="text/css" href="pagination/public/css/pagination.css"/>
<body>
	<!--head  -->
	<?php require('cocap_vol/includes/head.php'); ?>
    <!--head ends -->
	<div id="wrapper">
      
      <!--nav -->
      <?php require('cocap_vol/includes/nav.php'); ?>
      <!--nav ends -->
      
      <!--regular volunteers -->
      <div id="wholevol">
      <div id="list_right">
      <div class="listof"> <a href="vol_short_list.php">REGULAR VOLUNTEERS</a></div>
       <div class="listof"> <a href="snrvol_short_list.php">SENIOR VOLUNTEERS</a></div>
        <div class="listof"> <a href="volcoregroup_short_list.php">VOLUNTEER CORE GROUP</a></div>
         <div class="listof"> <a href="intern_short_list.php">INTERNS</a></div>
     
     
      </div>
     
     <?php 
     //echo "<pre>";
     //print_r($volunteer_data);
     foreach ($intern_data as $row) {?>
        <div id="wholeborder">
        <div id="volwhome">
          <div class="proleft2">
            <a href="vol_profile.php"><img src="uploads/<?php echo $row['pp_image']?>"/></a>
          </div>
          <div class="proright2">
            <a href="vol_profile.php"><h3 class="fontblwo"><?php echo $row['intern_name']?></h3></a>
                <ul class="volun">
                
                  <li class="cuid"><?php echo $row['interns_id']?></li>
                  <li class="home"><?php echo $row['intern_address']?></li>
                   <li class="email"><?php echo $row['email']?></li>
                  <li class="callt"><?php echo $row['gread']?></li>
                 <li class="flagt2"><?php echo $row['college']?></li>
                 
              </ul>
          
          </div>
          </div> <!--vol whole ends -->
          </div>
     <?php }?>
    
        
<!--regular_vol ends -->
      
      <?php

        // render the pagination links
        $pagination->render();

        ?> 
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

