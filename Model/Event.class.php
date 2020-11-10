<?php
  
  class Event
{
private $event_name;
private $event_start_date;
private $event_end_date;
private $event_description;
private $event_picture;
private $event_creation_date;
private $event_acceped;

private $club;//obj

//constunt here
/*function __construct($event_name, $event_start_date, $event_end_date, $event_description, $event_picture, $event_creation_date, $club) {
    $this->event_name = $event_name;
    $this->event_start_date = $event_start_date;
    $this->event_end_date = $event_end_date;
    $this->event_description = $event_description;
    $this->event_picture = $event_picture;
    $this->event_creation_date = $event_creation_date;

    $this->club = $club;
  }*/
function __construct(){

  }
/*getter + setters*/
//getters
public function getName()
    {
        return $this->event_name;
    }
public function getStart_date()
    {
        return $this->event_start_date;
    }
public function getEnd_date()
    {
        return $this->event_end_date;
    }
public function getDescription()
    {
        return $this->event_description;
    }
public function getPicture()
    {
        return $this->event_picture;
    }
public function getCreation_date()
    {
        return $this->event_creation_date;
    }
public function getAccepted()
    {
        return $this->event_acceped;
    }
public function getClub()
    {
        return $this->event_club;
    } 

//setters
public function setName($event_name)
    {
        $this->event_name = $event_name;
        return $this;
    }
public function setStart_date($event_start_date)
    {
        $this->event_start_date = $event_start_date;
        return $this;
    }
public function setEnd_date($event_end_date)
    {
        $this->event_end_date = $event_end_date;
        return $this;
    }
public function setDescription($event_description)
    {
        $this->event_description = $event_description;
        return $this;
    }

public function setPicture($event_picture)
    {
        $this->event_picture = $event_picture;
        return $this;
    }
public function setCreation_date($event_creation_date)
    {
        $this->event_creation_date = $event_creation_date;
        return $this;
    }
public function seAccepted($event_acceped)
    {
        $this->event_acceped = $event_acceped;
        return $this;
    }
public function setClub($event_club)
    {
        $this->event_club = $event_club;
        return $this;
    }





}