<?php
$mysqli = new mysqli('localhost', 'root', '' , 'student_data') or die(mysqli_eror($mysqli));


$name = "";
$department = "";
$semester = "";
$shift = "";
$roll = "";
$update = false;
$id = 0;

if (isset($_POST['save'])){
    
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $shift = $_POST['shift'];
    $roll = $_POST['roll'];

    $mysqli->query("INSERT INTO data(name,department,semester,shift,roll) VALUES('$name','$department','$semester', '$shift', '$roll' )") or die($mysqli->error);
    header("location: index.php");
}



if (isset($_GET['delete'])){

    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

    header("location: tables.php");
}

if (isset($_GET['edit'])){

    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    $update = true;
    $row = $result->fetch_array();

    $name = $row['name'];
    $department = $row['department'];
    $semester = $row['semester'];
    $shift = $row['shift'];
    $roll = $row['roll'];
}

if (isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $shift = $_POST['shift'];
    $roll = $_POST['roll'];

    $mysqli->query("UPDATE data SET name= '[$name]', department='[$department]', semester='[$semester]',shift='[$shift]',roll='[$roll]' WHERE id='[$id]'") or die($mysqli->error);
    
    header("location: index.php");
}



?>