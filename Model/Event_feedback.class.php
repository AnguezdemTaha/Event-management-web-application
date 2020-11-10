<?php
  
  class Event_feedback
{
private $event;
private $user;
private $feedback_date;
private $feedback_description;
private $feedback_note;

/*function __construct($event, $user, $feedback_date, $feedback_description, $feedback_note) {
    $this->event = $event;
    $this->user = $user;
    $this->feedback_date = $feedback_date;
    $this->feedback_description = $feedback_description;
    $this->feedback_note = $feedback_note;
  }*/
function __construct(){
    
}
/*getter + setters*/
//getters
public function getDate()
    {
        return $this->feedback_date;
    }
public function getEvent()
    {
        return $this->event;
    }
public function getUser()
    {
        return $this->user;
    }
public function getDescription()
    {
        return $this->feedback_description;
    }
public function getNote()
    {
        return $this->feedback_date;
    }
//setters
public function setDate($report_date)
    {
        $this->feedback_date = $feedback_date;
        return $this;
    }
public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }
public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
public function setDescription($feedback_description)
    {
        $this->feedback_description = $feedback_description;
        return $this;
    }
public function setNote($feedback_note)
    {
        $this->feedback_note = $feedback_note;
        return $this;
    }


}