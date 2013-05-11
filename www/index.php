<?php

	session_set_cookie_params(14400);		// 4 hour session
	session_start();

	require("../lib/Slim/Slim.php");
	require("../lib/com/base/Factory.php");

	/* 
	 * Setup some userful global vars that will feed
	 * our service and controller layer.
	 */
	$db = null;
	$dbServer = "";
	$dbUser = "";
	$dbPass = "";
	$dbName = "";

	if ($_SERVER["SERVER_NAME"] == "localhost") {
		$dbServer = "localhost";
		$dbUser = "user";
		$dbPass = "password";
		$dbName = "dbname";

		$slimOptions = array(
			"mode" => "dev",
			"debug" => true
		);
	} else {
		$dbServer = "address.goes.here";
		$dbUser = "user";
		$dbPass = "password";
		$dbName = "dbname";

		$slimOptions = array(
			"mode" => "prod",
			"debug" => false
		);
	}

	$db = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
	$factory = new Factory($db);

	Slim\Slim::registerAutoloader();

	date_default_timezone_set("US/Central");

	$app = new Slim\Slim($slimOptions);


	/* 
	 * Include controllers
	 */
	include("controllers/home.php");

	/*
	 * Run the app and route
	 */
	$app->run();

?>