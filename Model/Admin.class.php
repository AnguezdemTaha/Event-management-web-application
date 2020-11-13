<?php
  
  //est_ce le includ est important ?
  include ('User.class.php');
  class Admin extends User
{
private $admin_id;

function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted, $club_name) {
    parent::__construct($user_mail, $user_password, $user_profile_picture, 'admin' , $user_phone, '1');

    

  }

//getters
public function getAdmin_id()
    {
        return $this->admin_id;
    }

//setters
public function setAdmin_id($admin_id)
    {
        $this->admin_id = $admin_id;
        return $this;
    }

}