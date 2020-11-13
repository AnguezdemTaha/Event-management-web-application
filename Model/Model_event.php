<?php
  //include 'Db_connect.php';
  //include 'user.class.php'
  class Model_event {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }

    //function utilitaire help us to get id of the event club(as user)
    public function selectUserIdByEvent($event){
      
      $query=$this->db->prepare('select user_id from user  where user_mail= ?');
      $query->execute([$event->getUser()->getMail()]);
      $query->fetchAll();
      //return the id user club
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $query->fetchAll();;//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      return $user_id;
    }

    public function selectAllEvents(){
      $query=$this->db->prepare('select * from event where event_accepted = ?');
      $query->execute(['1']);
      return $query->fetchAll();
    }
    public function selectEvent($event){
      $query=$this->db->prepare('select * from event where event_id= ? and event_accepted= ?');
      $query->execute([$event->getId(),"1"]);
      return $query->fetchAll();
    }

    public function selectEventWith($indice, $step){//select k(=steep) event after k*indice first event : used in event pagination
      //LIMIT 5, 10; selct from 5 to 15 rows rusults= 10rows from the row 5
      $query=$this->db->prepare('select * from event where event_accepted = ? LIMIT ?, ?');//i dont know if limit ? is working 
      $query->execute(['1',(($indice-1)*$step)+1,$step]);
      return $query->fetchAll();
    }

    public function addEvent($event){//used in send demand event bu the club
      //$user_id=$this->selectUserIdByEvent($event);
      $query=$this->db->prepare('INSERT INTO event(`event_name`, `event_start_date`, `event_end_date`, `event_picture`, `event_description`, `event_accepted, `event_creation_date`, `user_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
      $query->execute([$event->getName(), $event->getStart_date(), $event->getEnd_date(), $event->getPicture(), $event->getDescription(), $event->getAccepted(), $event->getCreation_date(), $event->getUser()->getId()]); 

    }
    public function updateEvent($event){
      $query=$this->db->prepare('UPDATE event set event_name = ?, event_start_date = ?, event_end_date = ?,
      event_picture = ?, event_description = ?, event_accepted= ?, event_creation_date= ?, user_id= ? WHERE event_id = ?');
      $query->execute([$event->getName(), $event->getStart_date(), $event->getEnd_date(), $event->getPicture(), $event->getDescription(), $event->getAccepted(), $event->getCreation_date(), $event->getId()]);
    }
    public function deleteEvent($event){
      $query=$this->db->prepare('DELETE FROM event WHERE event_id = ?');
      $query->execute($event->getId());
    }

    ////

    public function selectAllEventFeedbacks($event){
      $query=$this->db->prepare('select * from event_feedback where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }
    
    public function selectAllEventParticipations($event){
      $query=$this->db->prepare('select * from event_participation where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }
    public function selectAllEventReports($event){
      $query=$this->db->prepare('select * from event_report where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }
    public function selectAllEventComments($event){
      $query=$this->db->prepare('select * from event_comment where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }
    //factors like average max min ... if we need them ofc
    public function selectAverageEventFeedbacks($event){
      $query=$this->db->prepare('select AVG(feedback_note) from event_feedback where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }
    public function selectCountEventParticipations($event){
      $query=$this->db->prepare('select COUNT(*) from event_participation where event_id = ?');
      $query->execute([$event->getId()]);
      return $query->fetchAll();
    }

    public function selectEventCommentsWith($indice, $step){//select k(=steep) event after k*indice first event : used in event pagination
      //LIMIT 5, 10; selct from 5 to 15 rows rusults= 10rows from the row 5
      $query=$this->db->prepare('select * from event_comment where LIMIT ?, ?');//i dont know if limit ? is working 
      $query->execute([(($indice-1)*$step)+1,$step]);
      return $query->fetchAll();
    }

    public function selectEventFeedbacksWith($indice, $step){//select k(=steep) event after k*indice first event : used in event pagination
      //LIMIT 5, 10; selct from 5 to 15 rows rusults= 10rows from the row 5
      $query=$this->db->prepare('select * from event_feedback where LIMIT ?, ?');//i dont know if limit ? is working 
      $query->execute([(($indice-1)*$step)+1,$step]);
      return $query->fetchAll();
    }

    public function selectEventReportsWith($indice, $step){//select k(=steep) event after k*indice first event : used in event pagination
      //LIMIT 5, 10; selct from 5 to 15 rows rusults= 10rows from the row 5
      $query=$this->db->prepare('select * from event_report where LIMIT ?, ?');//i dont know if limit ? is working 
      $query->execute([(($indice-1)*$step)+1,$step]);
      return $query->fetchAll();
    }

////

  }
?>