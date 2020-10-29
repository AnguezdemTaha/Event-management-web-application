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
    <link href="projet_css/style2.css" rel="stylesheet">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
		    
		<title>PageEvnInfos</title>		
	</head>
	<body>
		<?php include("menu.php"); ?>
    <br><br>
    <?php
      srand(time(0));
      include('traitement_php/connexionPDO.php');
      if(isset($_POST['id_evn']) and isset($_POST['id_user'])) {
        $_SESSION['ID_evn']=$_POST['id_evn'];
        $_SESSION['ID_user']=$_POST['id_user'];
      }
      $reponse=$bdd->query('SELECT * FROM event Where ID_EVENT=\''.$_SESSION['ID_evn'].'\' ');
      if($donnee=$reponse->fetch()){?>
        <div id="container">
   	      <div class="col-md-8 col-lg-push-2">
   	        <div class="row">
   			      <br>
   		        <div class="col-md-4 ">
                <div class=row>
   		  		      <div class="col-md-12 ">
   			            <label><?php echo $donnee['EVENT_TITLE'] ?></label><br>
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
                  <label>Date debut: <?php echo $donnee['DATE_START'] ?></label><br>
                  <span class="glyphicon glyphicon-arrow-up"></span>
                  <label>Date fin: <?php echo $donnee['DATE_END'] ?></label><br>
                  <span class="glyphicon glyphicon-random"></span>
                  <label>Genre : <?php echo $donnee['TYPE_EVENT'] ?></label><br>
                </div>
            	  <div class="row">
            		  <div class="col-md-10 col-lg-push-1">
            			  <span class="glyphicon glyphicon-list"></span>
                    <label>DEsctiption : <?php echo $donnee['TYPE_EVENT'] ?></label>
            		  </div>
            	  </div>
              </div>
            </div>
            <div class="row">
    		      <div class="col-md-10 col-lg-push-1">
                <form method="post" action="traievninfo.php">
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
                  ?> />   
                  <label for="Participe">Participé </label><br />
                  <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-list"></span> CONFIRMER</button>
                </form >
              </div>
            </div>
            <div class="row">
              <input id="id_evn" name="id_evn" type="hidden" value=<?php echo $donnee['ID_EVENT'] ?>>
              <input id="id_user" name="id_user" type="hidden" value=<?php echo $donnee['ID_USER'] ?>>
    		    </div>
          </div>
      	</div>
        <br>
        <?php 
        }
        ?>
				<?php
          $datetime = date("Y-m-d ");
          if(strtotime($datetime) > strtotime($donnee['DATE_END'])){?>
            <div id="container">
              <div class="col-md-8 col-lg-push-2">
                <div class="col-md-8 ">
                  <form method="post" action="traifeed1.php">
                    <input id="id_evn" name="id_evn" type="hidden" value=<?php echo $donnee['ID_EVENT'] ?>>
                    <input id="id_user" name="id_user" type="hidden" value=<?php echo $donnee['ID_USER'] ?>>
                    <span class="glyphicon glyphicon-signal"></span><p><h4>feedback</h4></p>
                    <input type="radio" name="f" value="1" id="1" /> <label for="1">1</label>
                    <input type="radio" name="f" value="2" id="2" /> <label for="2">2</label>
                    <input type="radio" name="f" value="3" id="3" /> <label for="3">3</label>
                    <input type="radio" name="f" value="4" id="4" /> <label for="4">4</label>
                    <input type="radio" name="f" value="5" id="5" /> <label for="5">5</label>
                    <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-list"></span> CONFIRMER</button>
                  </form>
                </div>
                <div class="col-md-4 " >
                  <?php 
                    $reponse21=$bdd->prepare('SELECT AVG(FEEDBACK) AS feedback FROM infos WHERE  ID_EVENT=?  ');
                
                    $reponse21->execute(array($_SESSION['ID_evn']));
                    $donnee211=$reponse21->fetch(); 
                    $donnee21=$donnee211['feedback'];?>
                  <?php 
                    if($donnee21>0) { ?>
                    <span class="glyphicon glyphicon-star"></span><?php } else {?>
                    <span class="glyphicon glyphicon-star-empty"></span><?php } ?>
                  <?php 
                    if($donnee21>1) { ?>
                    <span class="glyphicon glyphicon-star"></span><?php } else {?>
                    <span class="glyphicon glyphicon-star-empty"></span><?php } ?>
                  <?php 
                    if($donnee21>2) { ?>
                    <span class="glyphicon glyphicon-star"></span><?php } else {?>
                    <span class="glyphicon glyphicon-star-empty"></span><?php } ?>
                  <?php 
                    if($donnee21>3) { ?>
                    <span class="glyphicon glyphicon-star"></span><?php } else { ?>
                    <span class="glyphicon glyphicon-star-empty"></span><?php } ?>
                  <?php 
                    if($donnee21>4) { ?>
                    <span class="glyphicon glyphicon-star"></span><?php } else { ?>
                    <span class="glyphicon glyphicon-star-empty"></span><?php } ?> 
                </div>
              </div>
            </div>
            <?php }
                  ?>				
						<?php 
              if($_SESSION['id']=$donnee['ID_USER'] ){?>
              <div id="container">
                <div class="col-md-8 col-lg-push-2">
                  <div class="col-md-6 ">
                    <div id="ok" class="wrapper" value="7">
                      <h3>Graphe des Participants/intéressants</h3>
                      <canvas id="myChart" width="800" height="400"></canvas>
                      <input id="tee1" name="tee1" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? ');
                      $var="1";
                      $reponse->execute(array($var,$_SESSION['ID_evn']));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                       ?>  
                      >
                      <input id="tee2" name="tee2" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? ');
                      $var="1";
                      $reponse->execute(array($var,$_SESSION['ID_evn']));
                      $donnee=$reponse->fetch();
                      echo $donnee['interese'];
                      ?>
                      >
                    </div>
                    <script src="scriptb.js"> </script>
                  </div>
                  <div class="col-md-6 ">
                    <div class="wrapper">
                      <h3>Participants/intéressants Par Jour </h3>
                      <!--nous pouvons faire ces plus de 100lignes suivant dans un seul boucle --> 
                      <canvas id="myChart1" width="800" height="400"></canvas>
                      <input id="d1p" name="d1p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d2p" name="d2p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 2*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d3p" name="d3p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 3*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d4p" name="d4p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 4*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d5p" name="d5p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 5*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d6p" name="d6p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 6*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d7p" name="d7p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 7*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d8p" name="d8p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 8*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                      echo $donnee['participe'];
                      ?>
                      > 
                      <input id="d9p" name="d9p" type="hidden" value=<?php 
                      $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                      $var="1";
                      $datetime =date("Y-m-d", time() - 9*60 * 60 * 24);
                      $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                      $donnee=$reponse->fetch();
                    echo $donnee['participe'];
                    ?>
                    > 
                    <input id="d10p" name="d10p" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(PARTICIPE) AS participe FROM infos WHERE PARTICIPE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 10*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['participe'];
                    ?>
                    > 
                    <input id="d1i" name="d1i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 1*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    >  
                    <input id="d2i" name="d2i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 2*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    >  
                    <input id="d3i" name="d3i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 3*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d4i" name="d4i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 4*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d5i" name="d5i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 5*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d6i" name="d6i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 6*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d7i" name="d7i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 7*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d8i" name="d8i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 8*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));
                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                    <input id="d9i" name="d9i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 9*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));

                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    >
                    <input id="d10i" name="d10i" type="hidden" value=<?php 
                    $reponse=$bdd->prepare('SELECT Count(INTERESE) AS interese FROM infos WHERE INTERESE =? and ID_EVENT=? and DATE_INFO=?');
                    $var="1";
                    $datetime =date("Y-m-d", time() - 10*60 * 60 * 24);
                    $reponse->execute(array($var,$_SESSION['ID_evn'],$datetime));

                    $donnee=$reponse->fetch();
                    echo $donnee['interese'];
                    ?>
                    > 
                  </div>
                  <script src="script.js"></script>
                </div>
              </div>
            </div>
            <?php } ?>
            <div id="container">
   	  			  <div class="col-md-8 col-lg-push-2">			
							  <form method="post" action="traicom.php">
							    <label for="Comm">Commentaire</label><br />
       						<textarea name="com" id="com" rows="3" cols="50"></textarea>
                  <br>
       						<button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-list"></span> CONFIRMER</button>
       					</form>
       				</div>
       			</div>
            <div id="container">
   	          <div class="col-md-8 col-lg-push-2">
       			    <div class="test2">
                  <?php
                    srand(time(0));
                    include('traitement_php/connexionPDO.php');
                    $reponse=$bdd->query('SELECT MESSAGE, ID_USER FROM coment_section where ID_EVENT= \''.$_SESSION['ID_evn'].'\'' );
                    $reponse2=$bdd->query('SELECT MESSAGE, ID_USER FROM coment_section where ID_EVENT= \''.$_SESSION['ID_evn'].'\'');
  
                    while($donnee=$reponse->fetch())
                    {?>
                    <?php
                    $reponse2=$bdd->query('SELECT USERNAME FROM user where ID_USER=\''.$donnee['ID_USER'].'\''  );
                    if($donnee2=$reponse2->fetch()){
                    echo $donnee2['USERNAME'] ; }
                    ?>:
                    <?php echo $donnee['MESSAGE'] ?>
                    <br> 
                    <?php 
                    }
                    ?>
		              </div>
       					</div>
						  </div>
  </body>
</html>