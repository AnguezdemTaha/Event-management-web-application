<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_comment_reply {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectReplyAction(){
    $reply= new Reply();
    $reply->setId($_POST['reply_id']);
    $this->model->selectReply($comment);
    
    }
  public function addReplyAction(){
    $reply= new Reply();
    $reply->setDate($_POST['date']);
    $reply->setContent($_POST['content']);
    $user= new User();
    $user->setId($_POST("user_id"));
    $comment= new Comment();
    $comment->setId($_POST("comment_id"));
    $reply->setUser($user);
    $reply->setEvent($event);
    

    $this->model->addReply($reply);
    
    }
  public function updateReplyAction(){
    $reply= new Reply();
    $reply->setId($_POST['reply_id']);
    $reply->setDate($_POST['date']);
    $reply->setContent($_POST['content']);
    $user= new User();
    $user->setId($_POST("user_id"));
    $comment= new Comment();
    $comment->setId($_POST("comment_id"));
    $reply->setUser($user);
    $reply->setEvent($event);

    $this->model->updateReply($reply);
    
    }
  public function deleteReplyAction(){
    $reply= new Reply();
    $reply->setDate($_POST['reply_id']);
    $this->model->deleteReply($reply);
   
    }

  
  

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectReply' :
      $this->selectReplyAction();
      break;
      case 'addReply' :
      $this->addReplyAction();
      break;
      case 'updateReply' :
      $this->updateReplyAction();
      break;
      case 'deleteReply' :
      $this->deleteReplyAction();
      break;
     
      
      
      

    }
  }

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>