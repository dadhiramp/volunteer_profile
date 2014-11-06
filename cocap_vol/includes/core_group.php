<?php
require_once('functions/db_connect.php');
require_once('functions/contribution_function.php');
$volunteer_data=getAllvolunteers(NULL,2,'Y');
?>

<div id="core_group">
      	<a href="volcoregroup_short_list.php"><h3 class="vol">VOLUNTEER CORE GROUP</h3></a>
      	<div class="vticker">
	<ul>
      <?php foreach ($volunteer_data as $row) {?>
		<li>
        	<a href="vol_profile.php?id=<?php echo $row['volunteer_id']?>" class="leftt"><img src="uploads/<?php echo $row['pp_image']?>" height="145" width="132"/></a>
            <div class="rightt">
                <a href="vol_profile.php?id=<?php echo $row['volunteer_id']?>"><h3 class="font"><?php echo $row['first_name'].",".$row['middle_name'].",".$row['last_name']?></h3></a>
                <div class="cuidt"><?php echo $row['volunteer_id']?></div>
                <div class="homet"><?php echo $row['permanent_address'].",".$row['country']?></div>
                <div class="callt"><?php echo $row['qualification']?></div>
                <div class="position"><?php echo $row['status_at_cocap']?></div>
                <div class="flagt"><?php echo $row['development_region']?></div>
         	 </div>
  
        </li>
              <?php }?>
        
	</ul>
</div>



        
      </div>