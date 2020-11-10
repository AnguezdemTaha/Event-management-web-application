
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="eventpage.css">
    <link rel="stylesheet"  href="adminpage.css">
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
			
		<?php include("menu1.php"); ?>


    <?php require("sidenav_eventpage.php"); ?>

    <?php require("notification.php"); ?>





<br><br>
<div id="main">

<?php require("users_table.php"); ?>

<?php require("users_demands.php"); ?>

<?php require("events_demands.php"); ?>

<?php require("reports_table.php"); ?>

<div id="id01" class="modal">     
  <?php require("account_sittings.php"); ?>
</div>








</div>








		

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="eventpage.js"></script>
<script src="adminpage.js"></script>

<script>
// Get the modal , have a prob in traduction this to jquery, needd ot be done later
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

	</body>
</html>