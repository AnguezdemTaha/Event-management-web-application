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

    //function utilitaire help us to get id of the user infos
    public function selectUserIdByMail($user){
      
      $query=$this->db->prepare('select user_id from user  where user_mail= ?');
      $query->execute([$user->getMail()]);
      return $query->fetchAll();
    }
    public function selectUserTypeByMail($user){
      
      $query=$this->db->prepare('select user_type from user  where user_mail= ?');
      $query->execute([$user->getMail()]);
      return $query->fetchAll();
    }


    public function selectAllStudents(){
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1 (real user)
      // not full jouture bcs we not speaking abt attribut .... intersection they need to both have user_id egau 
      $query=$this->db->prepare('select * from user INNER JOIN student ON user.user_id = student.user_id where user_accepted = ?');
      $query->execute(['1']);
      return $query->fetchAll();
    }
    public function selectAllClubs(){
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1 (real user)
      // not full jouture bcs we not speaking abt attribut .... intersection they need to both have user_id egau 
      $query=$this->db->prepare('select * from user INNER JOIN club ON user.user_id = club.user_id where user_accepted = ?');
      $query->execute(['1']);
      return $query->fetchAll();
    }
    public function selectAllStudentsDemands(){
      //0 : demendes not acceped
      $query=$this->db->prepare('select * from user INNER JOIN student ON user.user_id = student.user_id where user_accepted = ?');
      $query->execute(['0']);
      return $query->fetchAll();
    }
    public function selectAllClubsDemands(){
      //0 : demendes not acceped
      $query=$this->db->prepare('select * from user INNER JOIN club ON user.user_id = club.user_id where user_accepted = ?');
      $query->execute(['0']);
      return $query->fetchAll();
    }
    //user general attributs for exemple for login ...
    public function selectUserByMail($user){
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($user);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $type_table= $this->selectUserTypeByMail($user);//its a table
      $user_type="";
      foreach ($type_table as $type) {
        $user_type=$type[0]; //????
      }
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      if($user_type == "Student"){
        //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      $query=$this->db->prepare('select * from user INNER JOIN student ON user.user_id = student.user_id where user_id= ?');
      $query->execute([$user_id]);
      return $query->fetchAll();
      }
      else{
        if($user_type == "Club"){
          $query=$this->db->prepare('select * from user INNER JOIN club ON user.user_id = club.user_id where user_id= ?');
          $query->execute([$user_id]);
          return $query->fetchAll();
        }
      }
    }
    /*public function selectStudentByMail($student){
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($student);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      $query=$this->db->prepare('select * from user INNER JOIN student ON user.user_id = student.user_id where user_id= ?');
      $query->execute([$user_id]);
      return $query->fetchAll();
    }
    public function selectClubById($club){
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($club);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      $query=$this->db->prepare('select * from user INNER JOIN club ON user.user_id = club.user_id where user_id= ?');
      $query->execute([$user_id]);
      return $query->fetchAll();
    }*/

    public function Login($user){
     
      //when someone register he's registred on database with user_accepted=0 intil the admin acced the user and becom 1
      //we can select only the type ( to do after )
      $query=$this->db->prepare('select * from user where user_mail= ? and user_password= ?');
      $query->execute([$user->getMail(), $user->getPassword()]);
      $user_table= $query->fetchAll();
      $user_type="";
      foreach ($user_table as $type) {
        $user_type=$type[0]["type"]; //????
      }
      $user_id=0;
      foreach ($user_table as $id) {
        $user_id=$id[0]["id"]; //????
      }
      $user_total=[];
      if($user_type == "Student"){
        $query2=$this->db->prepare('select * from user INNER JOIN student ON user.user_id = student.user_id where user_id= ?');
        $query2->execute([$user_id]);
        $user_total= $query2->fetchAll();
      }
      else{
        if($user_type == "Club"){
          $query2=$this->db->prepare('select * from user INNER JOIN club ON user.user_id = club.user_id where user_id= ?');
          $query2->execute([$user_id]);
          $user_total=  $query2->fetchAll();
        }
      }
      return $user_total;
    }

    public function addUser($user){//insertion in the main table (user)
      $query=$this->db->prepare('INSERT INTO user(`user_mail`, `user_password`, `user_profile_picture`, `user_type`, `user_phone`, `user_accepted`) VALUES (?, ?, ?, ?, ?, ?)');
      $query->execute([$student->getMail(), $student->getPassword(), $student->getProfile_picture(), $student->getType(), $student->getPhone(), $student->getAccepted()]); 

    }
    public function updateUser($user, $olduser){//in the main table :usermail for the ancieace mail
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($olduser);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      $query=$this->db->prepare('UPDATE user set user_mail = ?, user_password = ?, user_profile_picture = ?,
      user_type = ?, user_phone = ? ,user_accepted= ? WHERE user_id = ?');
      $query->execute([$user->getMail(), $user->getPassword(), $user->getProfile_picture(), $user->getType(), $user->getPhone(), $user->getAccepted(), $user_id]);
    }
    public function deleteUser($user){// in the mian table :demand too are included (user)
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($user);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      $type_table= $this->selectUserTypeByMail($user);//its a table
      $user_type="";
      foreach ($type_table as $type) {
        $user_type=$type[0]; //????
      }
      //delete from principal tabl
      $query=$this->db->prepare('DELETE FROM user WHERE user_id = ?');
      $query->execute($user_id);

      if($user_type == "Student"){
        $query=$this->db->prepare('DELETE FROM student WHERE user_id = ?');
        $query->execute($user_id);
      }
      else{
        if($user_type == "Club"){
          $query=$this->db->prepare('DELETE FROM club WHERE user_id = ?');
          $query->execute($user_id);
        }
      }
      
    }

    public function sendStudentDemand($student){
      $this->addUser($student);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($student);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      /*as a student */
      //insertion in the other table student
      $query2=$this->db->prepare('INSERT INTO student(`user_id`, `student_birthday`, `student_f_name`, `student_l_name`) VALUES (?, ?, ?, ?)');
      $query2->execute([$user_id, $student->getBirthday(), $student->getF_name(), $student->getL_name()]);
      
    }

    public function sendClubDemand($club){
      $this->addUser($club);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($club);//its a table
      $club_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      /*as a student */
      //insertion in the other table student
      $query=$this->db->prepare('INSERT INTO student(`user_id`, `club_name`) VALUES (?, ?, ?, ?)');
      $query->execute([$user_id, $club->getName()]);
      
    }

    public function accepteUser($user){//for student and club its the same
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($user);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      $query=$this->db->prepare('UPDATE user set user_accepted = ? WHERE user_id = ?');
      $query->execute(["1", $user_id]);
    }

    


    /*public function deleteStudent($student){  // demand too are included (user)
      //delete from principal table
      $this->deleteUser($student);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($student);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      //delete from the other table : student
      $query=$this->db->prepare('DELETE FROM student WHERE user_id = ?');
      $query->execute($user_id);
    }

    public function deleteClub($club){  // demand too are included (user)
      //delete from principal table
      $this->deleteUser($club);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($club);//its a table
      $user_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      //delete from the other table : student
      $query=$this->db->prepare('DELETE FROM club WHERE user_id = ?');
      $query->execute($user_id);
    }*/

    //....
    public function updateStudent($student, $oldstudent){
      $this->updateUser($student, $oldstudent);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($student);//its a table
      $club_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      
      $query=$this->db->prepare('UPDATE student set student_birthday = ?, student_f_name = ?, student_l_name = ? WHERE user_id = ?');
      $query->execute([$student->getBirthday(), $student->getF_name(), $student->getL_name(), $user_id]);
    }

    public function updateClub($club, $oldclub){
      $this->updateUser($club, $oldclub);
      //selectidbymail for geting id studnet and ez add on the other table :studnet
      $id_table= $this->selectUserIdByMail($club);//its a table
      $club_id=0;
      foreach ($id_table as $id) {
        $user_id=$id[0]; //????
      }
      
      $query=$this->db->prepare('UPDATE club set club_name = ? WHERE user_id = ?');
      $query->execute([$student->getName(), $user_id]);
    }




  }
?>