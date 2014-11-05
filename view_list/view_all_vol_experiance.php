<?php require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
$volexp=getAllexp();
require_once('../pagination/Zebra_Pagination.php');
/*$page_id=isset($_GET['page_id']) ? $_GET['page_id'] :1;
$howMany = 10;
$limit = '';
$offset = ($page_id -1)*$howMany;
$limit = " LIMIT $offset, $howMany ";*/
 // how many records should be displayed on a page?
        $records_per_page = 13;

        // include the pagination class
        //require '../Zebra_Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

        // the number of total records is the number of records in the array
        $pagination->records(count($volexp));

        // records per page
        $pagination->records_per_page($records_per_page);

        // here's the magick: we need to display *only* the records for the current page
        $volexp = array_slice(
            $volexp,                                             //  from the original array we extract
            (($pagination->get_page() - 1) * $records_per_page),    //  starting with these records
            $records_per_page                                       //  this many records
        );




echo '<pre>';
print_r($chusers);
echo '</pre>';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>

      
    
    <div class="right_content">            
        
    <h2>List of volunteer Experience  </h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">EID</th>
              <th scope="col" class="rounded">VID</th>
            <th scope="col" class="rounded">Volunteer Name</th>
            <th scope="col" class="rounded">Email</th>
            <!--<th scope="col" class="rounded">Active</th>
            <th scope="col" class="rounded">Deactive</th>-->
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<!--<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Please be carefull while updating and delating the information. Your data might be lost.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>-->
    </tfoot>
    <tbody>
    <?php
	     foreach($volexp as $value){
			 ?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $value['exp_id']; ?></td>
             <td><?php echo $value['volunteer_id']; ?></td>
            <td><?php echo $value['first_name']; ?></td>
            <td><?php echo $value['email']; ?></td>
           <!-- <td>12/05/2010</td>
                    <td>12/05/2010</td>-->
           

            <td><a href="index.php?page=volexp&action=edit&pageid=<?php echo $value['exp_id']; ?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?page=volexp&action=delete&pageid=<?php echo $value['exp_id']; ?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
                <?php
		 }
		 ?> 

    	<!--<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>
 <td>12/05/2010</td>
 
            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>--> 
        
    	<!--<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>
             <td>12/05/2010</td>

            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>-->
        
    	<!--<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>
             <td>12/05/2010</td>

            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>-->  
    	<!--<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>
             <td>12/05/2010</td>

            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>-->
        
    	<!--<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>
             <td>12/05/2010</td>

            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>-->    
        
    </tbody>
</table>

	 <!--<div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div>--> 
     
  <?php

        // render the pagination links
        $pagination->render();

        ?>
                  
     
           
      
     
     </div><!-- end of right content-->
            
   </body></html>