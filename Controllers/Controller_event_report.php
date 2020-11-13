<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_event_report {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectReportAction(){
    $report= new Report();
    $report->setId($_POST['report_id']);
    $this->model->selectReport($report);
     
    }
  public function addReportAction(){
    $report= new Report();
    $report->setDate($_POST['date']);

    $user= new User();
    $user->setId($_POST("user_id"));
    $event= new Event();
    $event->setId($_POST("event_id"));
    $report->setUser($user);
    $report->setEvent($event);

    

    $this->model->addReport($report);
    
    }

  
    

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectReport' :
      $this->selectReportAction();
      break;
      case 'addReport' :
      $this->addReportAction();
      break;

      
      
      

    }
  }
  

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>