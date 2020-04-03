<?php

// get database connection
include_once './Database.php';
 
// instantiate openration object
include_once './Operation.php';
 
$database = new Database();
$db = $database->getConnection();
 
$op = new Operation($db);


if($op->delete()){
        
    header("Location: index.php"); 
}
 else{
     
    header("Location: index.php"); 
}

?>