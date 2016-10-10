<?php

$dbname = 'wesat_demo';	// your database name
$dbuser = 'root';	// your database user name
$dbpasword = 'root';			// your database password
//make connection to dbase
$connection = @mysql_connect($server, $dbuser, $dbpasword)
   or die(mysql_error());
$base_datos = @mysql_select_db($dbname,$connection)
			or die(mysql_error());
@mysql_query("SET NAMES 'utf8'");
?>