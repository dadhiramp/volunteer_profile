<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
$action =  isset($_GET['action']) ? $_GET['action'] : '';

switch($page){
	
case 'pages':
if($action == 'add_reg_vol_profile' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
$page_to_load = "includes/add_reg_vol_profile.php";
}else if($action == 'edit' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
	$page_to_load = "edit/edit_reg_vol_profile.php";
}else if($action == 'delete' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
	$page_to_load = "delete/delete_reg_vol_profile.php";
}else{
	$page_to_load = "includes/welcome.php";
}

break;

case 'view_all_profile':
$page_to_load = "../view_list/view_all_profile.php";
break;




case 'volcon':
if($action == 'add_Contribution' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
$page_to_load = "includes/add_vol_Contribution.php";
}else if($action == 'edit' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
	$page_to_load = "edit/edit_vol_Contribution.php";
}else if($action == 'delete' && ( $_SESSION['access_level'] == '0' ||$_SESSION['access_level'] == '1' ||$_SESSION['access_level'] == '2' )){
	$page_to_load = "delete/delete_vol_Contribution.php";
}
break;


case 'view_all_vol_contribution':
$page_to_load = "../view_list/view_all_vol_contribution.php";
break;


case 'volpart':
if($action == 'add_vol_participation'){
$page_to_load = "includes/add_vol_participation.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_vol_participation.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_vol_participation.php";
}
break;

case 'view_all_vol_participation':
$page_to_load = "../view_list/view_all_vol_participation.php";
break;

case 'voltrai':
if($action == 'add_vol_trainings'){
$page_to_load = "includes/add_vol_trainings.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_vol_trainings.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_vol_trainings.php";
}
break;

case 'view_all_vol_trainings':
$page_to_load = "../view_list/view_all_vol_trainings.php";
break;



case 'volexp':
if($action == 'add_vol_experiance'){
$page_to_load = "includes/add_vol_experiance.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_vol_experiance.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_vol_experiance.php";
}
break;

case 'view_all_vol_experiance':
$page_to_load = "../view_list/view_all_vol_experiance.php";
break;



case 'volatt':
if($action == 'add_vol_attitude'){
$page_to_load = "includes/add_vol_attitude.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_vol_attitude.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_vol_attitude.php";
}
break;

case 'list_off_all_vol_attitude':
$page_to_load = "../view_list/list_off_all_vol_attitude.php";
break;





/*internship bootstrap*/
case 'intpro':
if($action == 'add_intern_profile'){
$page_to_load = "includes/add_intern_profile.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_profile.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_profile.php";
}
break;

case 'list_of_intern_profile':
$page_to_load = "../view_list/list_of_intern_profile.php";
break;



case 'intcon':
if($action == 'add_intern_contribution'){
$page_to_load = "includes/add_intern_contribution.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_contribution.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_contribution.php";
}
break;

case 'list_of_all_intern_contribution':
$page_to_load = "../view_list/list_of_all_intern_contribution.php";
break;


case 'intparti':
if($action == 'add_intern_participation'){
$page_to_load = "includes/add_intern_participation.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_participation.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_participation.php";
}
break;

case 'list_of_all_intern_participation':
$page_to_load = "../view_list/list_of_all_intern_participation.php";
break;


case 'inttrai':
if($action == 'add_intern_trainings'){
$page_to_load = "includes/add_intern_trainings.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_trainings.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_trainings.php";
}
break;

case 'list_of_all_intern_training':
$page_to_load = "../view_list/list_of_all_intern_training.php";
break;


case 'intexp':
if($action == 'add_intern_experiance'){
$page_to_load = "includes/add_intern_experiance.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_experiance.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_experiance.php";
}
break;

case 'list_of_all_intern_experiance':
$page_to_load = "../view_list/list_of_all_intern_experiance.php";
break;


case 'intatt':
if($action == 'add_intern_attitude'){
$page_to_load = "includes/add_intern_attitude.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_intern_attitude.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_intern_attitude.php";
}
break;

case 'list_of_intern_attitude':
$page_to_load = "../view_list/list_of_intern_attitude.php";
break;


case 'user':
if($action == 'add_new_user'){
$page_to_load = "includes/add_new_user.php";
}else if($action == 'edit'){
	$page_to_load = "edit/edit_new_user.php";
}else if($action == 'delete'){
	$page_to_load = "delete/delete_new_user.php";
}
break;

case 'list_of_all_user':
$page_to_load = "../view_list/list_of_all_user.php";
break;



default:
$page_to_load = "includes/welcome.php";
break;
}


?>