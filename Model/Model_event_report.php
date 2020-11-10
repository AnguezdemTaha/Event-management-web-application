<?php
  include 'Db_connect.php';
  //include 'user.class.php'
  class Model_event_report {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }

    //function utilitaire help us to get id of the event club(as user)
    public function selectUserIdByReport($report){
      $query=$this->db->prepare('select user_id from user  where user_mail= ?');
      $query->execute([$report->getUser()->getMail()]);
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

    public function selectReportById($report_id){
      $query=$this->db->prepare('select * from event_report where report_id= ?');
      $query->execute([$report_id]);
      return $query->fetchAll();
    }

    
    public function addReport($report, $report_id,){//used in send demand event bu the club  rq: comment containe attr user so no neeed to declare user too in attr
      $user_id=$this->selectUserIdByEvent($feedback);
      $query=$this->db->prepare('INSERT INTO event_report (`user_id`, `event_id`,`report_date`, `report_description`) VALUES (?, ?, ?, ?)');
      $query->execute([$user_id, $event_id, $report->getDate(), $report->getDescription()]); 
    }
    
    ////
    
  }
?>