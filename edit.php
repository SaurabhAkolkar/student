<?php

include_once './Database.php';
 
// instantiate openration object
include_once './Operation.php';
 
$database = new Database();
$db = $database->getConnection();
 
$op = new Operation($db);

$student = $op->edit();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="a.css">
    <title>Student</title>

  </head>

  <body>
  
            <nav class="navbar navbar-expand-md navbar-fixed-top" style="background-color: #6200EE;">
                <div class="container">
                       <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item"><h3 class="nav-link"  style="color:#fff">Welcome Student</h3></li>
                        </ul>
                </div>
            </nav>

            <div class="container">
                <div class="maindiv">
                        <form action="<?php echo "update.php?id=".$_GET['id'];?>" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="<?php echo $student[0]['name'];?>" class="form-control" name="update_name" placeholder="Enter Student Name" required>
                            </div>
                            <div class="form-group">
                              <label for="sub">Subject</label>
                              <input type="text" value="<?php echo $student[0]['sub'];?>" class="form-control"name="update_sub" placeholder="Subject" required>
                            </div>
                            
                             <button type="submit" class="btn btn-primary">Submit</button>
                             
                        </form>
                        
                </div>
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>