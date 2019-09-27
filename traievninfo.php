<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  srand(time(0));
  include('traitement_php/connexionPDO.php');
  $msg = '';
  $reponse = $bdd->prepare('SELECT * FROM infos WHERE ID_USER = ? and ID_EVENT = ?');
  $reponse->execute(array($_SESSION['id'],$_POST['t']));
  $datetime =date("Y-m-d", time() - 60 * 60 * 24);
  if($donnee=$reponse->fetch()){
  	$req=$bdd->prepare('UPDATE infos SET PARTICIPE= :par,INTERESE= :inte,DATE_INFO= :dat WHERE ID_USER= :nom and ID_EVENT= :evn  ');
    if(isset($_POST['Participe']) and isset($_POST['Interese'])){
  	$req->execute(array('par'=>$_POST['Participe'],'inte'=>$_POST['Interese'],'nom'=>$_SESSION['id'], 'evn'=>$_POST['t'], 'dat'=>$datetime));}
    else{
      if(!isset($_POST['Participe']) ){
        $req->execute(array('par'=>0,'inte'=>$_POST['Interese'],'nom'=>$_SESSION['id'], 'evn'=>$_POST['t'], 'dat'=>$datetime));}
        else{
          if(!isset($_POST['Interese']) ){
        $req->execute(array('par'=>$_POST['Participe'],'inte'=>0,'nom'=>$_SESSION['id'], 'evn'=>$_POST['t'], 'dat'=>$datetime));}
        }
    }

  }
  else{  
  if(isset($_POST['Participe']) and isset($_POST['Interese'])){  
  $bdd->exec('INSERT INTO infos(ID_EVENT,ID_USER,PARTICIPE,INTERESE,DATE_INFO) VALUES(\''.$_POST['t'].'\',\''.$_SESSION['id'].'\' ,\''.$_POST['Participe'].'\' , \''.$_POST['Interese'].'\' ,\''.$datetime.'\')');}
  else{
      if(!isset($_POST['Participe']) ){$bdd->exec('INSERT INTO infos(ID_EVENT,ID_USER,PARTICIPE,INTERESE,DATE_INFO) VALUES(\''.$_POST['t'].'\',\''.$_SESSION['id'].'\' ,0, \''.$_POST['Interese'].'\',\''.$datetime.'\' )');}

      else{
          if(!isset($_POST['Interese']) ){$bdd->exec('INSERT INTO infos(ID_EVENT,ID_USER,PARTICIPE,INTERESE,DATE_INFO) VALUES(\''.$_POST['t'].'\',\''.$_SESSION['id'].'\' ,\''.$_POST['Participe'].'\' , 0 ,\''.$datetime.'\')');}

          }
        }
   }
   include('page_evenement_info.php');
?>