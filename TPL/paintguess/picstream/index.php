<?php
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	require('../../../shaledatamanager.lib.php');
	//usleep(500000); //Microseconds to delay tick
	$db = loadDB('paintguess\image');
	echo '<img src="'.$db['img'].'" />';
	exit;
?>