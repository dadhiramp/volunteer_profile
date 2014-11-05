<div class="header">
    <div class="logo"><a href="#"><!--<img src="images/logo.gif" alt="" title="" border="0" />--></a></div>
	    
    <div class="right_header">Welcome <?php echo $_SESSION['full_name'].' &nbsp; Acces Level '.$_SESSION['access_level'];?> | 
	<?php if ($_SESSION["secretariat"] =='0'){ echo'ERS';}
	else if($_SESSION["secretariat"] =='1'){ echo'CRS';}
	else if($_SESSION["secretariat"] =='2'){ echo'WRS';}
	else if($_SESSION["secretariat"] =='3'){ echo'MWRS';}
	else if($_SESSION["secretariat"] =='4'){ echo'FWRS';}
	else if($_SESSION["secretariat"] =='5'){ echo'NS';}?> <!--<a href="#">Visit site</a> | <a href="#" class="messages">(3) Messages</a>--> |<a href="logout.php"> Logout</a></div>
    <div id="clock_a"></div>
    </div>