<?php
   //ouvrir session
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta  charset=utf-8">
		<link rel="stylesheet" type="text/css" href="projet_css/style_page_princ_utilisateur.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="projet_css/style1.css" rel="stylesheet">

		<title>Page Login</title>
	</head>
	<body>	
		<?php include("menu0.php"); ?>
		<br>
		<div id="container">	
			<div class="col-md-4 col-lg-push-4"	>
				<br><br>
				<form  class="" id="myForm" method="POST" action="trailogin.php">
					<!--message de validation des infos-->
 					<center><h4 class = "form-signin-heading"><?php if(isset($msg)) echo $msg;
 					else echo ''; ?></h4></center>

    				<label for="lastName" class="identifie"><h3> Nom d'utilisateur :</h3></label>

    				<div class="form-group">
    				<div class="input-grou"> 
      				<span class="glyphicon glyphicon-user"></span>
                	<input class="form-control" type="text" name="lastName" id="lastName"   >
               		</div>
              		</div>
                	<label for="pwd1" class="identifie"> <h3>Mot de passe :</h3></label>
                	<div class="form-group">
    				<div class="input-grou"> 
      				<span class="glyphicon glyphicon-lock"></span>
               		<input class="form-control" type="password" name="pwd1" id="pwd1"  >
               		</div>
               		</div>
               		<center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> SE CONNECTER</button>

               		<a href="creecompte.php"><h4>Créer Un Nouveau Compte</h4></a>
                		
               		<a href="oubliemp.php"><h4>Vous Oubliez votre Mot De Passe ?</h4></a>
               		</center>
                		
                		
               	</form>
            </div>
        </div>
		<footer id="footer">
			<!--vous pouver mettre quelque chose--> 
		</footer>
	</body>
</html>