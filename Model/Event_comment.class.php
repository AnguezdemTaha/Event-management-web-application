<?php
  
  class Event_comment
{
private $event_comment_id

private $event;
private $user;
private $comment_date;
private $comment_content;

function __construct($event, $user, $comment_date, $comment_content) {
    $this->event = $event;
    $this->user = $user;
    $this->comment_date = $comment_date;
    $this->comment_content = $comment_content;
  }

/*getter + setters*/
//getters
public function getId()
    {
        return $this->event_comment_id;
    }
public function getDate()
    {
        return $this->comment_date;
    }
public function getEvent()
    {
        return $this->event;
    }
public function getUser()
    {
        return $this->user;
    }
public function getContent()
    {
        return $this->comment_content;
    }
//setters
public function setId($event_comment_id)
    {
        $this->event_comment_id = $event_comment_id;
        return $this;
    }
public function setDate($comment_date)
    {
        $this->comment_date = $comment_date;
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
public function setContent($comment_content)
    {
        $this->comment_content = $comment_content;
        return $this;
    }



}