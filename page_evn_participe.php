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
		<link href="style2.css" rel="stylesheet">

		<title>PageUtilisateur</title>
	</head>
	<body>
		<?php include("menu.php"); ?>
		<br><br>
 		<div id="t1" class="col-md-12 ">
			<h3>Evènement participés :</h3>
		</div>
    <?php
    srand(time(0));
    include('traitement_php/connexionPDO.php');
    $reponse=$bdd->query('SELECT * FROM event,infos where event.ID_EVENT=infos.ID_EVENT  and PARTICIPE=1 and infos.ID_USER=\'' . $_SESSION['id'] . '\' ');
    while($donnee=$reponse->fetch() ){?>
    <div id="container">
   	  <div class="col-md-8 col-lg-push-2">
   	    <div class="row">
   			  <br>
   		    <div class="col-md-4 ">
   		  	  <?php $_SESSION['ID_evn']=$donnee['ID_EVENT'] ; $_SESSION['ID_user']=$donnee['ID_USER'] ; ?>
   		  	  <div class=row>
   		  		  <div class="col-md-12 ">
   			        <label><?php echo $donnee['EVENT_TITLE'] ?></label>
                <br>
   			 	    </div>
            </div>
            <div class=row>  
				      <img src=<?php $var=$donnee['ID_EVENT'];
				      echo "images/$var.jpg";?> alt="" height="200" width="200">
              <img src=<?php $var=$donnee['ID_EVENT'];
  				    echo "images/$var.png";?> alt="" height="200" width="200">
              <img src=<?php $var=$donnee['ID_EVENT'];
				      echo "images/$var.exm";?> alt="" height="200" width="200">
            </div>
			      <div class=row>
   		  		  <div class="col-md-12 ">
   			        <label><?php echo $donnee['DATE_START'] ?></label>
              </div>
            </div>
		      </div>
          <div class="col-md-6 col-lg-push-2">
            <div class="row">
            	<?php $x = $donnee['ID_EVENT'];$y = $donnee['ID_USER']?>    	
                <span class="glyphicon glyphicon-flag"></span>
                <label>Nom : <?php echo $donnee['EVENT_TITLE'] ?></label><br> 
                <span class="glyphicon glyphicon-globe"></span>
                <label>VILLE : <?php echo $donnee['LOCATION'] ?></label><br>
                <span class="glyphicon glyphicon-arrow-down"></span>
                <label>Date de début: <?php echo $donnee['DATE_START'] ?></label><br>
                <span class="glyphicon glyphicon-arrow-up"></span>
                <label>Date de fin: <?php echo $donnee['DATE_END'] ?></label><br>
                <span class="glyphicon glyphicon-random"></span>
                <label>Genre : <?php echo $donnee['TYPE_EVENT'] ?></label><br>
            	</div>
            	<div class="row">
            		<div class="col-md-10 col-lg-push-1">
            			<span class="glyphicon glyphicon-list">
            			<label>Desctiption : <?php echo $donnee['EVENT_TITLE'] ;echo '  est un événement dans laquelle vous allez voir beaucoup de choses '?></label>
            		</div>
            	</div>
            </div>
          </div>
          <div class="row">
    		    <div class="col-md-10 col-lg-push-1">
              <form method="post" action="traievn.php">
                <?php $_SESSION['ID_evn']=$donnee['ID_EVENT'] ; $_SESSION['ID_user']=$donnee['ID_USER'] ; ?>
                <input id="t" name="t" type="hidden" value=<?php echo $donnee['ID_EVENT'] ?>>
                <input type="checkbox" name="Interese" value="1" id="Interese" <?php 
                $reponse1 = $bdd->prepare('SELECT * FROM infos where ID_EVENT=? and ID_USER=? and INTERESE=? ');
                $reponse1->execute(array($donnee['ID_EVENT'],$_SESSION['id'],'1'));
                if($donnee1=$reponse1->fetch() ){echo "checked";}
                 ?>/> 
                <label for="Interese">Intéressé</label><br />
                <input type="checkbox" name="Participe" value="1" id="Participe" 
                <?php 
                  $reponse3=$bdd->prepare('SELECT * FROM infos where ID_EVENT=? and ID_USER=? and PARTICIPE=? ');
                  $reponse3->execute(array($donnee['ID_EVENT'],$_SESSION['id'],'1'));
                  if($donnee3=$reponse3->fetch() ){echo "checked";}
                ?>/>   
                <label for="Participe">Participé </label><br />
                <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-list"></span> CONFIRMER</button>
              </form >
            </div>
    		  </div>
          <div class="row">
            <form method="post" action="page_evenement_info.php">
            <input id="id_evn" name="id_evn" type="hidden" value=<?php echo $donnee['ID_EVENT'] ?>>
            <input id="id_user" name="id_user" type="hidden" value=<?php echo $donnee['ID_USER'] ?>>
            <center>
            <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-repeat"></span> AFFICHER PLUS D'INFORMATIONS</button></center><br>
          </form>
    		</div>
      </div>
  	</div>
    <br>
    <?php 
    }
    ?>
		<footer id="footer">
			<div id="footer-inner">

			</div>
		</footer>
	</body>
</html>