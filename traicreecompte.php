<?php
  srand(time(0));
  include('traitement_php/connexionPDO.php');
  $msg = '';
  $reponse = $bdd->prepare('SELECT Id_USER FROM user WHERE USERNAME = ? ');
  $reponse->execute(array($_POST['lastName']));
  if($donnee=$reponse->fetch())
  {
    $msg = 'Veiullier changer le nome ;il exist deja';
      include('creecompte.php');
  }
  else {
    if($_POST['pwd1']==$_POST['pwd2']){
    $bdd->exec('INSERT INTO user (USERNAME,PASSWORD,BIRTH_DATE,EMAIL) values (\''.$_POST['lastName'].'\',\''.$_POST['pwd1'].'\',\''.$_POST['age'].'\',\''.$_POST['email'].'\')');
      $msg = 'votre compte a ete cree avec succe';
      include('login2.php');}
    else{
      $msg = 'Veuillier verifier votre mot de passe';
      include('creecompte.php');
    }
    }
?>