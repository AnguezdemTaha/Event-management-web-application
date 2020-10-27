<?php
    //ouvrir session
  if(!isset($_SESSION)) 
  { 
    session_start(); 
  } 
  include('traitement_php/connexionPDO.php');
  $msg = '';

  $reponse = $bdd->prepare('SELECT * FROM user WHERE USERNAME = ? and PASSWORD = ?');
  if(isset($_SESSION['name']) and isset($_SESSION['motpasse'])  ){
    $reponse->execute(array($_SESSION['name'],$_SESSION['motpasse']));}
  else {
    $reponse->execute(array($_POST['lastName'],$_POST['pwd1']));}
  
  if($donnee=$reponse->fetch())
  {
  
   $_SESSION['id'] = $donnee['ID_USER'];
   $_SESSION['name'] = $donnee['USERNAME'];
   $_SESSION['email'] = $donnee['EMAIL'];
   $_SESSION['motpasse'] = $donnee['PASSWORD'];
   include('page_princ_utilisateur.php');
  }
  else {
      $msg = 'Veiullier saisir des information corrects';
      include('login2.php');
      }
?>