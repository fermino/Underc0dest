<?php
	try
	{
		error_reporting(0);
		if(isset($_POST['username']))
		{
			session_start();
			$_SESSION['underc0dest_uname'] = $_POST['username'];
			exit('true');
		}
		else
			exit('false');
	}
	catch (Exception $E)
	{
		error_log($E->getMessage() . NL, 3, 'error_log');
		exit('false');
	}

	exit;