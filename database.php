<?php

  // This page contains the connection routine for the
	// database as well as getting the ID of the cart, etc

	$dbServer = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "database";

	function ConnectToDb ($server, $user, $pass, $database) {
		// Connect to the database and return
		// true/false depending on whether or
		// not a connection could be made.
		$link   = mysql_pconnect($server, $user, $pass);
		$select = mysql_select_db($database, $link);
		mysql_query('set character set greek',$link);       
         mysql_query("SET NAMES 'greek'",$link);
		if (!$link || !$select)
			return false;
		else
			return $link;
	}
	
	$link = ConnectToDb ($dbServer, $dbUser, $dbPass, $dbName);
?>
