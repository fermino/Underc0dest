<?php
	error_reporting(0);

	if(!empty($_POST['username']))
	{
		session_start();

		$_SESSION['underc0dest_uname'] = $_POST['username'];

		exit('true');
	}

	exit('false');