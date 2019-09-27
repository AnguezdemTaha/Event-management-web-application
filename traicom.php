<?php
  srand(time(0));
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include('traitement_php/connexionPDO.php');
  
  $bdd->exec('INSERT INTO coment_section(ID_EVENT,ID_USER, MESSAGE) VALUES(
  	\''.$_SESSION['ID_evn'].'\',\''.$_SESSION['id'].'\',\''.$_POST['com'].'\')');
  include('page_evenement_info.php');
?>