<?php
  
  //est_ce le includ est important ?
  include ('User.class.php');
  class Club extends User
{
private $club_name;


function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted, $club_name) {
    parent::__construct($user_mail, $user_password, $user_profile_picture, 'club' , $user_phone, '1');

    $this->club_name = $club_name;
    

  }

/*getter + setters*/
//getters
public function getName()
    {
        return $this->club_name;
    }
//setters
public function setName($club_name)
    {
        $this->club_name = $club_name;
        return $this;
    }



}