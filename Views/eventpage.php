<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="../css/general.css">
    <link rel="stylesheet"  href="../css/eventpage.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Add icon library for socail media +star icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--stars rating test :worked but 3 lib alot-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    
    
		<title>page d'accueil</title>
	</head>
	
	<body >
			
		<!--<?php //include("menu1.php"); ?> -->
    
    <!--<?php //require("sidenav_homepage.php"); ?> -->

    <!-- <?php //require("notification.php"); ?> -->

    <br><br>

    <div id="main">

      <!--if user/event_craetor -->
      <div id="id01" class="modal">
        <?php require("account_sittings.php"); ?>
      </div>

      <div id="id02" class="modal2">
        <?php require("create_event.php"); ?>
      </div>

      <?php require("event_infos.php"); ?>

      <?php require("pagination.php"); ?>
      
      <!--if admin -->
      <?php require("users_table.php"); ?>

      <?php require("users_demands.php"); ?>

      <?php require("events_demands.php"); ?>

      <?php require("reports_table.php"); ?>

      <!-- + usercard -->


    </div>

  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/eventpage.js"></script>
	</body>
</html>