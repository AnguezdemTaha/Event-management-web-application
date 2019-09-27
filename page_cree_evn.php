<?php
   ob_start();
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="projet_css/style_page_princ_utilisateur.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="projet_css/style1.css" rel="stylesheet">

		<title>PageUtilisateur</title>
	</head>
	<body>
		<?php include("menu.php"); ?>
		<br>
		<div id="container">
			<div class="col-md-4 col-lg-push-4"	>
				<br><br>
				<form  class="" id="myForm" method="POST" action="traiajout_evn.php" enctype="multipart/form-data">
					<center> <h4 class = "form-signin-heading"><?php if(isset($msg1)) echo $msg1;
 						  else echo ''; ?></h4></center>
					<label for="img" class="identifie"><h4> Image:</h4>  </label>
         			<span class="glyphicon glyphicon-film"></span>
         			<input class="form-control" type="file" name="img" id="img" size=50 >
         			<label for="name" class="identifie"><h4> Nom :</h4>  </label>
         			<span class="glyphicon glyphicon-tag"></span>
                	<input class="form-control" type="text" name="name" id="name"  size="20%" autofocus maxlength="20" required>
                	<label for="date_d" class="identifie"><h4> Date de debut  :</h4>  </label>
                	<span class="glyphicon glyphicon-dashboard"></span>
                	<input class="form-control" type="date" name="date_d" id="date_d"  size="20%" autofocus maxlength="20" required>
                	<label for="date_f" class="identifie"><h4> Date de fin  :</h4>  </label>
                	<span class="glyphicon glyphicon-dashboard"></span>
                	<input class="form-control" type="date" name="date_f" id="date_f"  size="20%" autofocus maxlength="20" required>
                	<label for="ville" class="identifie"><h4> Emplacement :</h4>  </label>
					<span class="glyphicon glyphicon-globe"></span>
                	<input class="form-control" type="text" name="ville" id="ville"  size="20%" autofocus maxlength="20" required>
                	<label for="type" class="identifie"><h4> Type :</h4>  </label>
                	<span class="glyphicon glyphicon-link"></span>
                	<input class="form-control" type="text" name="type" id="type"  size="20%" autofocus maxlength="20" required>
                	</br>
        			<center><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Confirmer</button></center>
      			</form>
			</div>
		</div>
		<footer id="footer">
			<div id="footer-inner">

			</div>
		</footer>
	</body>
</html>