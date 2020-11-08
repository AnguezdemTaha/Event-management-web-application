<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');

  class controlleur {
private $action;
private $modele;
private $vue;

public function __construct()
{
$this->modele=new Model_user ();
$this->action="allusers";
}

public function allAction()
{
$users=$this->modele->allusers();
include('../Views/index.php');
//$this->vue=new v_all("all");
//$this->vue->all($employes);
//$this->vue->afficher();
}

public function newAction()
{
$employe[0]=$_POST['nom'];
$employe[1]=$_POST['prenom'];
$employe[2]=$_POST['Adresse'];


$employe[3]=$_POST['service'];

$this->modele->addNewEmploye($employe);
//include('formNewEmploye.php');
}

public function delAction()
{
$num=$_GET['supp'];
$this->modele->deleteEmploye(array($num));
//header('location:controlleur.php');
}

public function action()
{
$action="allusers";
if(isset($_GET['action']))
$action=$_GET['action'];
if(isset($_POST['action']))
$action=$_POST['action'];
switch($action)
{
case 'allusers' :
$this->allAction();
break;
case 'supp' :
$this->delAction();
$action="all";
break;
case 'modf' :
$this->addAction();
break;
}
}

}
// call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

//presque router
$c=new controlleur();
$c->action();


?>