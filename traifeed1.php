<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  srand(time(0));
  include('traitement_php/connexionPDO.php');
  $msg = '';
  $reponse = $bdd->prepare('SELECT * FROM infos WHERE ID_USER = ? and ID_EVENT = ?');
  $reponse->execute(array($_SESSION['id'],$_POST['id_evn']));
  if($donnee=$reponse->fetch()){
  	$req=$bdd->prepare('UPDATE infos SET FEEDBACK= :feed WHERE ID_USER= :nom and ID_EVENT= :evn  ');
    if(isset($_POST['f'])){
  	$req->execute(array('feed'=>$_POST['f'],'nom'=>$_SESSION['id'],'evn'=>$_POST['id_evn']))
    ;}
  }
    

  
  else{  
  if(isset($_POST['f'])){  
  $bdd->exec('INSERT INTO infos(ID_EVENT,ID_USER,FEEDBACK) VALUES(\''.$_POST['id_evn'].'\',\''.$_SESSION['id'].'\' ,\''.$_POST['f'].'\'  )');}
  
   }
 
  
 // $reponse=$bdd->query('SELECT Id_Utilisateur FROM utilisateur WHERE Nom = ?  AND Mot de passe = ? ');
  //$reponse = $bdd->prepare('SELECT Id_Utilisateur FROM utilisateur WHERE Nom = ?  AND Mot de passe = ? ');
 // $reponse->execute(array($_POST['username'], $_POST['mot']));
  
  
  
//$_SESSION['username'] = $_POST['username'];
   include('page_evenement_info.php');
  
?>