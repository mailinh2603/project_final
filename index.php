<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/jquery-ui.css">
    <script type="text/javascript" src="assets/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui.js"></script>
	<link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
<?php session_start();
	  ob_start();
		include_once('config/database.php');
		include_once('include/header.php');
		include_once('include/login.php');?>
		<div class="container-fluid">
		<div class="row" style="margin-left:5px;">
<?php  		include_once('include/navbar.php');
			include_once('include/main.php'); ?>
			</div>
		</div>
		<div class="row">
		<?php include_once('include/footer.php'); ?>
		</div>
</body>
</html>