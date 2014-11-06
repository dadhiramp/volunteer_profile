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
          <h3 class="textconthed">Collective Campaign for Peace (COCAP)</h3>
           <p class="textcontps">National Secretariat</p>
          <p class="textcontp">Sahayog Marg (House No. 18), Anamnaga</p>
          <p class="textcontp">Kathmandu, Nepal</p>
           <p class="textcontp">Phone No. : 00977-1-4265143</p>
            <p class="textcontp">E-mail : info@cocap.org.np </p>
             
<br>
  
   
           <p class="textcontps">Eastern Regional Secretariat</p>
          <p class="textcontp">Panchali, Biratnagar, Morang</p>
           <p class="textcontp">Contact No: +977-21-470565</p>
            <p class="textcontp">Email: eastern@cocap.org.np</p>
            <br>
            <p class="textcontps">Central  Regional Secretariat</p>
          <p class="textcontp">Hetauda Municipality, ward no 2,</p>
           <p class="textcontp">Siddhartha Path, Makwanpur</p>
            <p class="textcontp">Contact no: +977 57526865</p>
            <p class="textcontp">Email: central@cocap.org.np</p>
            
            <br>
            <p class="textcontps">Western Regional Secretariat</p>
          <p class="textcontp">Annapurna Tole 7, Ratnachowk,</p>
           <p class="textcontp">Pokhara, Kaski</p>
            <p class="textcontp">Contact no: +977 61 465639</p>
            <p class="textcontp">Email: western@cocap.org.np</p>
            
            <br>
            <p class="textcontps">Mid western Regional Secretariat</p>
          <p class="textcontp">Nepalgunj 16, Belaspure</p>
           <p class="textcontp">Srijana Nagar Marg, Nepalgunj, Banke</p>
            <p class="textcontp">Contact no: +977 81 523031</p>
            <p class="textcontp">Email: midwestern@cocap.org.np</p>
            
            <br>
            <p class="textcontps">Far western Regional Secretariat</p>
          <p class="textcontp">Bhim Dutta 18, Katan</p>
           <p class="textcontp">Mahendranagar, Kanchanpur</p>
            <p class="textcontp">Contact no: +977 99 520059</p>
            <p class="textcontp">Email: farwestern@cocap.org.np</p>
          </div> <!--vol whole ends -->
          </div>
   
    
        
<!--regular_vol ends -->
      
  
<!--network --> 
      <?php require('cocap_vol/includes/network.php'); ?>
      <!--network ends -->
      
      <!--footer -->
	<!--footer ends -->
	</div>
    <?php require('cocap_vol/includes/footer.php'); ?>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
</script>
</body>
</html>

</body>
</html>