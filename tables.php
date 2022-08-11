<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student list</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class= "container">


  <?php require_once 'process.php'; ?>


    <?php
    
    $mysqli = new mysqli('localhost', 'root', '' , 'student_data') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));

    //pre_r($result);
    //pre_r($result->fetch_assoc());
?>   


<?php
        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }

    ?>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://www.npi.gov.bd/"><img src = "npi.jpg" hight = "50px" width= "50px" style = "border-radius: 50%" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="tables.php">Student list</a>
      <a class="nav-item nav-link" href="http://www.npi.gov.bd/studentf/">Institute Student info</a>
    </div>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

  <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'student_data') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));


    ?>

  <div class="row justify-content-center">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Department</th>
        <th>Semester</th>
        <th>Shift</th>
        <th>Roll</th>
        <th colspan="2">Actions</th>
      </thead>

      <?php 
                while($row = $result->fetch_assoc()): ?>

      <tr>
        <td>
          <?php echo $row['name']?>
        </td>
        <td>
          <?php echo $row['department']?>
        </td>
        <td>
          <?php echo $row['semester']?>
        </td>
        <td>
          <?php echo $row['shift']?>
        </td>
        <td>
          <?php echo $row['roll']?>
        </td>
        <td>
          <a href="index.php?edit=<?php echo $row['id']?>" class="btn btn-info">Edit</a>
          <a href="process.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
        </td>

      </tr>

      <?php endwhile ?>


    </table>
    </div>
</body>

</html>
