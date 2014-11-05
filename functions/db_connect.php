<?php
/**
 * TO connect with the database
 * 
 */
function connect_db($host ='localhost', $user = 'root', $pwd = '', $db='db_cocap'){
	$conxn = mysql_connect($host, $user, $pwd) 
				or 
			trigger_error(mysql_error());
	@mysql_select_db($db) or 
	trigger_error(mysql_error());
//	echo "<br /> The connection is opened";
	return $conxn;
}

function close_db($link){
	mysql_close($link);
	///echo "<br /> The connection has been closed";
}

?>
