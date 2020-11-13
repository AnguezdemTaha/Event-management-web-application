<?php
  
  //est_ce le includ est important ?
  include ('User.class.php');
  class Club extends User
{
private $club_id
private $club_name;


function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted, $club_name) {
    parent::__construct($user_mail, $user_password, $user_profile_picture, 'club' , $user_phone, '1');

    $this->club_name = $club_name;
    

  }

/*getter + setters*/
//getters
public function getClub_id()
    {
        return $this->club_id;
    }
public function getName()
    {
        return $this->club_name;
    }
//setters
public function setClub_id($club_id)
    {
        $this->club_id = $club_id;
        return $this;
    }
public function setName($club_name)
    {
        $this->club_name = $club_name;
        return $this;
    }



}