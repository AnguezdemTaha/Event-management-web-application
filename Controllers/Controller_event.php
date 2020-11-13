<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_event {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_event();
  $this->action="allusers";
  }

  public function selectAllEventsAction(){
    $events=$this->model->selectAllEvents();
    echo json_encode($events); 
    }
  public function selectEventAction(){
    $event= new Event();
    $event->setId($_POST["event_id"]);
    $event=$this->model->selectEventById($event);
    echo json_encode($event); 
    }
  public function selectEventWithAction(){
    //exm
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $events=$this->model->selectEventWith($indice, $step); 
    echo json_encode($events);   
    }
  public function addEventAction(){
    $event= new Event();
    $event->setName($_POST['name']);
    $event->setStart_date($_POST['start_date']);
    $event->setEnd_date($_POST['end_date']);
    $event->setDescription($_POST['description']);
    $event->setPicture($_POST['picture']);
    $event->setCreation_date($_POST['creation_date']);
    $event->setAccepted($_POST['accepted']);

    $club= new Club();
    //club from sessions
    $event->setClub($club);
    
    $this->model->addEvent($event);    
    }
  public function updateEventAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $event->setName($_POST['name']);
    $event->setStart_date($_POST['start_date']);
    $event->setEnd_date($_POST['end_date']);
    $event->setDescription($_POST['description']);
    $event->setPicture($_POST['picture']);
    $event->setCreation_date($_POST['creation_date']);
    $event->setAccepted($_POST['accepted']);

    $club= new Club();
    //club from sessions
    $event->setClub($club);
    $this->model->updateEvent($event);   
    }
  public function deleteEventAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $this->model->deleteEvent($event);    
    }
//
  public function selectAllEventFeedbacksAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $feedbacks=$this->model->selectAllEventFeedbacks($event); 
    echo json_encode($feedbacks);    
    }
  public function selectAllEventParticipationsAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $participations=$this->model->selectAllEventParticipations($event);  
    echo json_encode($participations);    
    }
   public function selectAllEventReportsAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $reports=$this->model->selectAllEventReports($event);
    echo json_encode($reports); 
    }

  public function selectAllEventCommentsAction(){
    $event= new Event();
    $event->setName($_POST['event_id']);
    $comments=$this->model->selectAllEventComments($event);  
    echo json_encode($comments);  
    }
  public function selectEventCommentsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $comments=$this->model->selectEventCommentsWith($indice, $step); 
    echo json_encode($comments);  
    }
  public function selectEventFeedbacksWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $comments=$this->model->selectEventFeedbacksWith($indice, $step); 
    echo json_encode($comments);  
    }
  public function selectEventReportsWithAction(){
    $indice= $_POST["indice"];
    $step= $_POST["step"];
    $comments=$this->model->selectEventReportsWith($indice, $step); 
    echo json_encode($comments);  
    }

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectAllEvents' :
      $this->selectAllEventsAction();
      break;
      case 'selectEvent' :
      $this->selectEventAction();
      break;
      case 'selectEventWith' :
      $this->selectEventWithAction();
      break;
      case 'addEvent' :
      $this->addEventAction();
      break;
      case 'updateEvent' :
      $this->updateEventAction();
      break;
      case 'deleteEvent' :
      $this->deleteEventAction();
      break;
      case 'selectAllEventFeedbacks' :
      $this->selectAllEventFeedbacksAction();
      break;
      case 'selectAllEventParticipations' :
      $this->selectAllEventParticipationsAction();
      break;
      case 'selectAllEventComments' :
      $this->selectAllEventCommentsAction();
      break;
      case 'selectAllEventReports' :
      $this->selectAllEventReportsAction();
      break;
      case 'selectEventCommentsWith' :
      $this->selectEventCommentsWithAction();
      break;
      case 'selectEventFeedbacksWith' :
      $this->selectEventFeedbacksWithAction();
      break;
      case 'selectEventReportsWith' :
      $this->selectEventReportsWithAction();
      
      
      

    }
  }

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>