<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_event_participation {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectParticipationAction(){
    $participation= new Participation();
    $participation->setId($_POST['participation_id']);
    $this->model->selectParticipation($participation);
     
    }
  public function addParticipationAction(){
    $participation= new Participation();
    $participation->setDate($_POST['date']);

    $user= new User();
    $user->setId($_POST("user_id"));
    $event= new Event();
    $event->setId($_POST("event_id"));
    $participation->setUser($user);
    $participation->setEvent($event);

    

    $this->model->addParticipation($participation);
    
    }

  public function deleteParticipationAction(){
    $participation= new Participation();
    $participation->setDate($_POST['participation_id']);

    $this->model->deleteParticipation($participation);
   
    }

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectParticipation' :
      $this->selectParticipationAction();
      break;
      case 'addParticipation' :
      $this->addParticipationAction();
      break;
      case 'deleteParticipation' :
      $this->deleteParticipationAction();
      break;

      
      
      

    }
  }
  

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>