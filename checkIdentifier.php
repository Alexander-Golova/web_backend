<?php
	require_once('include\common.inc.php');
	if (isset($_GET['identifier']) && !empty($_GET['identifier']))
	{
		$identifier = $_GET['identifier'];
		echo checkIdentifier($identifier);
	}
	else
	{
		header("HTTP/1.1 400 Bad string!");
	}