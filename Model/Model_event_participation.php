<?php
  include 'Db_connect.php';
  //include 'user.class.php'
  class Model_event_participation {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }

    //function utilitaire help us to get id of the event club(as user)
    public function selectUserIdByParticipation($participation){
      $query=$this->db->prepare('select user_id from user  where user_mail= ?');
      $query->execute([$participation->getUser()->getMail()]);
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

    public function selectParticipationById($participation_id){
      $query=$this->db->prepare('select * from event_participation where participation_id= ?');
      $query->execute([$participation_id]);
      return $query->fetchAll();
    }

    
    public function addParticipation($participation, $participation_id,){//used in send demand event bu the club  rq: comment containe attr user so no neeed to declare user too in attr
      $user_id=$this->selectUserIdByEvent($participation);
      $query=$this->db->prepare('INSERT INTO event_participation (`user_id`, `event_id`,`participation_date`) VALUES (?, ?, ?, ?)');
      $query->execute([$user_id, $event_id, $participation->getDate()]); 
    }
    public function deleteParticipation($participation_id){
      $query=$this->db->prepare('DELETE FROM event_participation WHERE participation_id = ?');
      $query->execute($participation_id);
    }
    ////
    
  }
?>