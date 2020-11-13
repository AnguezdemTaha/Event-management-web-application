<?php
  
  class User
{
protected $user_id;

protected $user_mail;
protected $user_password;
protected $user_profile_picture;
protected $user_type;
protected $user_phone;
protected $user_accepted;
//private $service;

//constunt here
/*function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted) {
    $this->user_mail = $name;
    $this->user_password = $user_password;
    $this->user_profile_picture = $user_profile_picture;
    $this->user_type = $user_type;
    $this->user_phone = $user_phone;
    $this->user_accepteduser_mail = $user_accepted;
  }*/
 function __construct(){
   
 } 

/*getter + setters*/
//getters
public function getId()
    {
        return $this->user_id;
    }
public function getMail()
    {
        return $this->user_mail;
    }
public function getPassword()
    {
        return $this->user_password;
    }
public function getProfile_picture()
    {
        return $this->user_profile_picture;
    }
public function getType()
    {
        return $this->user_type;
    }
public function getPhone()
    {
        return $this->user_phone;
    }
public function getAccepted()
    {
        return $this->user_accepted;
    }

//setters
public function setId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }
public function setMail($user_mail)
    {
        $this->user_mail = $user_mail;
        return $this;
    }
public function setPassword($user_password)
    {
        $this->user_password = $user_password;
        return $this;
    }
public function Profile_picture($user_profile_picture)
    {
        $this->user_profile_picture = $user_profile_picture;
        return $this;
    }
public function setType($user_type)
    {
        $this->user_type = $user_type;
        return $this;
    }
public function setPhone($user_phone)
    {
        $this->user_phone = $user_phone;
        return $this;
    }
public function setAccepted($user_accepted)
    {
        $this->user_accepted = $user_accepted;
        return $this;
    }


}
?>