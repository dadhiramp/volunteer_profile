<?php
require_once('functions/db_connect.php');
require_once('functions/contribution_function.php');
$interns_data=getAllInterns(NULL,0);

?>
<div id="intern">
      <a href="intern_short_list.php"><h3 class="vol2">INTERNS</h3></a>
      		<div class="vticker">
	<ul>
     <?php foreach ($interns_data as $row) {?>
		<li>
        	<a href="intern_profile.php" class="leftt"><img src="uploads/<?php echo $row['pp_image']?>"/></a>
            <div class="rightt">
                <a href="intern_profile.php"><h3 class="font"><?php echo $row['intern_name']?></h3></a>
                <div class="cuidt"><?php echo $row['interns_id']?></div>
                <div class="homet"><?php echo $row['intern_address']?></div>
                <div class="emailt"><?php echo $row['email']?></div>
                <div class="callt"><?php echo $row['gread']?></div>
                <div class="flagt2"><?php echo $row['college']?></div>
         	 </div>
  
        </li>
         <?php }?>
        
	</ul>
</div>
      </div>