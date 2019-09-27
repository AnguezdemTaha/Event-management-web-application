<?php
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include('traitement_php/connexionPDO.php');
  if($_POST['mot']!=$_POST['mot1']){
    $msg = 'verifier les neuveux mot de passe';
    include('parametres.php');
  }
  else{
      if($_SESSION['motpasse']!=$_POST['cmot']){
        $msg = 'verifier lancien mot de passe';
        include('parametres.php');
      }
      else{
        $req=$bdd->prepare('UPDATE user SET  USERNAME = :unom, PASSWORD = :umot , BIRTH_DATE = :d , EMAIL = :email WHERE ID_USER = :id');
      $req->execute(array(
      'unom'=>$_POST['username'],
      'umot'=>$_POST['mot'],
      'd'=>$_POST['date_n'],
      'email'=>$_POST['email'],
      'id'=>$_SESSION['id']
      ));
      $msg = 'succe update';
      include('login2.php');
      session_destroy();
    }
  }
?>