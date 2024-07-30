<?php
// Get the student data from the $_POST variable.
$name = $_POST['name'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
 $dob = $_POST['dob'];

// Create a new mysqli object to connect to the school database.
require "connect.php";

// Construct a SQL INSERT INTO statement to insert the new student data into the student table.
$sql = "INSERT INTO student
VALUES(NULL, '$name', $roll, $reg, '$dob' )";

// Execute the SQL statement and check the result.
if ($conn->query($sql)){
    session_start();
    $_SESSION['msg'] = 'Student Added Successfully';
    
  // Redirect the user to the index.php page with a msg=success query string parameter.
  header("Location: index.php");
} 

?>
