<?php

// get database connection
include_once './Database.php';
 
// instantiate openration object
include_once './Operation.php';
 
$database = new Database();
$db = $database->getConnection();
 
$op = new Operation($db);
$allStudent = $op->select();

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
                <a href=add.php class="btn btn-primary">Add Student</a><hr>
                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th colspan="2">Operation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 

                            foreach ($allStudent as $student){
                                  echo "<tr>";
                                    echo "<th>".$student['id']."</th>";
                                    echo "<td>".$student['name']."</td>";
                                    echo "<td>".$student['sub']."</td>";
                                    echo "<td><a href='edit.php?id=".$student['id']."' class='btn btn-primary'>Update</a></td>";
                                    echo "<td><a href='delete.php?id=".$student['id']."' class='btn btn-primary'>Delete</a></td>";
                                  echo "</tr>";
                            }
                          ?>
                        </tbody>
                </table>
             </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>