<?php
  srand(time(0));
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include('traitement_php/connexionPDO.php');

  $msg1 = '';
  $reponse = $bdd->prepare('SELECT ID_EVENT FROM event WHERE EVENT_TITLE = ? ');
  $reponse->execute(array($_POST['name']));
  if($donnee=$reponse->fetch())
  {
  $msg1 = 'Veiullier changer le nome ,il exist deja';
      include('page_cree_evn.php');
  }
  else {
    $imagename=$_FILES["img"]["name"];  
  //le comtenu de l'image a inserer dans la base de donnée  
  $imagetmp=addslashes (file_get_contents($_FILES['img']['tmp_name']));
  $bdd->exec('INSERT INTO event (EVENT_TITLE,ID_USER,PICTURE,DATE_START,DATE_END,LOCATION,TYPE_EVENT) values (\''.$_POST['name'].'\',\''.$_SESSION['id'].'\',\''.$imagetmp.'\',\''.$_POST['date_d'].'\',\''.$_POST['date_f'].'\',\''.$_POST['ville'].'\',\''.$_POST['type'].'\')');
     $msg = 'votre evn a ete cree avec succe';
//maintenent on va deplacer l'image dans un reperoitoir nomé : images
  if(isset($imagename)){
    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];
    if(!empty($imgFile)){
      $upload_dir = 'images/'; // reperoitoir a enregestrer les images des evns
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // image extension
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
      // renomer l'image par le numero de l'venement qui lui correspond
      $reponse1=$bdd->query('SELECT MAX(ID_EVENT) as max FROM event');
      while($donnee1=$reponse1->fetch()){
      $id_next=$donnee1['max'];}
      $coverpic = $id_next.".".$imgExt;
      // validité de l'extension
        if(in_array($imgExt, $valid_extensions)){
          // l'image Max size
          if($imgSize < 5000000){
            move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
          }
        }
      }
    }
    include('page_princ_utilisateur.php');    
  }
?>