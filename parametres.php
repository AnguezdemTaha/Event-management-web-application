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
		<link rel="stylesheet" type="text/css" href="style_page_princ_utilisateur.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">

		<title>PageUtilisateur</title>
	</head>
	<body>
		<?php include("menu.php"); ?>
    <br>
    <div id="container">
			<div class="col-md-4 col-lg-push-4"	>
				<br>
				<form method="post" action="traiparam.php">
						<h4 class = "form-signin-heading"><?php if(isset($msg)) echo $msg;
 						else echo ''; ?></h4>
 						<label for="username" class="identifie"><h4> Nouveau UserName :</h4>  </label>
 						 <span class="glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" name="username" id="username" placeholder="Ex:ahmed" size="20%" autofocus maxlength="20" required>
            <label for="mot de passe" class="identifie"> <h4>Nouveau Mot De Passe :</h4></label>
            <span class="glyphicon glyphicon-lock"></span>
            <input class="form-control" type="password" name="mot" id="mot de passe" placeholder="******"  required>
            <label for="c_mot de passe" class="identifie"> <h4>Confirmer Nouveau Mot De Passe :</h4></label>
            <span class="glyphicon glyphicon-refresh"></span>
            <input class="form-control" type="password" name="mot1" id="c_mot de passe" placeholder="******" size="20%" autofocus maxlength="20" required>
            <label for="email" class="identifie" ><h4> Email :</h4>  </label>
            <span class="glyphicon glyphicon-send"></span>
            <input class="form-control" type="email" name="email" id="email" value="test" placeholder="Ex:ahmed" size="20%" autofocus maxlength="20" required>
            <label for="date_n" class="identifie"><h4>Date De Naissance </h4>  </label>
            <span class="glyphicon glyphicon-list-alt"></span>
            <input class="form-control" type="date" name="date_n" id="date_n" placeholder="Ex:ahmed" size="20%" autofocus maxlength="20" required>
            <h4>Veuillez indiquer Votre Sexe:</h5>
            <span class="glyphicon glyphicon-sort"></span>
            <input  type="radio" name="sexe" value="fille" id="fille" /> <label for="fille">Fille</label>
            <span class="glyphicon glyphicon-sort"></span>
            <input  type="radio" name="sexe" value="garcon" id="garcon" /> <label for="garcon">Garcon</label><br />
            <div id="container">
   	  				<div class="col-md-12 col-lg-push-0">
                <label for="mot de passe" class="identifie"> <h4>Confirmer Mot De Passe [Ancien]:</h4></label>
                <span class="glyphicon glyphicon-sound-dolby"></span>
                <input class="form-control" type="password" name="cmot" id="mot de passe" placeholder="******" size="20%" autofocus maxlength="20" required>
                <br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Confirmer</button>
      				</div>
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