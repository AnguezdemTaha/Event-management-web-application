<?php
  
  class Event_report
{
private $event_report_id;

private $event;
private $user;
private $report_date;
private $report_description;

function __construct($event, $user, $report_date, $report_description) {
    $this->event = $event;
    $this->user = $user;
    $this->report_date = $report_date;
    $this->report_description = $report_description;
  }

/*getter + setters*/
//getters
public function getId()
    {
        return $this->event_report_id;
    }
public function getDate()
    {
        return $this->report_date;
    }
public function getEvent()
    {
        return $this->event;
    }
public function getUser()
    {
        return $this->user;
    }
public function getdescription()
    {
        return $this->report_description;
    }
//setters
public function setId($event_report_id)
    {
        $this->report_id = $event_report_id;
        return $this;
    }
public function setDate($report_date)
    {
        $this->report_date = $report_date;
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
public function setDescription($report_description)
    {
        $this->report_description = $report_description;
        return $this;
    }


}