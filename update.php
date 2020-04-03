<?php
session_start();
// get database connection
include_once './Database.php';
 
// instantiate openration object
include_once './Operation.php';
 
$database = new Database();
$db = $database->getConnection();
 
$op = new Operation($db);

$name = $_POST['update_name'];
$sub = $_POST['update_sub'];



// make sure data is not empty
if(!empty($name) &&  !empty($sub)){
    
 
    $op->name = $name;
    $op->sub = $sub;


    if($op->update()){
        
        header("location: index.php");
    }
     else{
         
      echo "not ok";
    }
 
}
 // tell the user data is incomplete
 else{
 
     echo "Data is incomplete.";
 }
  ?>