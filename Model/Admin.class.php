<?php
  
  //est_ce le includ est important ?
  include ('User.class.php');
  class Admin extends User
{

function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted, $club_name) {
    parent::__construct($user_mail, $user_password, $user_profile_picture, 'admin' , $user_phone, '1');

    

  }

}