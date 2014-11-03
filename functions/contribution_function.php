<?php
//add blog
function addContribution($area_of_contribution,$role,$location, $date_from, $date_to,$volunteer_id,$user_id, $posted_date, $updated_date){
	//connect to the datbase
	$con = connect_db();
	
	//pre[are the sql
	
	$sql = "INSERT INTO tbl_contributions ($area_of_contribution,$role,$location, $date_from, $date_to,$volunteer_id,$user_id, $posted_date, $updated_date) 
	
	  VALUES
	 ('$blog_title', '$blog_description', '$tags', '$cat_id', '$added_date', '$updated_date') ";
	 
	 //echo $sql;
	 //exit;
	 //execute the statement
	 $res = mysql_query($sql) or trigger_error(mysql_error());
	 
	 //decisive parameter
	 $affectedRows = mysql_affected_rows($con);
	 
	 if($affectedRows> 0){
		//success
		return true; 
	 }else{
		//failure
		return false; 
	 }
	close_db($con);
}// function ends

//get all blogs

function getAllvolunteers($limit = '',$volunteer_level=null){
	$con = connect_db();
	$sql = "SELECT * FROM  tbl_volunteers where 1=1";
	if($_SESSION['access_level']==0 and trim($_SESSION['access_level']) !=""){
		$sql.=" and apply_for='".$_SESSION['secretariat']."' ";
	}
	if(trim($volunteer_level)!=""){
		$sql.=" and volunteer_level='".$volunteer_level."' ";	
	}
	if($limit !=''){
	$sql .= $limit;
	}
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

function getAllusers(){
	$con = connect_db();
	$sql = "SELECT * FROM  tbl_users ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

function getAllInterns(){
	$con = connect_db();
	$sql = "SELECT * FROM tbl_interns ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function participation
function getAllparticipation(){
	$con = connect_db();

	$sql = "SELECT * FROM  tbl_volunteers v INNER JOIN tbl_participatn p ON v.volunteer_id  = p.volunteer_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function participation for intern
function getAllparticipationforint(){
	$con = connect_db();

	$sql = "SELECT * FROM   tbl_interns i INNER JOIN tbl_participatn p ON i.interns_id  = p.interns_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}



//function contribution
function getAllcontribution(){
	$con = connect_db();
	$sql = "SELECT c.contributions_id, v.* FROM  tbl_volunteers v 
JOIN tbl_contributions c ON v.volunteer_id  = c.volunteer_id
join tbl_development_region tdr on (tdr.code=v.apply_for) WHERE 1=1  ";
	if($_SESSION['access_level']==0 && trim($_SESSION['access_level'])!=""){
		$sql.=" and tdr.code=".$_SESSION['secretariat'];
	} 
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}




//function contribution for intern
function getAllcontributionforint(){
	$con = connect_db();
	$sql = "SELECT * FROM  tbl_interns i INNER JOIN tbl_contributions c ON i. interns_id  = c.interns_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function trainings
function getAlltraining(){
	$con = connect_db();
	
	$sql = "SELECT * FROM  tbl_volunteers v INNER JOIN tbl_trainings t ON v.volunteer_id  = t.volunteer_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function trainings for int
function getAlltrainingforint(){
	$con = connect_db();
	
	$sql = "SELECT * FROM  tbl_interns i INNER JOIN tbl_trainings t ON i.interns_id  = t.interns_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function experiance
function getAllexp(){
	$con = connect_db();
	$sql = "SELECT * FROM  tbl_volunteers v INNER JOIN tbl_exp e ON v.volunteer_id  = e.volunteer_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function experiance for intern 
function getAllexpforint(){
	$con = connect_db();
	$sql = "SELECT * FROM   tbl_interns i INNER JOIN tbl_exp e ON i.interns_id  = e.interns_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function attitide
function getAllbehav(){
	$con = connect_db();
	
	$sql = "SELECT * FROM  tbl_volunteers v INNER JOIN tbl_behav b ON v.volunteer_id  = b.volunteer_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

//function attitide for intern 
function getAllbehavforint(){
	$con = connect_db();
	
	$sql = "SELECT * FROM   tbl_interns i INNER JOIN tbl_behav b ON i.interns_id  = b.interns_id   ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}


//function interns
function getAllintern(){
	$con = connect_db();
	$sql = "SELECT * FROM   tbl_interns ";
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}

function getAllDevelopmentRegion(){
	$con = connect_db();
	$sql = "SELECT * FROM tbl_development_region where 1=1";
	if($_SESSION['access_level']==0 && trim($_SESSION['access_level'])!=""){
		$sql.=" and code=".$_SESSION['secretariat'];
	}
	$res = mysql_query($sql) or trigger_error (mysql_error()) ;
	$numRows = mysql_num_rows($res);
	$data = array();
	if($numRows > 0){
				while($row = mysql_fetch_assoc($res)){
						array_push($data, $row);
				}	
	}
	
	return $data; // eithr blank or full with tcontent
	close_db($con);
}
?>