<?php

class Operation {

    private $conn;
   
    public $name;
    public $sub;

    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    function create() {
       
        $qry = "insert into std (name,sub) values (?,?)";
        
        // prepare query
        $stmt = $this->conn->prepare($qry);

        // bind values
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->sub);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function select(){
        $qry = "select * from std";
        $stmt = $this->conn->prepare($qry);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function delete(){
        $qry = "delete from std where id = ?";
            
        // prepare query
        $stmt = $this->conn->prepare($qry);

        // bind values
        $stmt->bindParam(1, $_GET['id']);
       

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    function edit(){


        $qry = "select * from std where id= ?";

        $stmt = $this->conn->prepare($qry);

        $stmt->bindParam(1,$_GET['id']);

        $stmt->execute();

        return $stmt->fetchAll();

    }

    function update(){
        $qry = "update std  set name = ? ,sub = ?  where id = ?";
        // prepare query
            
        $stmt = $this->conn->prepare($qry);
       
        // bind values
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->sub);
        $stmt->bindParam(3, $_GET['id']);
       

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

}
