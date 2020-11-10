<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/user.class.php');

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
$user= new User();
$user->setMail($_POST['action']);
$id_table=$this->modele->selectUserIdByMail($user);
//$data=$users[0];
//include('../Views/index.php');
//ajaxtest
$student_id=0;
foreach ($id_table as $id) {
        $student_id=$id[0]; //????
}
$test=$student_id[0];
$movie1 = array( "title" => "Rear Window jqeury mvc xxxxx",
                "director" => "Alfred Hitchcock",
                "year" => 1954,
                "Success" => 1 );
//$test=json_encode($movie1);

$movie = array( "Rear Window jqeury mvc",
                "Alfred Hitchcock",
                1954,
                1 ,
                $movie1);

echo json_encode($student_id); 


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
/*testing jquery post methode */
//if( isset($_POST['action'])$action=$_POST['action'];

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
//jquerytest
case 'showme' :
$this->allAction();
break;

}
}

}
// call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

//presque router
$c=new controlleur();
$c->action();


?>