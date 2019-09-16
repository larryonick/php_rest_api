<?php

class Post{
  //DB stuff 
  private $con;
  private $table = 'posts';

  //post properties 
  public $id; 
  public $category_id; 
  public $category_name; 
  public $title; 
  public $body; 
  public $author; 
  public $created_at; 

  //construvtor with db 
  public function __construct($db){
    $this->con = $db;
  }
}


?>