<?php

	if (empty($host)) {

		echo "<p><b>Error: </b>Host should not be empty\n";
		echo "<p><a href='index.php'>PHP-Ftp main page</a>\n";
		exit;
	}

	if (empty($username)) {

		echo "<p><b>Error: </b>User name should not be empty\n";
		echo "<p><a href='index.php'>PHP-Ftp main page</a>\n";
		exit;
	}

	if (empty($userpasswd)) {

		echo "<p><b>Error: </b>Password should not be empty\n";
		echo "<p><a href='index.php'>PHP-Ftp main page</a>\n";
		exit;
	}

	$ftpstream = ftp_connect ($host);

	if (!$ftpstream) {

		echo "<p>There's an error while trying to connect to $host ftp server";
		echo "<p><a href='index.php'>PHP-Ftp main page</a>\n";
		exit;
	}

	$ftplogin_result = ftp_login ($ftpstream, $username, $userpasswd);

	if (!$ftplogin_result) {

		echo "<p>There's an error while trying to login to $host ftp server";
		echo "<p><a href='index.php'>PHP-Ftp main page</a>\n";
		exit;
	}


	$remotedir = ftp_pwd ($ftpstream);
	setcookie ("host", $host);
	setcookie ("username", $username);
	setcookie ("userpasswd", $userpasswd);
	setcookie ("homedir", $remotedir);

	header ("location: main.php");

?>

