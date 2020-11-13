<?php
  
  class Comment_reply
{
private $comment_reply_id;

private $comment;
private $user;
private $reply_date;
private $reply_content;

function __construct($comment, $user, $reply_date, $reply_content) {
    $this->comment = $comment;
    $this->user = $user;
    $this->reply_date = $reply_date;
    $this->reply_content = $reply_content;
  }

/*getter + setters*/
//getters
public function getId()
    {
        return $this->comment_reply_id;
    }
public function getDate()
    {
        return $this->reply_date;
    }
public function getComment()
    {
        return $this->comment;
    }
public function getUser()
    {
        return $this->user;
    }
public function getContent()
    {
        return $this->reply_content;
    }
//setters
public function setDate($comment_reply_id)
    {
        $this->comment_reply_id = $comment_reply_date;
        return $this;
    }
public function setDate($reply_date)
    {
        $this->reply_date = $reply_date;
        return $this;
    }
public function setReply($event)
    {
        $this->comment = $comment;
        return $this;
    }
public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
public function setContent($reply_content)
    {
        $this->reply_content = $reply_content;
        return $this;
    }


}