<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head> 
<body>

<div class="container">

    <?php require_once 'process.php'; ?>
  


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://www.npi.gov.bd/"><img src = "npi.jpg" hight = "50px" width= "50px" style = "border-radius: 50%" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="tables.php">Student list</a>
      <a class="nav-item nav-link" href="http://www.npi.gov.bd/studentf/">Institute Student info</a>
     
    </div>
  </div>
</nav>

    <div class="row justify-content-center">
    <form action="process.php" method="POST">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        </div>

        <div class="form-group">
        <label>Department</label>
        <input type="text" name="department" class="form-control" placeholder="Enter Your Department">
        </div>

        <div class="form-group">
        <label>Semester</label>
        <input type="text" name="semester" class="form-control" placeholder="Enter Your Semeter">
        </div>

        <div class="form-group">
        <label>Shift</label>
        <input type="text" name="shift" class="form-control" placeholder="Enter Your Shift">
        </div>

        <div class="form-group">
        <label>Roll</label>
        <input type="text" name="roll" class="form-control" placeholder="Enter Your Roll">
        </div>

        <div class="form-group">
        <?php if ($update == true): ?>
                    <button type="submit" name="update" class="btn btn-info">Update</button> 
                <?php else : ?>
                    <button type="submit" name="save" class="btn btn-primary">Save</button> 
                <?php endif; ?> 
        </div>
    </form>
    </div>    

    
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
<body>
<html>

</div>
<body>
<html>