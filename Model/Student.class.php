<?php
  
  //est_ce le includ est important ?
  include ('User.class.php');
  class Student extends User
{
private $student_birthday;
private $student_f_name;
private $student_l_name;

function __construct($user_mail, $user_password, $user_profile_picture, $user_type, $user_phone, $user_accepted, $student_birthday, $student_f_name, $student_l_name) {
    parent::__construct($user_mail, $user_password, $user_profile_picture, 'student' , $user_phone, '1');

    $this->student_birthday = $student_birthday;
    $this->student_f_name = $student_f_name;
    $this->student_l_name = $student_l_name;

  }

/*getter + setters*/
//getters
public function getBirthday()
    {
        return $this->student_birthday;
    }
public function getF_name()
    {
        return $this->student_f_name;
    }
public function getL_name()
    {
        return $this->student_l_name;
    }

//setters
public function setBirthday($student_birthday)
    {
        $this->student_birthday = $student_birthday;
        return $this;
    }
public function setF_name($student_f_name)
    {
        $this->student_f_name = $student_f_name;
        return $this;
    }
public function setL_name($user_mail)
    {
        $this->student_l_name = $student_l_name;
        return $this;
    }


}