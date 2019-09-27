<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="projet_css/style_page_princ_utilisateur.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="projet_css/style1.css" rel="stylesheet">
		
		<title>PageOublieMP</title>
	
	</head>
	<body>
		<?php include("menu0.php"); ?>
		<br>
		<div id="container">
			<div class="col-md-4 col-lg-push-4"	>
				<br><br>
				<form method="POST" action="#">
					<div class = "Log1">
 					<p>Verification d'Email:Envoyer Code(cette fonctionalié a besion que le site doit etre hebirger donc il n'est pas traité ici)
    				</p>

                	<label for="email" class="identifie"><h3> Email :</h3>  </label>
                	<div class="form-group">
    				<div class="input-grou"> 
      				<span class="glyphicon glyphicon-tag"></span>
                	<input class="form-control" type="email" name="email" id="email" placeholder="Ex:ahmed@gmail.com" size="20%" autofocus maxlength="20" required>
               		</div>
                	</div>
                		
                	<button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-envelope"></span> ENVOYER</button>
                	</div>
          		</form>   
			</div>
		</div>
		<footer id="footer">
			<div id="footer-inner">

			</div>
		</footer>
	</body>
</html>