<?php
  include('../Model/Model_user.php');
  //include('formNewEmploye.php');
  include('../Model/event.class.php');

  class controlleur_event_comment {
  private $action;
  private $model;
  private $vue;

  public function __construct()
  {
  $this->model=new Model_user ();
  $this->action="allusers";
  }

  public function selectCommentAction(){
    $comment= new Comment();
    $comment->setId($_POST['comment_id']);
    $this->model->selectComment($comment);
    
    }
  public function addCommentAction(){
    $comment= new Comment();
    $comment->setDate($_POST['date']);
    $comment->setContent($_POST['content']);
    $user= new User();
    $user->setId($_POST("user_id"));
    $event= new Event();
    $event->setId($_POST("event_id"));
    $comment->setUser($user);
    $comment->setEvent($event);
    

    $this->model->addComment($comment);
    
    }
  public function updateCommentAction(){
    $comment= new Comment();
    $comment->setId($_POST['comment_id']);
    $comment->setDate($_POST['date']);
    $comment->setContent($_POST['content']);
    $user= new User();
    $user->setId($_POST("user_id"));
    $event= new Event();
    $event->setId($_POST("event_id"));
    $comment->setUser($user);
    $comment->setEvent($event);

    $this->model->updateComment();
    
    }
  public function deleteCommentAction(){
    $comment= new Comment();
    $comment->setDate($_POST['comment_id']);
    $this->model->deleteComment($comment);
   
    }

  public function selectAllCommentReplysAction(){
    $comments=$this->model->selectAllCommentReplys();
    echo json_encode($comments); 
    }
  public function selectCommentReplysWithAction(){
    $comments=$this->model->selectCommentReplysWith();
    echo json_encode($comments); 
    }
  

  public function action(){
    $action="selectAllStudents";
    if(isset($_GET['action']))$action=$_GET['action'];
    if(isset($_POST['action']))$action=$_POST['action'];
    switch($action){
      case 'selectComment' :
      $this->selectCommentAction();
      break;
      case 'addComment' :
      $this->addCommentAction();
      break;
      case 'updateComment' :
      $this->updateCommentAction();
      break;
      case 'deleteComment' :
      $this->deleteCommentAction();
      break;
      case 'selectAllCommentReplys' :
      $this->selectAllCommentReplysAction();
      break;
      case 'selectCommentReplysWith' :
      $this->selectAllCommentReplysWithAction();
      break;
      
      
      

    }
  }

  }
  // call fonction action() bcs you have last page passed to controller/... witch cotinues parametre and the action will call the appropiete fonction ezez

  //presque router
  $c=new controlleur();
  $c->action();


?>