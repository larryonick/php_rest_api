<?php
//headers 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once('../../config/Database.php');
include_once('../../models/Post.php');

//Initialize the database object 
$database = new Database();
$db = $database->connect();

//instantiate the blog post object
$post = new Post($db);

//blog post query 
$result = $post->read();

//get row count 
$num = $result->rowCount();

//check to see if there's any post 

if($num > 0){
  //post array 
  $post_arr = array();
}


?>