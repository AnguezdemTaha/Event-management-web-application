<?php
  include 'Db_connect.php';
  //include 'user.class.php'
  class Model_event_comment {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }

    //function utilitaire help us to get id of the event club(as user)
    public function selectUserIdByComment($comment){
      $query=$this->db->prepare('select user_id from user where user_mail= ?');
      $query->execute([$comment->getUser()->getMail()]);
      return $query->fetchAll();
      //return the id user club
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $query->fetchAll();;//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      return $user_id;
    }

    public function selectCommentById($comment_id){
      $query=$this->db->prepare('select * from event_comment where comment_id= ?');
      $query->execute([$comment_id]);
      return $query->fetchAll();
    }

    

    public function addComment($comment, $event_id,){//used in send demand event bu the club  rq: comment containe attr user so no neeed to declare user too in attr
      $user_id=$this->selectUserIdByEvent($comment);
      $query=$this->db->prepare('INSERT INTO event_comment (`user_id`, `event_id`, `comment_content`, `comment_date`) VALUES (?, ?, ?, ?)');
      $query->execute([$user_id, $event_id, $comment->getContent(), $comment->getDate()]); 
    }
    public function updateComment($comment, $comment_id){
      $query=$this->db->prepare('UPDATE event_comment set comment_content = ? WHERE comment_id = ?');
      $query->execute([$comment->getContent(), $comment_id]);
    }
    public function deleteComment($comment_id){
      $query=$this->db->prepare('DELETE FROM event_comment WHERE comment_id = ?');
      $query->execute($comment_id);
    }

    ////
    public function selectAllCommentReplys($comment_id){
      $query=$this->db->prepare('select * from comment_reply where comment_id = ?');
      $query->execute([$comment_id]);
      return $query->fetchAll();
    }

    public function selectCommentReplysWith($indice, $step){//select k(=steep) event after k*indice first event : used in event pagination
      //LIMIT 5, 10; selct from 5 to 15 rows rusults= 10rows from the row 5
      $query=$this->db->prepare('select * from comment_reply LIMIT ?, ?');//i dont know if limit ? is working 
      $query->execute([(($indice-1)*$step)+1,$step]);
      return $query->fetchAll();
    }

  }
?>