<?php 
require_once('../functions/db_connect.php');
require_once('../functions/contribution_function.php');
$chvolid=getAllvolunteers();;
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
        $pagination->records(count($chvolid));

        // records per page
        $pagination->records_per_page($records_per_page);

        // here's the magick: we need to display *only* the records for the current page
        $chvolid = array_slice(
            $chvolid,                                             //  from the original array we extract
            (($pagination->get_page() - 1) * $records_per_page),    //  starting with these records
            $records_per_page                                       //  this many records
        );




/*echo '<pre>';
print_r($chvolid);
echo '</pre>';*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List of Profile</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<link rel="stylesheet" type="text/css" href="../pagination/public/css/pagination.css"/>
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
        
        $(".display_flag").click(function (){
            var name = $(this).attr("name");
            var res = name.split("_");
            var display = $(this).attr("value");
            $.ajax({
                 type: "POST",
                 url: "ajax_pages/changeVolunteerStatus.php", 
                 data: {volunteer_id: res[1],display : display},
                 dataType: "html",  
                 cache:false,
                 success: 
                      function(data){
                      }
                  });// you have missed this bracket
        });
                
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>

      
    
    <div class="right_content">            
        
    <h2>List of Volunteer Profile</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">VID</th>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Email</th>
             <th scope="col" class="rounded">Active</th>
            <th scope="col" class="rounded">Deactive</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <!--<tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Please be carefull while updating and delating the information. Your data might be lost.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
    <?php
	     foreach($chvolid as $value){
			 ?>
			 
             
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $value['volunteer_id']; ?></td>
            <td><?php echo $value['first_name']. ' &nbsp;'.$value['middle_name']. ' &nbsp;'.$value['last_name']?></td>
           	<td><?php echo $value['email'] ?></td>
           	<td>
            <input type="radio" class="display_flag" name="display_<?php echo $value['volunteer_id']?>" value="Y" <?php if($value['display']=='Y') echo "checked"; ?>></td>
            <td><input type="radio" class="display_flag" name="display_<?php echo $value['volunteer_id']?>" value="N" <?php if($value['display']=='N') echo "checked"; ?>></td>
            
           
			
            <td><a href="index.php?page=pages&action=edit&pageid=<?php echo $value['volunteer_id']; ?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?page=pages&action=delete&pageid=<?php echo $value['volunteer_id']; ?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php
		 }
		 ?>
        
        </tbody>
        
    	
    </tbody>
</table>

	<!-- <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> -->
     <!--<div class="pagination">
        <?php
		for($i = 1; $i < sizeof($totalVolunteers) ; $i++){
		$paginate= '<a href="index.php?page=view_all_profile&page_id='.$i.'">';
			if($_GET['page_id'] == $i){
				$paginate .= '<span class="current">' . $i . ' </span></a>&nbsp;&nbsp;';
			}
			else{
				$paginate .= $i . '</a>&nbsp;&nbsp;';
			}
			echo $paginate;
		}
		?>
     </div>-->
      <?php

        // render the pagination links
        $pagination->render();

        ?>
           
      
     
     </div><!-- end of right content-->
            
   </body></html>