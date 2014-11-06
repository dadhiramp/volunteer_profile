<!--header -->
<?php 
require('cocap_vol/includes/header.php'); 
require_once('functions/db_connect.php');
require_once('pagination/Zebra_Pagination.php');
require_once('functions/contribution_function.php');
$volunteer_data=getAllvolunteers(NULL,0);

$records_per_page = 13;
// instantiate the pagination object
$pagination = new Zebra_Pagination();

// the number of total records is the number of records in the array
$pagination->records(count($volunteer_data));

// records per page
$pagination->records_per_page($records_per_page);

// here's the magick: we need to display *only* the records for the current page
$volunteer_data = array_slice(
$volunteer_data,                                             //  from the original array we extract
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
     
     
        <div id="wholeborder">
        <div id="volwhome2">
          <h3 class="voling">Volunteering with COCAP</h3>
          <p class="textpr"> Collective Campaign for Peace (COCAP) is a campaign based organization.  It aims to provide a common space for its members, volunteers and friends to collectively engage in the pursuit of peace, human rights and justice in Nepal. It organizes national/regional level campaigns and programs on the issues of Human Rights, Nonviolent conflict transformation and peace building,  Social Security/Protection and Capacity Building in coordination with its member organizations and other like-minded organizations. Volunteers form the backbone of COCAP as the organization relies on its dedicated and self motivated volunteers to make its programs successful.<br><br>
 
To facilitate the communication and coordination with the organization, volunteers elect their own executive committee called Volunteers Core Group and its coordinator. Elected core groups have been formed in national and all regional secretariats. A volunteer also represents in the executive board.<br><br>
 
COCAP enjoys the encouraging support of large number of volunteers from within and outside the country. To volunteer at COCAP, you don’t need to possess any qualifications but your dedication and commitment to contribute in creating socially just, democratic and inclusive society. If you have the vigor, you are welcome to volunteer at any of our secretariats – National at Kathmandu or regionals – far-western at Mahendranagar, Mid-western at Nepalgunj, Western at Pokhara, Central at Hetauda and Eastern at Biratnagar.
 
Please contact any of our secretariats or fillup the application form and send it to the respective secretariat through email or post.</p>
          </div> <!--vol whole ends -->
          </div>
   
    
        
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
