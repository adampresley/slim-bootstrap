<?php

	$app->get("", function() use ($app) {
		$app->redirect("/");
	});

	$app->get("/", function() use ($app, $factory) {
		$viewData = array(
			"view" => "home/index.php",
			"title" => "Home"
		);

		$app->render("mainLayout.php", $viewData);
	});

?>