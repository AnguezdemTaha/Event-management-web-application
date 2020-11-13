<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_event_feedback {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectFeedbackAction(){
    $feedback= new Feedback();
    $feedback->setId($_POST['feedback_id']);
    $this->model->selectFeedback($feedback);
     
    }
  public function addFeedbackAction(){
    $feedback= new Feedback();
    $feedback->setDate($_POST['date']);
    $feedback->setNote($_POST['note']);
    $feedback->setDescription($_POST['description']);

    $user= new User();
    $user->setId($_POST("user_id"));
    $event= new Event();
    $event->setId($_POST("event_id"));
    $feedback->setUser($user);
    $feedback->setEvent($event);

    

    $this->model->addFeedback($feedback);
    
    }
  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectFeedback' :
      $this->selectFeedbackAction();
      break;
      case 'addFeedback' :
      $this->addFeedbackAction();
      break;
      
      
      
      

    }
  }
  

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>