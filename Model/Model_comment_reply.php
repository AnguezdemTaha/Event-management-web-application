<?php
  include 'Db_connect.php';
  //include 'user.class.php'
  class Model_event_reply {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }

    //function utilitaire help us to get id of the event club(as user)
    public function selectUserIdByReply($reply){
      $query=$this->db->prepare('select user_id from user where user_mail= ?');
      $query->execute([$reply->getUser()->getMail()]);
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

    public function selectReplyById($reply_id){
      $query=$this->db->prepare('select * from event_reply where reply_id= ?');
      $query->execute([$reply_id]);
      return $query->fetchAll();
    }

    

    public function addReply($reply, $comment_id,){//used in send demand event bu the club  rq: comment containe attr user so no neeed to declare user too in attr
      $user_id=$this->selectUserIdByEvent($reply);
      $query=$this->db->prepare('INSERT INTO comment_reply (`user_id`, `comment_id`, reply_content`, `reply_date`) VALUES (?, ?, ?, ?)');
      $query->execute([$user_id, $comment_id, $reply->getContent(), $reply->getDate()]); 
    }
    public function updateReply($reply, $reply_id){
      $query=$this->db->prepare('UPDATE comment_reply set reply_content = ? WHERE reply_id = ?');
      $query->execute([$reply->getContent(), $reply_id]);
    }
    public function deleteReply($reply_id){
      $query=$this->db->prepare('DELETE FROM reply_reply WHERE reply_id = ?');
      $query->execute($reply_id);
    }

    
    

  }
?>