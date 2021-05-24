<?php

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

	echo "Connection and Login to <b>$host</b> ftp server success<br>\n";

	if (!empty($newdir)) {

		ftp_chdir ($ftpstream, $newdir);

	}

	if ($nextaction === "deletefile") {
	
	    for ($i = 1; $i <= $sumoffile; $i++) {

		if (!empty($filename[$i])) {
		
			$pathtodelfile = $newdir . "/" . $filename[$i];
	    	
			ftp_delete ($ftpstream, $pathtodelfile);
			
		}
		
	    }

	}
	
	if ($nextaction === "renamefile") {
	
	    for ($i = 1; $i <= $sumoffile; $i++) {

		if (! (empty($filename[$i])) && ! (empty($newname[$i]))) {
		
			$pathtorenfile = $newdir . "/" . $filename[$i];
	    	
			ftp_rename ($ftpstream, $pathtorenfile, $newname[$i]);
			
		}
		
	    }

	}

	unset ($newdir);
	
	if (!empty($goupdir)) {

		ftp_chdir ($ftpstream, $olddir);
		ftp_cdup ($ftpstream);

	}

	unset ($goupdir);

	$remotesystype = ftp_systype ($ftpstream);

	$remotedir = ftp_pwd ($ftpstream);

	echo "You are now in directory <b>$remotedir</b> of <b>$host</b> ftp server<br>\n";
	echo "Remote system type is <b>$remotesystype</b><br>\n";
	echo "Your home directory is <b>$homedir</b><p><p>\n";

	if ($remotesystype != "UNIX") {

		echo "<p>You can only use PHP-Ftp for UNIX remote system type\n";
		echo "<p><a href='logout.php'>PHP-Ftp main page</a>\n";
		exit;
	}

	if ($remotedir != $homedir) {

		echo "<p><a href='main.php?goupdir=1&olddir=$remotedir'>../</a>\n"; 

	}

	$content = ftp_rawlist ($ftpstream, $remotedir);

	$numlist = sizeof ($content);

	echo "<form action=main.php method=post>\n";

	echo "<table border=1>\n";
	echo "<tr align=center><td>Action</td><td>New Name (FOR RENAME ONLY)</td><td>Permissions</td><td>Link</td><td>Owner</td><td>Group</td><td>Size (bytes)</td><td>Month</td><td>Date</td><td>Time</td><td>File name</td></tr>\n";

	$iteration = 1;
	$checkite = 0;
	
	while ($iteration < $numlist) {
		
		echo "<tr>\n";

		$thestring = ereg_replace (" {1,}", "/", $content[$iteration]);

		$sep = split ("/", $thestring);

		$isdir = substr ($sep[0], 0, 1);

		if ($isdir === "d") {

			$newdir1 = $remotedir . "/" . $sep[8];

			echo "<td><a href=main.php?newdir=$newdir1>ChDir</a></td>\n";
			echo "<td>&nbsp;</td>\n";

		} else 
		{

			$checkite = $checkite + 1;
			
			echo "<td><input type=checkbox name=filename[$checkite] value=$sep[8]></td>\n";
			echo "<td><input type=text name=newname[$checkite] maxlength=255 size=15></td>\n";
		}

		$newit = 0;
		while ($newit < 9) {

			if (($newit == 1) or ($newit == 4) or ($newit == 6)) {

				$justification = "right";

			} else {
			
				$justification = "left";
			}

			echo "<td align=$justification>$sep[$newit]</td>\n";
			$newit++;
		}
	
		$iteration++;
		
		echo "</tr>\n";

	}

	echo "</table>\n";

	echo "<p>\n";
	
	echo "Choose what would you like to do:<p>\n";
	echo "<input type=radio name=nextaction value=renamefile checked>Rename file(s)<p>\n";
	echo "<input type=radio name=nextaction value=deletefile>Delete file(s)<p>\n";
	echo "<input type=hidden name=newdir value=$remotedir>\n";
	echo "<input type=hidden name=sumoffile value=$checkite>\n";
	echo "\n";
	echo "<input type=submit value='GO !'>&nbsp;&nbsp;<input type=reset value=Cancel>\n";
	echo "</form>\n";

	echo "<hr>\n";

	echo "<p><a href='logout.php'>Logout</a><p>\n"; 
	
	ftp_quit ($ftpstream);

?>

