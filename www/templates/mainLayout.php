<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?= $title ?> // Slim Bootstrap App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<link href="/resources/css/bootstrap.css" rel="stylesheet" />
	<link href="/resources/css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="/resources/css/style.css" rel="stylesheet" />

	<!--[if lt IE 9]><script src="/resources/js/html5.js"></script><![endif]-->

	<script src="/resources/js/jquery-1.8.1.js"></script>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/">Slim Bootstrap App</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a href="/logout.php" class="navbar-link">Log Out</a>
					</p>
					<ul class="nav">
						<li><a href="/">Home</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="span12">
				<?php include($view); ?>
			</div>
		</div>
	</div> <!-- /container -->

	<script src="/resources/js/date.js"></script>
	<script src="/resources/js/jquery.blockUI.js"></script>
	<script src="/resources/js/bootstrap.min.js"></script>
	<script src="/resources/js/BootstrapPlus.js"></script>
</body>
</html>