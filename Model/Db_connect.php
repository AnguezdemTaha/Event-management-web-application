<?php
class Db_connect{
    
    public function connect(){
         $user = 'root';
         $pass = '';
         $connection = new PDO('mysql:host=localhost;dbname=event_management',$user,$pass); 
         return $connection;
     }
}