
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="../css/general.css">
		<link rel="stylesheet"  href="../css/homepage1.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Add icon library for socail media-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<title>page d'accueil </title>
	</head>
	
	<body >
			
		<br><br><br>

                        
		<?php include("menu0.php"); ?>

		<?php require("sidenav_homepage.php"); ?>

		<div id="main">
			<?php require("home_about_services.php"); ?>
			<div id="register_login_forgetpass_modal" class="modal">
				<?php require("register_login_forgetpass.php"); ?>
			</div>      
			
			<?php require('footer.php'); ?>
		
		</div>
		
		<script src="../js/jquery-3.5.1.min.js"></script>
		<script src="../js/homepage1.js"></script>
	</body>
</html>