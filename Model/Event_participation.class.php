<?php
  
  class Event_participation
{
private $event_participation_id;

private $event;
private $user;
private $participation_date;

function __construct($event, $user, $participation_date) {
    $this->event = $event;
    $this->user = $user;
    $this->participation_date = $participation_date;
  }

/*getter + setters*/
//getters
public function getId()
    {
        return $this->event_participation_id;
    }
public function getParticipation_date()
    {
        return $this->participation_date;
    }
public function getEvent()
    {
        return $this->event;
    }
public function getUser()
    {
        return $this->user;
    }
//setters
public function setId($event_participation_id)
    {
        $this->event_participation_id = $event_participation_id;
        return $this;
    }
public function setParticipation_date($participation_date)
    {
        $this->event_participation_date = $event_participation_date;
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


}