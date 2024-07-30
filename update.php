<?php

$id = $_GET['id'];

$name = $_POST['name'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
$dob = $_POST['dob'];

require 'connect.php';

$sql = "UPDATE `student`
		SET name = '$name', roll = $roll, reg = $reg, dob = '$dob'
		WHERE id = $id ";

if ( $conn->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Update Successfully.';
	header("Location: show.php?id=" . $id);
}

?>