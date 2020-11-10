<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/user.class.php');
  include('../Model/student.class.php');
  include('../Model/club.class.php');

  class controlleur {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectAllStudentsAction(){
    $students=$this->model->selectAllStudents();
    echo json_encode($student_id); 
    }
  public function selectAllClubsAction(){
    $clubs=$this->model->selectAllClubs();
    echo json_encode($student_id); 
    }
  public function selectAllStudentsDemandsAction(){
    $students_demands=$this->model->selectAllStudentsDemands(); 
    echo json_encode($student_id);   
    }
  public function selectAllClubsDemandsAction(){
     $clubs_demands=$this->model->selectAllClubsDemands();  
     echo json_encode($student_id);  
    }
  public function selectUserByMailAction(){
    $user= new User();
    $user->setMail($_Get['mail']);
    $user=$this->model->selectUserByMail($user);   
    echo json_encode($user); 
    }
  public function LoginAction(){
    $user= new User();
    $user->setMail($_POST['mail']);
    $user->setPassword($_POST['password']);
    $users=$this->model->Login($user);
    //on doit faite le test if nul and not here !!!
    //if user not null : remumbre session
    //$current_user=$_SESSION['current_user'] 
    echo json_encode($users);   
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
    $user->setMail($_Get['mail']);
    $this->model->deleteUser($user);
    }
      //....
  public function updateStudentAction(){
    $student= new Student();
    $student->setMail($_POST['mail']);
    $student->setPassword($_POST['password']);
    $student->setProfile_picture($_POST['picture']);
    $student->setType($_POST['type']);
    $student->setPhone($_POST['phone']);
    $student->setAccepted($_POST['accepted']);

    $oldstudent=new User();
    $student->setMail($_POST['old_mail']);
    $this->model->updateStudent($student, $oldstudent);   
    }
  public function updateClubAction(){
    $club= new User();
    $club->setMail($_Get['mail']);
    $club->setPassword($_POST['password']);
    $club->setProfile_picture($_POST['picture']);
    $club->setType($_POST['type']);
    $club->setPhone($_POST['phone']);
    $club->setAccepted($_POST['accepted']);

    $oldclub=new User();
    $club->setMail($_POST['old_mail']);
    $this->model->updateClub($club, $oldclub);  
    }

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectAllStudents' :
      $this->selectAllStudentsAction();
      break;
      case 'selectAllClubs' :
      $this->selectAllClubsAction();
      break;
      case 'selectAllStudentsDemands' :
      $this->selectAllStudentsDemandsAction();
      break;
      case 'selectAllClubsDemands' :
      $this->selectAllClubsDemandsAction();
      break;
      case 'selectUserByMail' :
      $this->selectUserByMailAction();
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
      $action="all";
      break;
      case 'updateClub' :
      $this->updateClubAction();
      break;
      

    }
  }

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>