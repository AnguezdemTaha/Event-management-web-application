<?php
  include('../Model/Model_user.php');
  include('../Model/Model_event.php');
  //include('formNewEmploye.php');
  include('../Model/User.class.php');
  //include('../Model/Student.class.php');
  //include('../Model/Club.class.php');
  
  if(!isset($_SESSION)) 
  { 
    session_start(); 
  }

  class controlleur_user {
  private $action;
  private $model;
  private $vue;
  private $model_event;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->model_event=new Model_event();
  $this->action="allusers";
  }

  public function selectAllStudentsAction(){
    $students=$this->model->selectAllStudents();
    echo json_encode($students); 
    }
  public function selectAllStudentsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $students=$this->model->selectAllStudentsWith($indice, $step);
    echo json_encode($students); 
    }
  public function selectAllClubsAction(){
    $clubs=$this->model->selectAllClubs();
    echo json_encode($clubs); 
    }
  public function selectAllClubsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $clubs=$this->model->selectAllClubsWith($indice, $step);
    echo json_encode($clubs); 
    }
  public function selectAllStudentsDemandsAction(){
    $students_demands=$this->model->selectAllStudentsDemands(); 
    echo json_encode($students_demands);   
    }
  public function selectAllStudentsDemandsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $students_demands=$this->model->selectAllStudentsDemandsWith($indice, $step); 
    echo json_encode($students_demands);   
    }
  public function selectAllClubsDemandsAction(){
    $clubs_demands=$this->model->selectAllClubsDemands();  
    echo json_encode($clubs_demands);  
    }
  public function selectAllClubsDemandsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $clubs_demands=$this->model->selectAllClubsDemandsWith($indice, $step);  
    echo json_encode($clubs_demands);  
    }
  public function selectUserAction(){
    $user= new User();
    $user->setMail($_Get['user_id']);
    $user=$this->model->selectUser($user);   
    echo json_encode($user); 
    }
  public function LoginAction(){
    $user= new User();
    $user->setMail($_POST["mail"]);
    $user->setPassword($_POST["password"]);
    $users=$this->model->Login($user);
    //on doit faite le test if nul and not here !!!
    //if user not null : remumbre session
    //$current_user=$_SESSION['current_user'] 
    //its a table
    $verify=null;
    foreach ($users as $user1){
      $verify =$user1["user_id"];
      $_SESSION["user_id"] = $user1["user_id"];
      $_SESSION["user_type"] = $user1["user_type"];
       //????
    }
    //default variable on the main page (event + users +......)
    $events=null;
    $users=null;
    //.... add every var nedded
    if($verify != null){
      if($_SESSION["user_type"]=="Student"){
        //list event if the user was student for default page content
        //$events=$this->model_event->selectAllEvents();
      }
      //list event if the user was student for default page content
      //$events=$this->model->selectAllEvents();
      require('../Views/eventpage.php');
    }

    }
//
  public function sendStudentDemandAction(){
    $student= new Student();
    $student->setMail($_POST['mail']);
    $student->setPassword($_POST['password']);
    $student->setProfile_picture($_POST['picture']);
    $student->setType($_POST['type']);
    $student->setPhone($_POST['phone']);
    $student->setAccepted("0");

    $student->setBirthday($_POST['birthday']);
    $student->setF_name($_POST['f_name']);
    $student->setL_name($_POST['l_name']);
    $this->model->sendStudentDemand($student);    
    }
  public function sendClubDemandAction(){
    $club= new Club();
    $club->setMail($_POST['mail']);
    $club->setPassword($_POST['password']);
    $club->setProfile_picture($_POST['picture']);
    $club->setType($_POST['type']);
    $club->setPhone($_POST['phone']);
    $club->setAccepted("0");

    $club->setName($_POST['club_name']);
    $this->model->sendClubDemand($club);     
    }
   public function deleteUserAction(){
    $user= new user();
    $user->setMail($_Get['id']);
    $this->model->deleteUser($user);
    }
      //....
  public function updateStudentAction(){
    $student= new Student();
    $student->setMail($_POST['user_id']);
    $student->setMail($_POST['mail']);
    $student->setPassword($_POST['password']);
    $student->setProfile_picture($_POST['picture']);
    $student->setType($_POST['type']);
    $student->setPhone($_POST['phone']);
    $student->setAccepted($_POST['accepted']);

    
    $this->model->updateStudent($student);   
    }
  public function updateClubAction(){
    $club= new User();
    $club->setMail($_POST['user_id']);
    $club->setMail($_Get['mail']);
    $club->setPassword($_POST['password']);
    $club->setProfile_picture($_POST['picture']);
    $club->setType($_POST['type']);
    $club->setPhone($_POST['phone']);
    $club->setAccepted($_POST['accepted']);

    
    $this->model->updateClub($club);  
    }

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectAllStudents' :
      $this->selectAllStudentsAction();
      break;
      case 'selectAllStudentsWith' :
      $this->selectAllStudentsWithAction();
      break;
      case 'selectAllClubs' :
      $this->selectAllClubsAction();
      break;
      case 'selectAllClubsWith' :
      $this->selectAllClubsWithAction();
      break;
      case 'selectAllStudentsDemands' :
      $this->selectAllStudentsDemandsAction();
      break;
      case 'selectAllStudentsDemandsWith' :
      $this->selectAllStudentsDemandsWithAction();
      break;
      case 'selectAllClubsDemands' :
      $this->selectAllClubsDemandsAction();
      break;
      case 'selectAllClubsDemandsWith' :
      $this->selectAllClubsDemandsWithAction();
      break;
      case 'selectUser' :
      $this->selectUserAction();
      break;
      case 'Login' :
      $this->LoginAction();
      break;
      case 'sendStudentDemand' :
      $this->sendStudentDemandAction();
      break;
      case 'sendClubDemand' :
      $this->sendClubDemandAction();
      break;
      case 'updateStudent' :
      $this->updateStudentAction();
      
      break;
      case 'updateClub' :
      $this->updateClubAction();
      break;
      

    }
  }

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur_user();
  $c->action();


?>