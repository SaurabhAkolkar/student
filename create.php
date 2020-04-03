<?php
session_start();
// get database connection
include_once './Database.php';
 
// instantiate openration object
include_once './Operation.php';
 
$database = new Database();
$db = $database->getConnection();
 
$op = new Operation($db);

$name = $_POST['std_name'];
$sub = $_POST['sub'];


// make sure data is not empty
if(!empty($name) &&  !empty($sub)){
    
 
    $op->name = $name;
    $op->sub = $sub;


    if($op->create()){
        
        header("Location: index.php"); 
    }
     else{
         
        header("Location: index.php"); 
    }
 
}
 // tell the user data is incomplete
 else{
 
     echo "Data is incomplete.";
 }
  ?>