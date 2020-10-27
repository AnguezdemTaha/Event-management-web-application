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
		
		<title>Page Créer Compte</title>	
	</head>
	<body>
		<?php include("menu0.php"); ?>
		<br><br>
		<div id="container">
			<div class="col-md-4 col-lg-push-4"	>
				<br>
				<form id="myForm" method="POST" action="traicreecompte.php">
					<h4 class = "form-signin-heading"><?php if(isset($msg)) echo $msg;
 						else echo ''; ?></h4>
 					<label  class="form_cols" for="lastName"><h4>Nom </h4></label><span class="glyphicon glyphicon-user"></span>
       				<input class="form-control" name="lastName" id="lastName" type="text" />
        			<label  class="form_cols" for="age"><h4>Âge </h4></label><span class="glyphicon glyphicon-dashboard"></span>
        			<input  class="form-control" name="age" id="age" type="date" />
        			<label  class="form_cols" for="email" class="form_col"> <h4>Email </h4>  </label><span class="glyphicon glyphicon-tag"></span>
        			<input class="form-control" type="email" name="email" id="email" placeholder="Ex:ahmed" size="20%" autofocus maxlength="20" required>
       				<label class="form_cols" for="pwd1"><h4>Mot de passe </h4></label><span class="glyphicon glyphicon-lock"></span>
        			<input class="form-control" class="form_col" name="pwd1" id="pwd1" type="password" />
        			<label class="form_cols" for="pwd2"><h4>Mot de passe (confirmation) </h4></label><span class="glyphicon glyphicon-lock"></span>
        			<input class="form-control" name="pwd2" id="pwd2" type="password" />
        			<br>
        			<span class="glyphicon glyphicon-leaf"></span><label class="form_col"><h4>Sexe </h4></label>
        			<label><input name="sex" type="radio" value="H" />Homme</label>
        			<label><input name="sex" type="radio" value="F" />Femme</label>
        			<br>
					<center><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Créer Mon Compte</button></center>
    			</form>
    		</div>
		</div>
	</body>
</html>