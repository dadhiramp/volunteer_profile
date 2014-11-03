<?php
define('HOST', 'localhost');

define('USER','root');

define('PWD','root');

define('DB','db_cocap');

//connect to the server
$conxn = mysql_connect(HOST, USER, PWD) or die(mysql_error());
//load the database
@mysql_select_db(DB) or die(mysql_error());
//echo "Database connected";
?>