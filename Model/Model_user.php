<?php
  include 'Db_connect.php';
  //include 'user.class.php'
  class Model_user {


    private $db;
    public function __construct(){
      $dbcon = new Db_connect(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
      $this->db = $dbcon->connect();
    }


    public function allUsers(){
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1 (real user)
      $query=$this->db->prepare('select * from user where user_accepted = ?');
      $query->execute(['1']);
      return $query->fetchAll();
    }
    public function allUsersDemands(){
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      $query=$this->db->prepare('select * from user where user_acceped = ?');
      $query->execute(['0']);
      return $query->fetchAll();
    }
    public function selectUser($user){
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      $query=$this->db->prepare('select * from user where user_mail = ?, user_password = ?, user_profile_picture = ?,
      user_type = ?, user_phone = ? ,user_accepted= ?');
      $query->execute([$user->getMail(), $user->getPassword(), $user->getProfile_picture(), $user->getType(), $user->getPhone(), $user->getAccepted()]);
      return $query->fetchAll();
    }

    public function addUser($user){
      $query=$this->db->prepare('INSERT INTO user(`user_mail`, `user_password`, `user_profile_picture`, `user_type`, `user_phone`, `user_accepted`) VALUES (?, ?, ?, ?, ?, ?)');
      $query->execute([$user->getMail(), $user->getPassword(), $user->getProfile_picture(), $user->getType(), $user->getPhone(), $user->getAccepted()]); 
    }

    public function deleteUser($user_id){  
      $query=$this->db->prepare('DELETE FROM user WHERE user_id = ?');
      $query->execute($user_id);
    }

    public function updateUser($user, $user_id){
      $query=$this->db->prepare('UPDATE Empoyes set user_mail = ?, user_password = ?, user_profile_picture = ?,
      user_type = ?, user_phone = ? ,user_accepted= ? WHERE user_id = ?');
      $query->execute([$user->getMail(), $user->getPassword(), $user->getProfile_picture(), $user->getType(), $user->getPhone(), $user-getAccepted(), $user_id]);
    }


  }
?>